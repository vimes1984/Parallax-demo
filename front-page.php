<?php

remove_action('genesis_loop', 'genesis_do_loop');
remove_action('genesis_after_header', 'genesis_do_nav' );
add_action( 'genesis_header_right', 'genesis_do_nav' );

add_filter( 'genesis_markup_site-inner', '__return_null' );
add_filter( 'genesis_markup_content-sidebar-wrap_output', '__return_false' );
add_filter( 'genesis_markup_content', '__return_null' );

add_action('genesis_after_header', 'gs_custom_theme_home_content_sections');


function gs_custom_theme_home_content_sections() {
    $background_image_url = get_theme_mod( 'gs_custom_theme_setting_background_image_1');
echo '<div class="parallax-window" data-speed="0.1" data-parallax="scroll" data-image-src="'.$background_image_url.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-1' ) )
{
			 dynamic_sidebar( 'home-1' );
}

 echo  '</div></div>';

     $background_color_one = get_theme_mod( 'gs_custom_theme_setting_color_background_1');
echo '<div class="parallax-window" style="background-color:'.$background_color_one.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-2' ) )
{
			 dynamic_sidebar( 'home-2' );
}

 echo  '</div></div>';

     $background_image_url2 = get_theme_mod( 'gs_custom_theme_setting_background_image_2');
echo '<div class="parallax-window" data-speed="0.5" data-parallax="scroll" data-image-src="'.$background_image_url2.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-3' ) )
{
			 dynamic_sidebar( 'home-3' );
}

 echo  '</div></div>';

      $background_color_two = get_theme_mod( 'gs_custom_theme_setting_color_background_2');
echo '<div class="parallax-window" style="background-color:'.$background_color_two.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-4' ) )
{
			 dynamic_sidebar( 'home-4' );
}

 echo  '</div></div>';


     $background_image_url3 = get_theme_mod( 'gs_custom_theme_setting_background_image_3');
echo '<div class="parallax-window" data-speed="0.7" data-parallax="scroll" data-image-src="'.$background_image_url3.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-5' ) )
{
			 dynamic_sidebar( 'home-5' );
}

 echo  '</div></div>';

       $background_color_three = get_theme_mod( 'gs_custom_theme_setting_color_background_3');
echo '<div class="parallax-window" style="background-color:'.$background_color_three.'"><div class="site-inner">';
        if ( is_active_sidebar( 'home-6' ) )
{
			 dynamic_sidebar( 'home-6' );
}

 echo  '</div></div>';

}


genesis();
