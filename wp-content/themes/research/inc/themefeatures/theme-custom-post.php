<?php


//custom post
function theme_custom_post()
{

    register_post_type(
        'journal',


        $args = array(
            'labels' => array(
                'name' => __('Journals'),
                'singular_name' => __('journal'),
                'add_new' => 'Add New Journal',
                'edit_item' => 'Edit Journal',
                'search_items' => 'Search Item',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',

        )


    );


    register_post_type(
        'member',


        $args = array(
            'labels' => array(
                'name' => __('Members'),
                'singular_name' => __('member'),
                'add_new' => 'Add New Member',
                'edit_item' => 'Edit Member',
                'search_items' => 'Search Member',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )


    );

    register_post_type(
        'ongoing-research',


        $args = array(
            'labels' => array(
                'name' => __('Ongoing Research Project'),
                'singular_name' => __('ongoing'),
                'add_new' => 'Add New Ongoing Research Project',
                'edit_item' => 'Edit Ongoing Research Project',
                'search_items' => 'Search Ongoing Research Project',
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', 'post-formats', 'excerpt'),
            'menu_icon' => 'dashicons-ellipsis',
            'show_tagcloud' => false,
            'taxonomy' => false,
            'query_var' => true,
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => null,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => false,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        )


    );


}

add_action('init', 'theme_custom_post');





//custom taxonomy
function theme_category_taxonomy()
{
    $labels = array(
        'name' => _x('Journal Type', 'taxonomy general name', 'textdomain'),
        'singular_name' => _x('Journal Type', 'taxonomy singular name', 'textdomain'),
        'search_items' => __('Search Journal Type', 'textdomain'),
        'all_items' => __('All Journal Type', 'textdomain'),
        'parent_item' => __('Parent Journal Type', 'textdomain'),
        'parent_item_colon' => __('Parent Journal Type:', 'textdomain'),
        'edit_item' => __('Edit Journal Type', 'textdomain'),
        'update_item' => __('Update Journal Type', 'textdomain'),
        'add_new_item' => __('Add New Journal Type', 'textdomain'),
        'new_item_name' => __('New Journal Type', 'textdomain'),
        'menu_name' => __('Journal Type', 'textdomain'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'journal-type'),
    );

    register_taxonomy('journal_type', array('journal'), $args);

   // register_taxonomy('homeslidercateogry', array('homeSlider'), $args);
}




// hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'theme_category_taxonomy', 2);


