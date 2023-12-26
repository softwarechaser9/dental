<?php
/**
 * Template Name: Ongoing Journal Page
 */


get_header();

?>

    <section class="journal-list pt30 pb30">
        <div class="container">

            <div class="row all-journal">
                <?php
                // Define the custom query parameters

                $args = array(
                    'post_type' => 'ongoing-research',
                    'posts_per_page' => -1,
                );

                $journal = new WP_Query($args);

                // Instantiate a new WP_Query object

                // Check if there are posts
                if ($journal->have_posts()) :
                    while ($journal->have_posts()) : $journal->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class='presslist__single'>
                                <div class='presslist__single__img'>
                                    <img src="<?=get_post_meta(get_the_ID(), 'ongoing_journal_details_image', true); ?>" alt="">
                                    <div class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="10.004" viewBox="0 0 15 10.004">
                                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M17.441,11.443a.681.681,0,0,0-.005.959L20.6,15.575H8.547a.677.677,0,0,0,0,1.355H20.6L17.43,20.1a.686.686,0,0,0,.005.959.675.675,0,0,0,.953-.005l4.293-4.324h0a.761.761,0,0,0,.141-.214.646.646,0,0,0,.052-.261.679.679,0,0,0-.193-.474l-4.293-4.324A.664.664,0,0,0,17.441,11.443Z" transform="translate(-7.875 -11.252)" fill="#8a1313"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class='presslist__single__content'>
                                    <div class='presslist__single__content__text'>
                                        <h3><?= get_post_meta(get_the_ID(), 'ongoing_journal_details_title', true); ?></h3>
                                        <p><?= get_post_meta(get_the_ID(), 'ongoing_issn_number', true); ?></p>
                                        <p><?= get_post_meta(get_the_ID(), 'ongoing_indexed_in', true); ?></p>
                                    </div>
                                    <div class="view-btn">
                                        <a href="<?= get_post_meta(get_the_ID(), 'ongoing_journal_file', true); ?>"><span>View Details</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>
                    <?php
                    wp_reset_postdata(); // Restore original post data
                else :
                    ?>
                    <p>No posts found</p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </section>


<?php

get_footer();