<?php
// //// INCLUDE
// add_action( 'wp_enqueue_scripts', 'css_js_include' );
/*** CUSTOMIZER ***/
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );
//// CUSTOM LOGO
function config_custom_logo() {
    $defaults = array(
        'height' => 200,
        'width' => 200,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array(),
    );
    add_theme_support( 'custom-logo' , $defaults );
}
add_action( 'after_setup_theme' , 'config_custom_logo' );

//// CUSTOM COLORS


// ADD woocoommerce class is search.php
    add_filter( 'body_class', 'custom_class' );
function custom_class( $classes ) {
    if ( is_search() ) {
        $classes[] = 'woocommerce';
    }
    return $classes;
}

// =========================================================================
// REGISTER CUSTOMIZER - PANEL, SECTION, SETTINGS AND CONTROL
// =========================================================================
function nolen_register_theme_customizer( $wp_customize ) {
    // Create custom panel.
    $wp_customize->add_panel( 'text_blocks', array(
        'priority'       => 200,
        'theme_supports' => '',
        'title'          => __( 'Footer', 'Nolen' ),
        'description'    => __( 'Set editable text for certain content.', 'Nolen' ),
    ) );
    // Add section.
    $wp_customize->add_section( 'custom_copyright' , array(
        'title'    => __('Copyright','Nolen'),
        'panel'    => 'text_blocks',
        'priority' => 200
    ) );


    // Add setting
    $wp_customize->add_setting( 'copyright_text_block', array(
         'default'           => __( '© Copyright', 'Nolen' ),
         'sanitize_callback' => 'sanitize_text'
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'custom_copyright',
            array(
                'label'    => __( 'Copyright szöveg', 'Nolen' ),
                'section'  => 'custom_copyright',
                'settings' => 'copyright_text_block',
                'type'     => 'text'
            )
        )
    );
    // Sanitize text
    function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
    
    //////////////////////////////////////////////////////// LINK
    
    // Add setting
    $wp_customize->add_setting( 'copyright_link_block', array(
        'default'           => __( 'link.hu', 'Nolen' ),
        
        ) );
        // Add control
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'custom_copyright_link',
            array(
                'label'    => __( 'Copyright link', 'Nolen' ),
                'section'  => 'custom_copyright',
                'settings' => 'copyright_link_block',
                'type'     => 'text'
                )
                )
            );

    //////////////////////////////////////////////////////// TOP-BOTTOM
    // Add section.
//     $wp_customize->add_section( 'header_bottom_bar' , array(
//         'title'    => __('Header bottom bar','Nolen'),
//         'priority' => 200
//     ) );

//     //// EMAIL

