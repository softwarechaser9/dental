<?php
if ( ! function_exists( 'bdrf_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function bdrf_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on bdrf, use a find and replace
         * to change 'bdrf' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'bdrf', get_template_directory() . '/languages' );





        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );




        /*
         * Let WordPress manage the document title.
         */
        add_theme_support( 'title-tag' );




        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );





        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'bdrf' ),
            )
        );










        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'bdrf_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'bdrf_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bdrf_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'bdrf_content_width', 640 );
}
add_action( 'after_setup_theme', 'bdrf_content_width', 0 );