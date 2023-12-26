<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
                <h1 class="anim textOver">Blog</h1>
            </div>
        </div>
    </div>

    <!--inner banner end-->


    <section class="blog pb100 pt100">
        <div class="container">
            <div class="row">
              <div class="bloginit anim-parent">
                  <?php
                  if ( have_posts() ) :

                      if ( is_home() && ! is_front_page() ) :
                          ?>
                          <h1 class="Title"><?php single_post_title(); ?></h1>
                      <?php
                      endif;

                      /* Start the Loop */
                      while ( have_posts() ) :
                          the_post();

                          /*
                           * Include the Post-Type-specific template for the content.
                           * If you want to override this in a child theme, then include a file
                           * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                           */
                       ?>

                      <div class="col-md-4   blog_single_item">
                          <?php
                          get_template_part( 'template-parts/content', get_post_type() );

                          ?>
                      </div>
                      <?php


                      endwhile;



                  else :

                      get_template_part( 'template-parts/content', 'none' );

                  endif;
                  ?>
                  <div class="clear"></div>

                  <div class="col-md-12 text-center mt30">
                      <?php
                      echo paginate_links();
                      ?>
                  </div>
              </div>

            </div>
        </div>
    </section>



<?php

get_footer();
