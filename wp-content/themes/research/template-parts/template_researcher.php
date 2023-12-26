<?php
/**
 * Template Name: Researcher Page
 */


get_header();

?>
    <section class="key-person advisory pt30 pb30">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <h2><?=get_post_meta(get_the_ID(), 'researcher_list_title', true);  ?></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <?php
                    // Assuming $home_slider is the CMB2 object
                    $keys = get_post_meta(get_the_ID(), 'research_list_grp', true);

                    foreach ($keys as $index => $key) :
                        ?>
                        <div class="col-md-2 key-person__slider-init__single">
                            <div class="key-person__slider-init__single__img">
                                <img class="modify-img" src="<?= esc_url($key['researcher_grp_img']); ?>" alt="">
                            </div>
                            <div class="key-person__slider-init__single__content">
                                <h4><?= esc_html($key['researcher_grp_name']); ?></h4>
                                <h6><?= esc_html($key['researcher_grp_position']); ?></h6>
                            </div>
                            <div class="hover-content">
                                <h4><?= esc_html($key['researcher_grp_name']); ?></h4>
                                <h6><?= esc_html($key['researcher_grp_position']); ?></h6>
                                <p>
                                    <?=
                                    wp_kses(
                                        $key['researcher_grp_desc'],
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


<?php

get_footer();
