<?php
/**
 * Template Name: Who We Are
 */


get_header();

?>

    <section class="about-about pt30 pb30">
        <div class="container">
            <div class="row home-about__title">
                <div class="col-md-12">
                    <h2><?= get_post_meta(get_the_ID(), 'who_we_are_about_title', true); ?></h2>
                </div>
            </div>
            <div class="row home-about__desc">
                <div class="col-md-12">
                    <div class="description">
                        <h5><?= get_post_meta(get_the_ID(), 'who_we_are_about_subtitle', true); ?></h5>
                        <p><?= get_post_meta(get_the_ID(), 'who_we_are_about_desc', true); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();
