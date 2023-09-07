<?php



/**

 * Day Six theme functions and definitions

 * 

 * @package Day Six theme

 */


/*
|--------------------------------------------------------------------------
| Front-end styles en scripts
|--------------------------------------------------------------------------
|
| 
| 
|
*/
function add_theme_scripts() {
    // wp_enqueue_style( 'swiper',  'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
     wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.5.0', 'all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', array(), '1.1', 'all');
    // wp_enqueue_script( 'parallax', get_template_directory_uri() . '/script/parallax.js', array(), 1.1, true);
    // wp_enqueue_script( 'swiper', get_template_directory_uri() . '/script/swiper.js', array(), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script/index.js', array(), 1.1, true);
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


add_filter( 'use_block_editor_for_post', '__return_false' ); 



// Menu

function day_six_config(){
    register_nav_menus (
        array(
            'day_six_main_menu' => 'Main Menu'
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'preview', 100, 100, array( 'center', 'center' ) );
}



add_action( 'after_setup_theme', 'day_six_config', 0 );

 

function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
            $menu[$m->ID]['target'] = $m->target;
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
        $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
            $menu[$m->menu_item_parent]['children'][$m->ID]["target"] = $m->target;
        }
    }
    return $menu;

}


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

register_sidebar( array(
    'name' => __( 'Filter sidebar', 'rmccollin' ),
    'id' => 'filter-sidebar',
    'description' => __( 'A widget area located to the left filter sidebar.', 'rmccollin' ),
    'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => ' <div class="buttonwidget"><button></button></div></div>  
    <div class=border-hr></div>',
    'before_title' => '<p class="large fbody regular fcd d-none">',
    'after_title' => '</p>',
  ) );
   
  // Disables the block editor from managing widgets in the Gutenberg plugin.
  add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
   
  // Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
  add_filter( 'use_widgets_block_editor', '__return_false' );


// add_filter( 'rest_authentication_errors', function( $result ) {
//   return new WP_Error( 'rest_not_access', 'You can not access.', array( 'status' => 401 ) );;
// });

add_filter('xmlrpc_enabled', '__return_false');


// Active menu item
function vince_check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Overige teksten',
		'menu_title'	=> 'Extra vertaling',
		'menu_slug' 	=> 'extra_vertaling',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/**
 * Advanced Custom Fields Options function
 * Always fetch an Options field value from the default language
 */
function cl_acf_set_language() {
    return acf_get_setting('default_language');
  }
   
  function get_global_option($name) {
      add_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
      $option = get_field($name, 'option');
      remove_filter('acf/settings/current_language', 'cl_acf_set_language', 100);
      return $option;
  }

/**
 * Custom query for WooCommerce product needed by Connect Your IT's Perfect
 */
function handle_custom_query_var( $query, $query_vars ) {
    // if ($query['post_type'] == 'product') {
    if (array_key_exists('erp_product_id',$query_vars)) {
        // write_log('%%%% query_vars %%%%');
        // write_log($query_vars);
        if ( empty( $query_vars['erp_product_id'] )) {
            $query['tax_query'][] = array(
                'taxonomy'        => 'pa_erp_product_id',
                'operator'        => 'EXISTS',
            );
        } else {
            $query['tax_query'][] = array(
                'taxonomy'        => 'pa_erp_product_id',
                'field'           => 'slug',
                'terms'           => $query_vars['erp_product_id'],
                'operator'        => 'IN',
            );
        }
        // write_log($query);
    }
    return $query;
}
add_filter( 'woocommerce_product_data_store_cpt_get_products_query', 'handle_custom_query_var', 10, 2 );


/**
 * Gravity Wiz // Gravity Forms // Create Coupons with Gravity Forms for Gravity Forms, WooCommerce, or Easy Digital Downloads
 *
 * Create coupons via Gravity Forms submissions. Map the coupon code to a field on the GF form and voila!
 *
 * @version 1.2.1
 * @author  David Smith <david@gravitywiz.com>
 * @license GPL-2.0+
 * @link    WooCommerce:   http://gravitywiz.com/creating-coupons-woocommerce-gravity-forms/
 * @link    Gravity Forms: http://gravitywiz.com/creating-coupons-for-gf-coupons-add-on-with-gravity-forms/
 */
class GW_Create_Coupon {

	var $_args;

	public function __construct( $args = array() ) {

		// set our default arguments, parse against the provided arguments, and store for use throughout the class
		$this->_args = wp_parse_args( $args, array(
			'form_id'         => false,
			'source_field_id' => false,
			'name_field_id'   => false,
			'plugin'          => 'gf', // accepts: 'gf', 'wc', 'edd'
			'amount'          => 0,
			'type'            => '', // accepts: 'fixed_cart', 'percent', 'fixed_product', 'percent_product'
			'meta'            => array(),
		) );

		// do version check in the init to make sure if GF is going to be loaded, it is already loaded
		add_action( 'init', array( $this, 'init' ) );

	}

