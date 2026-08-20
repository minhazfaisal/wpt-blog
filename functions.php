<?php

/*
* enqueue scripts and styles
*/
function wpt1_scripts() {
    
    // styles
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), '', 'all' );
    wp_enqueue_style( 'linericon_css', get_template_directory_uri() . '/vendors/linericon/style.css', array(), '', 'all' );
    wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '', 'all' );
    wp_enqueue_style( 'themifyicons_css', get_template_directory_uri() . '/css/themify-icons.css', array(), '', 'all' );
    wp_enqueue_style( 'flaticon_css', get_template_directory_uri() . '/css/flaticon.css', array(), '', 'all' );
    wp_enqueue_style( 'owl_css', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.css', array(), '', 'all' );
    wp_enqueue_style( 'lightbox_css', get_template_directory_uri() . '/vendors/lightbox/simpleLightbox.css', array(), '', 'all' );
    wp_enqueue_style( 'nice_css', get_template_directory_uri() . '/vendors/nice-select/css/nice-select.css', array(), '', 'all' );
    wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/vendors/animate-css/animate.css', array(), '', 'all' );
    wp_enqueue_style( 'jqueryui_css', get_template_directory_uri() . '/vendors/jquery-ui/jquery-ui.css', array(), '', 'all' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css', array(), '', 'all' );
    wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css', array(), '', 'all' );
    wp_enqueue_style( 'theme_css', get_template_directory_uri() );
    
    // scripts
	wp_enqueue_script( 'jquery_script', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '', true );
	wp_enqueue_script( 'popper_script', get_template_directory_uri() . '/js/popper.js', array(), '', true );
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'stellar_script', get_template_directory_uri() . '/js/stellar.js', array(), '', true );
    wp_enqueue_script( 'lightbox_script', get_template_directory_uri() . '/vendors/lightbox/simpleLightbox.min.js', array(), '', true );
    wp_enqueue_script( 'nice_select_script', get_template_directory_uri() . '/vendors/nice-select/js/jquery.nice-select.min.js', array(), '', true );
    wp_enqueue_script( 'imagesloaded_script', get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js', array(), '', true );
    wp_enqueue_script( 'isotope_script', get_template_directory_uri() . '/vendors/isotope/isotope-min.js', array(), '', true );
    wp_enqueue_script( 'owl_carousel_script', get_template_directory_uri() . '/vendors/owl-carousel/owl.carousel.min.js', array(), '', true );
    wp_enqueue_script( 'jquery_ui_script', get_template_directory_uri() . '/vendors/jquery-ui/jquery-ui.js', array(), '', true );
    wp_enqueue_script( 'ajaxchimp_script', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', array(), '', true );
    wp_enqueue_script( 'mail_script', get_template_directory_uri() . '/js/mail-script.js', array(), '', true );
    wp_enqueue_script( 'waypoints_script', get_template_directory_uri() . '/vendors/counter-up/jquery.waypoints.min.js', array(), '', true );
    wp_enqueue_script( 'counterup_script', get_template_directory_uri() . '/vendors/counter-up/jquery.counterup.js', array(), '', true );
    wp_enqueue_script( 'theme_script', get_template_directory_uri() . '/js/theme.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpt1_scripts' );

?>
