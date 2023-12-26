<?php
/**
 * Template Name: Commitment Page
 */


get_header();

?>

    <section class="mission-vision">

        <div id="mission" class="mission-vision__single ">
            <div class="container">
                <div class="row mission-vision__content-wrapper-odd">
                    <div class="col-md-6 col-sm-6 mission-vision__single__left-wrapper">
                        <div class="mission-vision__single__left modify-bg">
                            <img class="modify-img" src="<?= get_post_meta(get_the_ID(), 'our_commitment_img', true); ?>" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 mission-vision__single__right">
                        <h2 class="title"><?= get_post_meta(get_the_ID(), 'our_commitment_title', true); ?></h2>
                        <p><?= get_post_meta(get_the_ID(), 'our_commitment_desc', true); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php

get_footer();