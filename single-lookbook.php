<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */



get_header(); ?>

<main id="content">
    <div class="container pt-half">
        <p class="w-fit mx-auto">Lookbook</p>
        <h1 class="text-30 md:text-38 font-bold w-fit mx-auto"><?php the_title();?></h1>
    </div>
    <div class="container flipbook pb-full pt-half relative">
        <div id="loader" style="display: flex; align-items: center; justify-content: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: white; z-index: 5;">
            <p>Loading...</p>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">
        <link href="https://fonts.googleapis.com/css?family=Amiri" rel="stylesheet">
        <div class="flipbook-wrap">
       
        
            <div class="sample-flipbook relative z-[2]">   
            
            <?php
            if( have_rows('lookbook') ):
                while( have_rows('lookbook') ) : the_row(); ?>
                <?php
                $image = get_sub_field('afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
               <div class="relative"> 
                    <?php if (get_sub_field('link')): ?>
                        <a href="<?php echo get_sub_field('link'); ?>" class="absolute top-0 left-0 right-0 bottom-0 overflow-hidden" target="_blank">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"/>
                        </a> 
                    <?php else: ?>
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover object-center"/>
                    <?php endif; ?>
                </div>

                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="relative w-[350px] sm:w-[500px] md:w-[900px] mx-auto flex justify-center z-[1] mt-[20px]">
            <a href="" class="btn prev"><img class="arrowproduct" src="/wp-content/themes/andcowoman/img/icons/arrow-l.svg"></a>
            <a href="" class="btn next"><img class="arrowproduct" src="/wp-content/themes/andcowoman/img/icons/arrow-r.svg"></a>
        </div>
            
        </div>
    </div>

</main>
<script src="/wp-content/themes/andcowoman/inc/flipbook.js"></script>
<?php get_footer(); ?>