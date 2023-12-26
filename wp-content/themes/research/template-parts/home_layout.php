<?php
/**
 * Template Name: Home
 */


get_header();

?>

<section class="home-slider">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 slider-content">
                <div class="slider-content-init ">
                        <?php
                        // Assuming $home_slider is the CMB2 object
                        $slides = get_post_meta(get_the_ID(), 'home_slider_group', true);

                        foreach ($slides as $index => $slide) :
                            ?>
                            <div class="slider-content-init__single">
                                <h2><?= esc_html($slide['home_slider_title']); ?></h2>
								<p>
									<?=
                        wp_kses(
                            $slide['home_slider_desc'],
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
                        );
                        ?>
								</p>
								
                                <?php
                                if(!empty($slide['home_slider_link'])){
                                    ?>
                                    <div class="more-btn">
                                        <a class='' href="<?= esc_url($slide['home_slider_link']); ?>">Learn More</a>
                                    </div>
                                    <?php
                                }
                                ?>
                                </div>
                        <?php endforeach; ?>
                </div>
                <div class="slider-nav">
                    <div class="left-btn nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="right-btn nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-8 img-slider">
                <div class="slider-img-init">
                    <?php foreach ($slides as $index => $slide) : ?>
                        <div class="slider-img-init__single">
                            <img src="<?= esc_url($slide['home_slider_img']); ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-nav">
                    <div class="left-btn nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="right-btn nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





    <!-- Home About-->


    <section class="home-about pb30">
        <div class="container">
            <div class="row home-about__title">
                <div class="col-md-12">
                    <h2><?= get_post_meta(get_the_ID(), 'home_about_title', true); ?></h2>
                </div>
            </div>
            <div class="row home-about__desc">
                <div class="col-md-12">
                    <div class="description">
                        <h5><?= get_post_meta(get_the_ID(), 'home_about_subtitle', true); ?></h5>
                        <p><?= get_post_meta(get_the_ID(), 'home_about_desc', true); ?></p>
                    </div>
                </div>
            </div>
            <div class="row home-about__desc">
                <div class="col-md-12">
                    <div class="description">
                        <h5><?= get_post_meta(get_the_ID(), 'home_mission_title', true); ?></h5>
                        <p><?= get_post_meta(get_the_ID(), 'home_mission_desc', true); ?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="description">
                        <h5><?= get_post_meta(get_the_ID(), 'home_vision_title', true); ?></h5>
                        <p><?= get_post_meta(get_the_ID(), 'home_vision_desc', true); ?></p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="description">
                        <h5><?= get_post_meta(get_the_ID(), 'home_value_title', true); ?></h5>
                        <p><?= get_post_meta(get_the_ID(), 'home_value_desc', true); ?></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

<!--Key Person-->

    <section class=" pb30 for-desktop key-person">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <h2><?=get_post_meta(get_the_ID(), 'home_key_person_title', true);  ?></h2>
                </div>
            </div>

            <div class="row key-person__slider">

                <div class="col-md-2 left-btn">
                        <div class="key-left nav-btn">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                </div>
                <div class="col-md-8">
                    <div class="key-person__slider-init">

                        <?php
                        // Assuming $home_slider is the CMB2 object
                        $keys = get_post_meta(get_the_ID(), 'home_key_person_grp', true);

                        foreach ($keys as $index => $key) :
                            ?>
                            <div class="col-md-4">
                                <div class="key-person__slider-init__single">
                                    <div class="key-person__slider-init__single__img">
                                        <img class="modify-img" src="<?= esc_url($key['home_key_person_grp_img']); ?>" alt="">
                                    </div>
                                    <div class="key-person__slider-init__single__content">
                                        <h4><?= esc_html($key['home_key_person_grp_name']); ?></h4>
                                        <h6><?= esc_html($key['home_key_person_grp_position']); ?></h6>
                                    </div>
                                    <div class="hover-content">
                                        <h4><?= esc_html($key['home_key_person_grp_name']); ?></h4>
                                        <h6><?= esc_html($key['home_key_person_grp_position']); ?></h6>
                                        <p>
                                            <?=
                                            wp_kses(
                                                $key['home_key_person_grp_inst'],
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
                                            );
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="col-md-2">
                    <div class="key-right nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="key-person for-mobile pb30">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <h2><?=get_post_meta(get_the_ID(), 'home_key_person_title', true);  ?></h2>
                </div>
                <div class="col-md-12 mobile-nav">
                    <div class="key-left-mobile nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="key-right-mobile nav-btn">
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 7L1 7" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M9.27148 13L14.9998 7L9.27148 1" stroke="#1f4396" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mobile-key-person">
                <?php
                // Assuming $home_slider is the CMB2 object
                $keys = get_post_meta(get_the_ID(), 'home_key_person_grp', true);

                foreach ($keys as $index => $key) :
                    ?>
                    <div class="key-person__slider-init__single">
                        <div class="key-person__slider-init__single__img">
                            <img class="modify-img" src="<?= esc_url($key['home_key_person_grp_img']); ?>" alt="">
                        </div>
                        <div class="key-person__slider-init__single__content">
                            <h4><?= esc_html($key['home_key_person_grp_name']); ?></h4>
                            <h6><?= esc_html($key['home_key_person_grp_position']); ?></h6>
                        </div>
                        <div class="hover-content">
                            <h4><?= esc_html($key['home_key_person_grp_name']); ?></h4>
                            <h6><?= esc_html($key['home_key_person_grp_position']); ?></h6>
                            <p>
                                <?=
                                wp_kses(
                                    $key['home_key_person_grp_inst'],
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
                                );
                                ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>

