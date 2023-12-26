<?php
/**
 * Template Name: Advisory Board
 */


get_header();

?>


<section class="key-person advisory pt30 pb30">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <h2><?=get_post_meta(get_the_ID(), '$advisory_title', true);  ?></h2>
</div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php
        // Assuming $home_slider is the CMB2 object
        $keys = get_post_meta(get_the_ID(), 'advisory_board_grp', true);
if (!empty($keys)) {
        foreach ($keys as $index => $key) :
            ?>
            <div class="col-md-2 key-person__slider-init__single">
                <div class="key-person__slider-init__single__img">
                    <img class="modify-img" src="<?= esc_url($key['advisory_board_grp_img']); ?>" alt="">
                </div>
                <div class="key-person__slider-init__single__content">
                    <h4><?= esc_html($key['advisory_board_grp_name']); ?></h4>
                    <h6><?= esc_html($key['advisory_board_grp_position']); ?></h6>
                </div>
                <div class="hover-content">
                    <h4><?= esc_html($key['advisory_board_grp_name']); ?></h4>
                    <h6><?= esc_html($key['advisory_board_grp_position']); ?></h6>
                    <p>
                        <?=
                        wp_kses(
                            $key['advisory_board_grp_desc'],
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
        <?php endforeach; 
		}
		else {
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    ?>
    <div class="col-md-12">
        <div class="no-advisory-image">
            <img class="" src="<?= esc_url($featured_image_url); ?>" alt="Default Image">
        </div>
    </div>
		
	<?php } ?>

    </div>
</div>
</div>
</section>


<?php

get_footer();

