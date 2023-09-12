<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header( ); 

wp_enqueue_script(
    'my-script',
    get_template_directory_uri() . '/script/infinity-loading-products.js', // Full path to the script
    '1.0', 
    true 
);
?>
<main id="content">
    <style>
    .hhover .showonhover {
        display: flex;
        position: absolute;
        bottom: 8px;
        left: 16px;
        opacity: 0;
        transition: .5s ease;
    }
    .hhover:hover .showonhover {
        display: flex;
        position: absolute;
        bottom: 8px;
        left: 16px;
        opacity: 1;
        transition: .5s ease;
    }
    .showonhover .col-3 {
        padding-right: 4px;
        padding-left: 4px;
    }
    .little {
        border-radius: 0px;
        border: 1px solid #00000020;
    }
    .slidefloatingbutton {
    position: fixed;
    transform: unset!important;
    left: 0px!important;
    right: 0px!important;
    margin-right: unset!important;
    transform: unset!important;
    bottom: 0px!important;
    background: #000;
    border: 1px #000 solid;
    color: #ffff;
    padding: 20px!important;
    z-index: 3;
    width: 100% !important;
}
    </style>
    <div class="container">
        <div class="row pt-half">
            <div class="col-2 d-none d-lg-block">
                <?php   if ( is_active_sidebar( 'filter-sidebar' ) ) { ?>
                <h5 class="fwbold fca pb-blocks">Filter</h5>
                <aside class="filter-sidebar widget-area left" role="complementary">
                    <?php dynamic_sidebar( 'filter-sidebar' ); ?>
                </aside>
                <?php } ?>
            </div>
                     <div class="col-12 col-lg-10 p-left">
                <div class="row">
                <?php

                $link =  parse_url((empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                if (isset($link['path'])) {
                    $taxonomy = str_replace("/", "", explode('/product-category', $link['path']))[1];
                }


                $search = isset($_GET['s']) ? $_GET['s'] : '';
                $kleur = isset($_GET['filter_kleur']) ? $_GET['filter_kleur'] : '';
                $maat = isset($_GET['filter_maat']) ? $_GET['filter_maat'] : '';

                if ( is_shop() || is_product_category() ) {                    
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 24,
                        'paged' => 1,
                        'orderby' => 'menu_order',
                        'order' => 'DESC',
                        's' => $search,
                        'meta_query' => array(
                            array(
                                'key' => '_stock_status',
                                'value' => 'instock',
                                'compare' => '=',
                            )
                        ),  
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field' => 'slug',
                                'terms' => $taxonomy, 
                            ),
                            array(
                                'taxonomy' => 'pa_kleur',
                                'field'    => 'slug',
                                'terms'    => array($kleur),
                                'operator' => 'and',
                            ),
                            array(
                                'taxonomy' => 'pa_maat',
                                'field'    => 'slug',
                                'terms'    => array($maat),
                                'operator' => 'and',
                            ),
                        ),
                    );
                    $loop = new WP_Query($args);
                    
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- Hier kan je HTML plaatsen -->
                    <div class="col-6 col-lg-4 pb-half ">
                        <div class="relative hhover">
                            <a class="flipsection" href="<?php the_permalink(); ?>">
                                <div class="kader-product-img">
                                    <?php
									// Get gallery images IDs
									if( $gallery_image_ids = get_post_meta( $loop->post->ID, '_product_image_gallery', true ) ) :
										// Convert a coma separated string of Ids to an array of Ids
										$gallery_image_ids = explode(',', $gallery_image_ids);
										// Display the first image (optional)
										?><img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" class="product-img"
                                        data-id="<?php echo $loop->post->ID; ?>">
                                    <div class="overlay">
                                        <?php
										// Display the 2nd image (if it exists)
										if( isset( $gallery_image_ids[1] ) ) :
											?><img src="<?php echo wp_get_attachment_image_url( $gallery_image_ids[1], 'single-post-thumbnail'); ?>"
                                            class="product-img" data-id="<?php echo $loop->post->ID; ?>">
                                        <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="pt-prod"></div>
                                <!-- Gerelateerde kleuren -->
                                
                                <!-- Einde gerelateerde kleuren                    -->
                        </div>
                        <p class="fcc italic catt">
                            <?php echo wc_get_product_category_list( $product->get_id(), ', ','<span>','</span>' ); ?>
                        </p>
                        <h5 class="fwbold fca uppercase">
                           
                            <?php   
                            /*
                                <? echo $loop->post->post_title; ?>
                                RJ 08-09-2022, bovenstaande is niet goed en heb ik aangepast. <?= zou kunnen maar dat is shortcode voor <?php echo. Beter gewoon <?php gebruiken. 
                                Ik heb dit aangepast omdat ik wilde controleren of alles goed ging en zag dat bij de shop archive de titels op 'POST->POST->TITLE?>' stonden
                            */
                            ?>
                             <?php echo $loop->post->post_title; ?>
                        </h5>
                        <div class="btn-flip">
                            <div class="message2"> <?php if ( $price_html = $product->get_price_html() ) : ?>
                                <span class="price">
                                    <p class="fbody large regular fca"><?php echo $price_html; ?></p>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php endwhile;  ?>

                    <div id="products-container" class="row"></div>
                    <div id="loading" class="pb-half" style="display: none;">
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>

                    </div>

                        <?php
                        
                        wp_reset_postdata();
                    } else {
                        woocommerce_content();
                    }
                    ?>

                </div>
            </div>
            <button onclick="openFilter()" class="slidefloatingbutton d-block d-lg-none">Filter</button>
            <!-- filter -->
            <div id="mySidebarfilter" class="barfilter">
                <div id="move-headerfilter" class="menu-header-filter">
                    <p>Filter</p>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()">
                        <img src="/wp-content/themes/andcowoman/img/icons/x.svg" alt="">
                    </a>
                </div>
                <div id="move-headerfilter-1" class="filter-main">
                    <?php   if ( is_active_sidebar( 'filter-sidebar' ) ) { ?>
                    <aside class="filter-sidebar widget-area left" role="complementary">
                        <?php dynamic_sidebar( 'filter-sidebar' ); ?>
                    </aside>
                    <?php } ?>
                </div>
            </div>
            <div onclick="closeFilter()" id="overlayfilter"></div>
        </div>
    </div>
</main>
<?php get_footer();?>