<!--Newsletter-->
    <section class="pt30 newsletter-form">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title">
                        <svg width="68" height="64" viewBox="0 0 68 64" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M39.2305 35.9375L32.692 42.5V35.9375H28.7689C27.0348 35.9375 25.3718 35.2461 24.1456 34.0154C22.9194 32.7847 22.2305 31.1155 22.2305 29.375V8.375C22.2305 6.63452 22.9194 4.96531 24.1456 3.73461C25.3718 2.5039 27.0348 1.8125 28.7689 1.8125H60.1535C61.8877 1.8125 63.5507 2.5039 64.7769 3.73461C66.0031 4.96531 66.692 6.63452 66.692 8.375V29.375C66.692 31.1155 66.0031 32.7847 64.7769 34.0154C63.5507 35.2461 61.8877 35.9375 60.1535 35.9375H39.2305Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M33.9991 20.1875C34.7213 20.1875 35.3068 19.5999 35.3068 18.875C35.3068 18.1501 34.7213 17.5625 33.9991 17.5625C33.2769 17.5625 32.6914 18.1501 32.6914 18.875C32.6914 19.5999 33.2769 20.1875 33.9991 20.1875Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M44.462 20.1875C45.1842 20.1875 45.7697 19.5999 45.7697 18.875C45.7697 18.1501 45.1842 17.5625 44.462 17.5625C43.7398 17.5625 43.1543 18.1501 43.1543 18.875C43.1543 19.5999 43.7398 20.1875 44.462 20.1875Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M54.9229 20.1875C55.6451 20.1875 56.2306 19.5999 56.2306 18.875C56.2306 18.1501 55.6451 17.5625 54.9229 17.5625C54.2007 17.5625 53.6152 18.1501 53.6152 18.875C53.6152 19.5999 54.2007 20.1875 54.9229 20.1875Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M45.7701 41.1875V56.9375C45.7701 58.3299 45.219 59.6652 44.2381 60.6498C43.2571 61.6344 41.9267 62.1875 40.5394 62.1875H6.53936C5.15208 62.1875 3.82161 61.6344 2.84065 60.6498C1.85969 59.6652 1.30859 58.3299 1.30859 56.9375V32C1.30859 31.185 1.49767 30.3811 1.86084 29.6521C2.224 28.9231 2.75127 28.289 3.40091 27.8L17.0009 17.5625" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M40.5391 56.9376L26.6121 43.642C25.7863 42.8447 24.6849 42.3994 23.5391 42.3994C22.3932 42.3994 21.2918 42.8447 20.466 43.642L6.53906 56.9376" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M6.53906 33.3125L18.8968 45.125" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        <h4><?= get_post_meta(get_the_ID(), 'home_newsletter_title', true); ?></h4>
                    </div>
                </div>
                <div class="col-md-8">
<!--                    --><?php //= do_shortcode('[contact-form-7 id="99e72f5" title="Contact form 1"]') ?>
                    <div class="tnp tnp-subscription ">
                        <form method="post" action="https://bdrf.com.bd/?na=s">

                            <div class="row">
                                <div class="col-md-3">
                                    <input type="hidden" name="nlang" value="">
                                    <div class="tnp-field tnp-field-firstname">
                                        <input class="tnp-name" type="text" name="nn" id="tnp-1" value="" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tnp-field tnp-field-surname">
                                        <input class="tnp-surname" type="text" name="ns" id="tnp-2" value="" placeholder="Position/Current Job" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tnp-field tnp-field-email">
                                        <input class="tnp-email" type="email" name="ne" id="tnp-3" value="" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="tnp-field tnp-field-button">
                                        <input class="tnp-submit" type="submit" value="Subscribe" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

get_footer();


