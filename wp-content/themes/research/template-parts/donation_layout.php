<?php
/**
 * Template Name: Donation Page
 */


get_header();

?>


<!--Why Donate-->
    <section class="why-donate pt30 pb30">
        <div class="container">
            <div class="row why-donate__title">
                <div class="col-md-12">
                    <h2><?= get_post_meta(get_the_ID(), 'why_donate_title', true); ?></h2>
                </div>
            </div>
            <div class="row why-donate__value">
            <?php
            // Assuming $home_slider is the CMB2 object
            $reason = get_post_meta(get_the_ID(), 'why_donate_group', true);

            foreach ($reason as $index => $slide) :
                ?>
                <div class="col-md-4">
                    <div class="single-values">
                        <h5><?= esc_html($slide['why_donate_grp_title']); ?></h5>
                        <p><?= esc_html($slide['why_donate_grp_desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </section>

<!--Donation Form-->

    <section class="pt30 pb30 donation-form">
        <div class="container">
            <div class="row donation-form__title">
                <div class="col-md-12">
                    <h2><?= get_post_meta(get_the_ID(), 'donation_form_title', true); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="donation-form__img">
                        <img class="modify-img" src="<?= get_post_meta(get_the_ID(), 'donation_form_img', true); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <?= do_shortcode('[contact-form-7 id="38ed2ba" title="Donation Form"]') ?>
                </div>
            </div>
        </div>
    </section>

<!--Get Involve-->

    <section class="get-involve pt30 pb30">
        <div class="container">
            <div class="row get-involve__title">
                <div class="col-md-12">
                    <h2><?= get_post_meta(get_the_ID(), 'donation_involve_title', true); ?>"</h2>
                </div>
            </div>
            <div class="row">
                <?php
                $slides = get_post_meta(get_the_ID(), 'donation_involve_group', true);
                foreach ($slides as $index => $slide) :
                    ?>
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card__image-wrapper">
                            <img class="modify-img" src="<?= esc_url($slide['donation_involve_group_img']); ?>" alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title "><?= esc_html($slide['donation_involve_group_title']); ?></h5>
<!--                            <p class="card-text">If you want to contribute your time and expertise, consider volunteering with us.-->
<!--                                <a href="">Link to Volunteer Information</a>-->
                            <p>
                                <?= wp_kses(
                                    $slide['donation_involve_group_desc'],
                                    array(
                                        'li' => array(),
                                        'b' => array(),
                                        'a' => array(
                                            'href' => true,
                                            'title' => true,
                                        ),
                                        'br' => array(),
                                        'em' => array(),
                                        'strong' => array(),
                                    )
                                ); ?>
                            </p>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

<!--                <div class="col-md-6">-->
<!--                    <div class="card ">-->
<!--                        <div class="card__image-wrapper">-->
<!--                            <img class="modify-img" src="--><?php //= get_template_directory_uri() . "/assets/images/dynamic/slider.jpg"; ?><!--" alt="">-->
<!--                        </div>-->
<!--                        <div class="card-body">-->
<!--                            <h5 class="card-title ">Spread the Word</h5>-->
<!--                            <p class="card-text">Help us reach a wider audience by sharing our mission on social media and with your network.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

    </section>



<?php

get_footer();
