<?php
/**
 * Enqueue scripts and styles.
 */
function bdrf_scripts() {
    wp_enqueue_style( 'bdrf-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-font', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-light', get_template_directory_uri() . '/assets/css/lightgallery.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-nice', get_template_directory_uri() . '/assets/css/nice-select.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-homecss', get_template_directory_uri() . '/assets/css/home.css', array(), _S_VERSION );
    wp_enqueue_style( 'bdrf-innercss', get_template_directory_uri() . '/assets/css/inner.css', array(), _S_VERSION );






    wp_enqueue_script( 'bdrf-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), _S_VERSION, false );
    wp_enqueue_script( 'bdrf-Slick', get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bdrf-innerBundle', get_template_directory_uri() . '/assets/js/inner-bundle.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bdrf-thumbnail', get_template_directory_uri() . '/assets/js/lg-thumbnail.js', array(), _S_VERSION, true );
//    wp_enqueue_script( 'bdrf-tweenmax', get_template_directory_uri() . '/assets/js/tweenmax.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bdrf-gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bdrf-ScrollTrigger', get_template_directory_uri() . '/assets/js/ScrollTrigger.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bdrf-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


    if (is_front_page()) {
        wp_enqueue_script( 'bdrf-home-js', get_template_directory_uri() . '/assets/js/home.js',array(), _S_VERSION, true );

    }

    else {
        wp_enqueue_script( 'bdrf-inner-js', get_template_directory_uri() . '/assets/js/inner.js', array(), _S_VERSION, true );
    }
}
add_action( 'wp_enqueue_scripts', 'bdrf_scripts' );


