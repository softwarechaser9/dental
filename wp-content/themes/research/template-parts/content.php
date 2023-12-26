<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bdrf
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



    <div  class="blog_image Loader mb30">
        <img  class="modify-img "

              data-image-small="<?=get_the_post_thumbnail_url()?>"
              data-image-large="<?=get_the_post_thumbnail_url()?>"
              data-image-standard="<?=get_the_post_thumbnail_url()?>"

              alt="">
    </div>


<!--    <p>--><?php //=get_the_date('d F Y')?><!--</p>-->

    <h5 class="blog-title">
        <?php
        echo get_the_title();
			 ?>
    </h5>


    <div class="clear"></div>


    <a class="dcBtn mt30" href="<?=get_the_permalink() ?>"><span>Explore</span></a>
</div><!-- #post-<?php the_ID(); ?> -->
