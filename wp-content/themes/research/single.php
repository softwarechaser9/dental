<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bdrf
 */

get_header();
echo get_the_post_thumbnail_url('full')
?>

    <!--inner banner start-->
    <div class="innerBanner Loader">
        <img class="modify-img "

             data-image-small="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>"
             data-image-large="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>"
             data-image-standard="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>"

             alt=""> <!--1366x400-->

        <div class="container">
            <div class="row">
                <h1 class="anim textOver"><?= get_the_date('d F Y') ?></span></h1>
            </div>
        </div>
    </div>

    <!--inner banner end-->
    <section id="primary" class="blog pt100 pb100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <h1 class="Title mb30"><?= get_the_title() ?></h1>
                        <div class="content">
                            <?php
                            the_content();

                            ?>
                        </div>

                        <div class="socialshare">
                            <ul>
                                <li><a target="_blank" href="#"
                                       style="background-image: url('<?=  get_template_directory_uri(). '/assets/images/static/social.png'; ?>')"></a>
                                </li>
                                <li><a target="_blank" href="#"
                                       style="background-image: url('<?=  get_template_directory_uri() . '/assets/images/static/social.png'; ?>')"></a>
                                </li>
                                <li><a target="_blank" href="#"
                                       style="background-image: url('<?=  get_template_directory_uri() . '/assets/images/static/social.png'; ?>')"></a>
                                </li>
                                <li><a target="_blank" href="#"
                                       style="background-image: url('<?= get_template_directory_uri() . '/assets/images/static/social.png'; ?>')"></a>
                                </li>
                                <li><a target="_blank" href="#"
                                       style="background-image: url('<?=  get_template_directory_uri() . '/assets/images/static/social.png'; ?>')"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <?php
                        the_post_navigation(
                            array(
                                'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'bdrf') . '</span> <span class="nav-title">%title</span>',
                                'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'bdrf') . '</span> <span class="nav-title">%title</span>',
                            )
                        );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>


                </div>
                <div class="col-md-3">
                    <?php
                    get_template_part( 'sidebar', 'none' );
                    ?>
                </div>
            </div>
        </div>

    </section><!-- #main -->

<?php

get_footer();
