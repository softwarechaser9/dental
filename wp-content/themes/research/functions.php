<?php
/**
 * bdrf functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bdrf
 */


//update theme requirements
//custom here
@ini_set('upload_max_filesize', '128M');
@ini_set('post_max_size', '128M');
@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '300');
@ini_set('max_input_time', '300');
@ini_set('max_input_vars', 5000);





// Theme Version
require_once get_template_directory() . '/inc/version.php';


// Theme Features
require_once get_template_directory() . '/inc/themefeatures/all-features.php';


// Theme Siderbar , Widgets
require_once get_template_directory() . '/inc/themefeatures/widgets-list.php';


// Theme Scripts and Jquery
require_once get_template_directory() . '/inc/themefeatures/theme-scripts.php';


//show required plugin install message
require_once get_template_directory() . '/inc/requires-plugin/example.php';


//show required plugin install message
require_once get_template_directory() . '/inc/themefeatures/others-features.php';


//codestar framework registrer
require_once get_theme_file_path() . '/inc/framework/codestar-framework-master/codestar-framework.php';


// themeOption from codestare framework
require_once get_template_directory() . '/inc/themefeatures/theme-option.php';


//for custom elementor widget or addons
require_once get_template_directory() . '/inc/elementorAddons/index.php';


//for custom post and custom taxonomy
require_once get_template_directory() . '/inc/themefeatures/theme-custom-post.php';

require_once get_template_directory() . '/inc/cmb2/init.php';
require_once get_template_directory() . '/inc/themefeatures/custom-meta-fields.php';

wp_enqueue_script( 'bdrf-filter', get_template_directory_uri() . '/assets/js/filter.js',['jquery'], _S_VERSION, true );

wp_localize_script('bdrf-filter','variables',[
    'ajax_url' => admin_url('admin-ajax.php'),
]);

add_action('wp_ajax_filter_posts','filter_posts');
add_action('wp_ajax_nopriv_filter_posts','filter_posts');
function filter_posts(){

    $args = [
        'post_type' => 'journal',
        'posts_per_page' => -1,
    ];
    $type = $_REQUEST['term'];
    if(!empty($type)){
        $args['tax_query'][] = [
            'taxonomy' => 'journal_type',
            'field' => 'slug',
            'terms' => $type,
        ];
    }

    $journal = new WP_Query($args);
    if($journal->have_posts()):
        while ($journal->have_posts()): $journal->the_post();
            ?>
            <div class="col-md-4">
                <div class='presslist__single'>
                    <div class='presslist__single__img'>
                        <img src="<?=get_post_meta(get_the_ID(), 'journal_details_image', true); ?>" alt="">
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.004" viewBox="0 0 15 10.004">
                                <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M17.441,11.443a.681.681,0,0,0-.005.959L20.6,15.575H8.547a.677.677,0,0,0,0,1.355H20.6L17.43,20.1a.686.686,0,0,0,.005.959.675.675,0,0,0,.953-.005l4.293-4.324h0a.761.761,0,0,0,.141-.214.646.646,0,0,0,.052-.261.679.679,0,0,0-.193-.474l-4.293-4.324A.664.664,0,0,0,17.441,11.443Z" transform="translate(-7.875 -11.252)" fill="#8a1313"/>
                            </svg>
                        </div>
                    </div>
                    <div class='presslist__single__content'>
                        <div class='presslist__single__content__text'>
                            <h3><?= get_post_meta(get_the_ID(), 'journal_details_title', true); ?></h3>
                            <p><?= get_post_meta(get_the_ID(), 'issn_number', true); ?></p>
                            <p><?= get_post_meta(get_the_ID(), 'indexed_in', true); ?></p>
                        </div>
                        <div class="view-btn">
                            <a href="<?= get_post_meta(get_the_ID(), 'journal_file', true); ?>"><span>View Details</span></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo "Post Not Found";
    endif;
    wp_die();
}









if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
}


// for not showing admin bar with admin login view
add_filter('show_admin_bar', '__return_false');


if (!function_exists('better_comments')):
    function better_comments($comment, $args, $depth)
    {
        ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div class="comment">
            <div class="Flex">
                <div class="img-thumbnail d-none d-sm-block">
                    <?php echo get_avatar($comment, $size = '80', $default = 'http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g'); ?>
                </div>
                <div class="comment-block">
                    <div class="comment-arrow"></div>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php esc_html_e('Your comment is awaiting moderation.', '5balloons_theme') ?></em>
                        <br/>
                    <?php endif; ?>
                    <span class="comment-by">
                    <strong class="authorname"><?php echo get_comment_author() ?></strong><br>
 <span class="float-right button">
                  <a href="#"> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a>
                    </span>
                                            <span class="date float-right"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s', '5balloons_theme'), get_comment_date(), get_comment_time()) ?></span>


                </span>
                    <div class="comment_text">
                        <p> <?php comment_text() ?></p>
                    </div>

                </div>
            </div>

        </div>

        <?php
    }
endif;