	public function init() {

		// make sure we're running the required minimum version of Gravity Forms and that WooCommerce is active
		if ( ! property_exists( 'GFCommon', 'version' ) || ! version_compare( GFCommon::$version, '1.8', '>=' ) ) {
			return;
		}

		add_action( 'gform_after_submission', array( $this, 'create_coupon' ), 10, 2 );

	}

	public function create_coupon( $entry, $form ) {

		if ( ! $this->is_applicable_form( $form ) ) {
			return;
		}

		$coupon_codes = $this->get_coupon_codes( $entry, $this->_args['source_field_id'] );

		foreach ( $coupon_codes as $coupon_code ) {

			if ( $this->_args['name_field_id'] === false ) {
				$coupon_name = $coupon_code;
			} else {
				$coupon_name = rgar( $entry, $this->_args['name_field_id'] );
				$coupon_name = $coupon_name === '' ? $coupon_code : $coupon_name;
			}

			$amount = $this->_args['amount'];
			$type   = $this->_args['type'];

			if ( is_callable( $amount ) ) {
				$amount = call_user_func( $amount );
			}

			$plugin_func = array( $this, sprintf( 'create_coupon_%s', $this->_args['plugin'] ) );

			if ( is_callable( $plugin_func ) ) {
				call_user_func( $plugin_func, $coupon_name, $coupon_code, $amount, $type, $entry, $form );
			}
		}

	}

	public function create_coupon_edd( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		if ( ! is_callable( 'edd_store_discount' ) ) {
			return;
		}

		$meta = wp_parse_args( $this->_args['meta'], array(
			'name'              => $coupon_name,
			'code'              => $coupon_code,
			'type'              => $type,
			'amount'            => $amount,
			'excluded_products' => array(),
			'expiration'        => '',
			'is_not_global'     => false,
			'is_single_use'     => false,
			'max_uses'          => '',
			'min_price'         => '',
			'product_condition' => '',
			'product_reqs'      => array(),
			'start'             => '',
			'uses'              => '',
		) );

		// EDD will set it's own defaults in the edd_store_discount() so let's filter out our own empty defaults (they're just here for easier reference)
		$meta = array_filter( $meta );

		// EDD takes a $details array which has some different keys than the meta, let's map the keys to the expected format
		$edd_post_keys = array(
			'max_uses'          => 'max',
			'product_reqs'      => 'products',
			'excluded_products' => 'excluded-products',
			'is_not_global'     => 'not_global',
			'is_single_use'     => 'use_once',
		);

		foreach ( $meta as $key => $value ) {
			$mod_key = rgar( $edd_post_keys, $key );
			if ( $mod_key ) {
				$meta[ $mod_key ] = $value;
			}
		}

		edd_store_discount( $meta );

	}

	public function create_coupon_gf( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		if ( ! class_exists( 'GFCoupons' ) ) {
			return;
		}

		// hack to load GF Coupons data.php file
		if ( is_callable( 'gf_coupons' ) ) {
			gf_coupons()->get_config( array( 'id' => 0 ), false );
		} else {
			/** @noinspection PhpDynamicAsStaticMethodCallInspection */
			GFCoupons::get_config( array( 'id' => 0 ), false );
		}

		$meta = wp_parse_args( $this->_args['meta'], array(
			'form_id'           => false,
			'coupon_name'       => $coupon_name,
			'coupon_code'       => strtoupper( $coupon_code ),
			'coupon_type'       => $type, // 'flat', 'percentage'
			'coupon_amount'     => $amount,
			'coupon_start'      => '', // MM/DD/YYYY
			'coupon_expiration' => '', // MM/DD/YYYY
			'coupon_limit'      => false,
			'coupon_stackable'  => false,
		) );

		$form_id = $meta['form_id'] ? $meta['form_id'] : 0;
		unset( $meta['form_id'] );

		foreach ( $meta as $key => $value ) {
			if ( $value instanceof Closure && is_callable( $value ) ) {
				$meta[ $key ] = call_user_func( $value, $entry, $form, $this );
			}
		}

		if ( is_callable( 'gf_coupons' ) ) {
			$meta['gravityForm']      = $form_id ? $form_id : 0;
			$meta['couponName']       = $meta['coupon_name'];
			$meta['couponCode']       = $meta['coupon_code'];
			$meta['couponAmountType'] = $meta['coupon_type'];
			$meta['couponAmount']     = $meta['coupon_amount'];
			$meta['startDate']        = $meta['coupon_start'];
			$meta['endDate']          = $meta['coupon_expiration'];
			$meta['usageLimit']       = $meta['coupon_limit'];
			$meta['isStackable']      = $meta['coupon_stackable'];
			$meta['usageCount']       = 0;
			gf_coupons()->insert_feed( $form_id, true, $meta );
		} else {
			/** @noinspection PhpUndefinedClassInspection */
			GFCouponsData::update_feed( 0, $form_id, true, $meta );
		}

	}

