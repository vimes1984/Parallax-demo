<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.1.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//parallax
add_action('wp_enqueue_scripts', 'gs_custom_enqueue_parallax_script');

function gs_custom_enqueue_parallax_script() {
    wp_enqueue_script('parallax', get_stylesheet_directory_uri() . '/js/parallax.min.js', array('jquery'));
}


//* Register widget areas
genesis_register_sidebar( array(
	'id'          => 'home-1',
	'name'        => __( 'Home Section 1 (parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 1 (parallax)', 'gs-custom-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-2',
	'name'        => __( 'Home Section 2 (no-parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 2 (no parallax)', 'gs-custom-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-3',
	'name'        => __( 'Home Section 3 (parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 3 (parallax)', 'gs-custom-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-4',
	'name'        => __( 'Home Section 4 (no-parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 4 (no-parallax)', 'gs-custom-theme' ),
) );
genesis_register_sidebar( array(
	'id'          => 'home-5',
	'name'        => __( 'Home Section 5 (parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 5 (parallax)', 'gs-custom-theme' ),
) );

genesis_register_sidebar( array(
	'id'          => 'home-6',
	'name'        => __( 'Home Section 6 (no-parallax)', 'gs-custom-theme' ),
	'description' => __( 'Home Section 6 (no-parallax)', 'gs-custom-theme' ),
) );


function gs_custom_theme_home_sections ($wp_customize) {

// Add new section on customizer

    $wp_customize->add_section(
        'gs_custom_theme_front_section',
            array(
                'title' => 'Front Page Options',
                'priority' => 201
            )
    );

// Register three background image sections

    $wp_customize->add_setting(
        'gs_custom_theme_setting_background_image_1',
            array(
                'default' => '',
                'sanitize_callback' => 'gs_custom_theme_sanitize_bgi',
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'gs_custom_theme_background_image_1', array(
                'label' =>  __( 'Background Image 1st', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_background_image_1',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 15
        )
    )
    );

    $wp_customize->add_setting(
        'gs_custom_theme_setting_background_image_2',
            array(
                'default' => '',
                'sanitize_callback' => 'gs_custom_theme_sanitize_bgi',
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'gs_custom_theme_background_image_2', array(
                'label' =>  __( 'Background Image 2nd', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_background_image_2',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 17
        )
    )
    );

        $wp_customize->add_setting(
        'gs_custom_theme_setting_background_image_3',
            array(
                'default' => '',
                'sanitize_callback' => 'gs_custom_theme_sanitize_bgi',
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'gs_custom_theme_background_image_3', array(
                'label' =>  __( 'Background Image 3nd', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_background_image_3',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 19
        )
    )
    );

// Register three color background sections

    $wp_customize->add_setting(
        'gs_custom_theme_setting_color_background_1',
            array(
                'default' => '#000000',
                'sanitize_callback' => 'sanitize_hex_color'
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'gs_custom_color_bg_setting_1', array(
                'label' =>  __( 'Background Color 1st', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_color_background_1',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 16
        )
    )
    );

    $wp_customize->add_setting(
        'gs_custom_theme_setting_color_background_2',
            array(
                'default' => '#000000',
                'sanitize_callback' => 'sanitize_hex_color'
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'gs_custom_color_bg_setting_2', array(
                'label' =>  __( 'Background Color 2nd', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_color_background_2',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 18
        )
    )
    );

        $wp_customize->add_setting(
        'gs_custom_theme_setting_color_background_3',
            array(
                'default' => '#000000',
                'sanitize_callback' => 'sanitize_hex_color'
            )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize, 'gs_custom_color_bg_setting_3', array(
                'label' =>  __( 'Background Color 3rd', 'gs-custom-theme' ),
                'settings' => 'gs_custom_theme_setting_color_background_3',
                'section' => 'gs_custom_theme_front_section',
                'priority' => 20
        )
    )
    );


}

add_action('customize_register', 'gs_custom_theme_home_sections');

function gs_custom_theme_sanitize_bgi ( $image, $setting ) {

    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    $file = wp_check_filetype( $image, $mimes );
    return ( $file['ext'] ? $image : $setting->default );
}