//     // Add setting
//     $wp_customize->add_setting( 'email_block', array(
//         'default'           => __( '@', 'Nolen' )
//    ) );
//    // Add control
//    $wp_customize->add_control( new WP_Customize_Control(
//        $wp_customize,
//        'header_bottom_bar_email',
//            array(
//                'label'    => __( 'E-mail cím', 'Nolen' ),
//                'section'  => 'header_bottom_bar',
//                'settings' => 'email_block',
//                'type'     => 'text'
//            )
//        )
//    );

            
            
            
            
        }
        add_action( 'customize_register', 'nolen_register_theme_customizer' );
        
        //// Copyright link field
        function add_custom_link_field(){
            echo get_theme_mod( 'copyright_link_block');
        }
        add_action('genesis_site_description', 'add_custom_link_field');
        //// Copyright text field
        function add_custom_field(){
            echo get_theme_mod( 'copyright_text_block');
        }
        add_action('genesis_site_description', 'add_custom_field');

        //// Phone field
        function add_phone_field(){
            echo get_theme_mod( 'phone_block');
        }
        add_action('genesis_site_description', 'add_phone_field');

        //// Email field
        function add_email_field(){
            echo get_theme_mod( 'email_block');
        }
        add_action('genesis_site_description', 'add_email_field');
        
        /*** CUSTOMIZER ***/
        
        if (function_exists('register_sidebar')) {

            register_sidebar(array(
       
             'name' => 'sidebar',
       
             'id'   => 'sidebar',
       
             'description'   => 'Place Your Widgets Here',
       
             'before_widget' => '<div class="widget">',
       
             'after_widget'  => '</div>',
       
             'before_title'  => '<h3 class="text-uppercase fw-bold mb-4">',
       
             'after_title'   => '</h3>'
       
            ));
       
           }
  /*** FOOTER SIDEBARS ***/   

        if (function_exists('register_sidebar')) {

            register_sidebar(array(
       
             'name' => 'Footer 1',
       
             'id'   => 'footer-widgets-1',
       
             'description'   => 'Place Your Widgets Here',
       
             'before_widget' => '<div id="one">',
       
             'after_widget'  => '</div>',
       
             'before_title'  => '<h6 class="text-uppercase fw-bold mb-4">',
       
             'after_title'   => '</h6>'
       
            ));
       
           }

           if (function_exists('register_sidebar')) {

            register_sidebar(array(
       
             'name' => 'Footer 2',
       
             'id'   => 'footer-widgets-2',
       
             'description'   => 'Place Your Widgets Here',
       
             'before_widget' => '<div id="one">',
       
             'after_widget'  => '</div>',
       
             'before_title'  => '<h6 class="text-uppercase fw-bold mb-4">',
       
             'after_title'   => '</h6>'
       
            ));
       
           }

           if (function_exists('register_sidebar')) {

            register_sidebar(array(
       
             'name' => 'Footer 3',
       
             'id'   => 'footer-widgets-3',
       
             'description'   => 'Place Your Widgets Here',
       
             'before_widget' => '<div id="one">',
       
             'after_widget'  => '</div>',
       
             'before_title'  => '<h6 class="text-uppercase fw-bold mb-4">',
       
             'after_title'   => '</h6>'
       
            ));
       
           }

           if (function_exists('register_sidebar')) {

            register_sidebar(array(
       
             'name' => 'Footer 4',
       
             'id'   => 'footer-widgets-4',
       
             'description'   => 'Place Your Widgets Here',
       
             'before_widget' => '<div id="one">',
       
             'after_widget'  => '</div>',
       
             'before_title'  => '<h6 class="text-uppercase fw-bold mb-4">',
       
             'after_title'   => '</h6>'
       
            ));
       
           }
        
    function customtheme_add_woocommerce_support(){
        add_theme_support( 'woocommerce' );
    }
    add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

    // ----------------------------------
// 2. LIMIT SEARCH TO POSTS OR PRODUCTS ONLY
  
function SearchFilter($query) {
if ( !is_admin() && $query->is_search ) {
$query->set('post_type', 'post'); // OR USE 'PRODUCT'
}
return $query;
}
  
add_filter( 'pre_get_posts', 'SearchFilter' );
  
  
// ----------------------------------
// 3. CHANGE PLACEHOLDER & BUTTON TEXT
  
function bbloomer_storefront_search_form_modify( $html ) {
    return str_replace( array('Search &hellip;','Search'), array('WooCommerce Hooks, Storefront Theme, Google AdWords...','Search Article'), $html );
}
  
add_filter( 'get_search_form', 'bbloomer_storefront_search_form_modify' );
  
  
// ------------------------------
// 4. ADD SEARCH ICON TO NAVIGATION MENU
  
function bbloomer_new_nav_menu_items($items) {
    $searchicon = '<li class="search"><a href="#colophon"><i class="fa fa-search" aria-hidden="true"></i></a></li>';
    $items = $items . $searchicon;
    return $items;
}
  
add_filter( 'wp_nav_menu_additional-resources_items', 'bbloomer_new_nav_menu_items' );

add_theme_support( 'menus' );

function register_primary_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_primary_menu' );

function register_mobile_menu() {
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}
add_action( 'init', 'register_mobile_menu' );

function register_top_menu() {
  register_nav_menu('top-menu',__( 'Top Menu' ));
}
add_action( 'init', 'register_top_menu' );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_filter( 'wc_add_to_cart_message_html', '__return_false' );

function myprefix_translate_woo_pages( $page_id ) {
	if ( function_exists( 'pll_get_post' ) ) {
		$page_id = pll_get_post( $page_id );
	}
	return $page_id;
}
add_filter( 'woocommerce_get_shop_page_id', 'myprefix_translate_woo_pages' );
add_filter( 'woocommerce_get_cart_page_id', 'myprefix_translate_woo_pages' );
add_filter( 'woocommerce_get_checkout_page_id', 'myprefix_translate_woo_pages' );

?>

