<?php
//// INCLUDE

function css_js_include(){
	wp_enqueue_style( 'fa-svg-with-js', get_template_directory_uri() . '/assets/css/fa-svg-with-js.css',false,'1.1','all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css',false,'1.1','all');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js',false,'1.1','all');
}
add_action( 'wp_enqueue_scripts', 'css_js_include' );
/*** CUSTOMIZER ***/

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
    $wp_customize->add_section( 'header_bottom_bar' , array(
        'title'    => __('Header bottom bar','Nolen'),
        'priority' => 200
    ) );

    //// PHONE
    // Add setting
    $wp_customize->add_setting( 'phone_block', array(
         'default'           => __( '+36', 'Nolen' )
    ) );
    // Add control
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'header_bottom_bar_phone',
            array(
                'label'    => __( 'Telefonszám', 'Nolen' ),
                'section'  => 'header_bottom_bar',
                'settings' => 'phone_block',
                'type'     => 'text'
            )
        )
    );

    //// EMAIL

    // Add setting
    $wp_customize->add_setting( 'email_block', array(
        'default'           => __( '@', 'Nolen' )
   ) );
   // Add control
   $wp_customize->add_control( new WP_Customize_Control(
       $wp_customize,
       'header_bottom_bar_email',
           array(
               'label'    => __( 'E-mail cím', 'Nolen' ),
               'section'  => 'header_bottom_bar',
               'settings' => 'email_block',
               'type'     => 'text'
           )
       )
   );

            
            
            
            
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
        
        ?>