	/**
	 * Create a WooCommerce coupon.
	 *
	 * @link https://gist.github.com/mikejolley/3969579#file-gistfile1-txt
	 */
	public function create_coupon_wc( $coupon_name, $coupon_code, $amount, $type, $entry, $form ) {

		$start_date = rgar( $this->_args['meta'], 'start_date' );
		if ( $start_date === '' || ! strtotime( $start_date ) ) {
			$date       = current_datetime();
			$start_date = $date->format( 'Y-m-d H:i:s' );
		}

		// WooCommerce coupon uses the Post Title as the coupon code hence $coupon_code is assigned to Post Title and $coupon_name is assigned to the Post Content
		$coupon = array(
			'post_title'   => $coupon_code,
			'post_content' => $coupon_name,
			'post_status'  => 'publish',
			'post_author'  => 1,
			'post_type'    => 'shop_coupon',
			'post_date'    => $start_date,
		);

		$new_coupon_id = wp_insert_post( $coupon );

		$meta = wp_parse_args( $this->_args['meta'], array(
			'discount_type'              => $type,
			'coupon_amount'              => $amount,
			'individual_use'             => 'yes',
			'product_ids'                => '',
			'exclude_product_ids'        => '',
			'usage_limit'                => '1',
			'expiry_date'                => '',
			'apply_before_tax'           => 'no',
			'free_shipping'              => 'no',
			'exclude_sale_items'         => 'no',
			'product_categories'         => '',
			'exclude_product_categories' => '',
			'minimum_amount'             => '',
			'customer_email'             => '',
		) );

		foreach ( $meta as $meta_key => $meta_value ) {
			if ( $meta_value instanceof Closure && is_callable( $meta_value ) ) {
				$meta[ $meta_key ] = call_user_func( $meta_value, $entry, $form, $this );
			}
			update_post_meta( $new_coupon_id, $meta_key, $meta[ $meta_key ] );
		}

	}

	public function get_coupon_codes( $entry, $source_field_id ) {
		return array_filter( explode( "\n", rgar( $entry, $source_field_id ) ) );
	}

	function is_applicable_form( $form ) {

		$form_id = isset( $form['id'] ) ? $form['id'] : $form;

		return (int) $form_id === (int) $this->_args['form_id'];
	}

}

# Configuration

new GW_Create_Coupon( array(
	// ID of the form which will be used to create coupons
	'form_id'         => 1,
	// ID of the field whose value will be used as the coupon code
	'source_field_id' => 2,
	// ID of the field whose value will be used as the title of the coupon
	'name_field_id'   => 1,
	// which plugin the coupon should be created for (i.e. WooCommerce = 'wc')
	'plugin'          => 'wc', // accepts: 'gf', 'wc', 'edd'
	// type of coupon code to be created, available types will differ depending on the plugin
	'type'            => 'percent',
	// amount of the coupon discount
	'amount'          => 10,
	'meta'            => array(
		'individual_use' => 'no',
		'usage_limit'    => 1,
		'free_shipping'    => 'yes',
	)
) );


/* Put a unique ID on Gravity Form (single form ID) entries.
----------------------------------------------------------------------------------------*/
add_filter("gform_field_value_uuid", "get_unique");
function get_unique(){
    $prefix = "WEB"; // update the prefix here
    do {
        $unique = mt_rand();
        $unique = substr($unique, 0, 6);
        $unique = $prefix . $unique;
    } while (!check_unique($unique));
    return $unique;
}
function check_unique($unique) {
    global $wpdb;
    $table = $wpdb->prefix . 'rg_lead_detail';
    $form_id = 1; // update to the form ID your unique id field belongs to
    $field_id = 2; // update to the field ID your unique id is being prepopulated in
    $result = $wpdb->get_var("SELECT value FROM $table WHERE form_id = '$form_id' AND field_number = '$field_id' AND value = '$unique'");
    if(empty($result))
        return true;
    return false;
}


// Hide WordPress Admin Notifications programmatically
function pr_disable_admin_notices() {
        global $wp_filter;
            if ( is_user_admin() ) {
                if ( isset( $wp_filter['user_admin_notices'] ) ) {
                                unset( $wp_filter['user_admin_notices'] );
                }
            } elseif ( isset( $wp_filter['admin_notices'] ) ) {
                        unset( $wp_filter['admin_notices'] );
            }
            if ( isset( $wp_filter['all_admin_notices'] ) ) {
                        unset( $wp_filter['all_admin_notices'] );
            }
    }
add_action( 'admin_print_scripts', 'pr_disable_admin_notices' );




