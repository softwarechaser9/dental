<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bdrf
 */

get_header();
?>

    <!--inner banner start-->
    <div class="innerBanner Loader">
        <img class="modify-img "

                data-image-small="<?=get_template_directory_uri()?>/assets/images/static/blog_image.jpg"
                data-image-large="<?=get_template_directory_uri()?>/assets/images/static/blog_image.jpg"
                data-image-standard="<?=get_template_directory_uri()?>/assets/images/static/blog_image.jpg"

             alt=""> <!--1366x400-->

        <div class="container">
            <div class="row">
                <h1 class="anim textOver"><span><span>Blog</span></span></h1>
            </div>
        </div>
    </div>

    <!--inner banner end-->

    <section class="blog pb100 pt100">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>



<?php
get_sidebar();
get_footer();
