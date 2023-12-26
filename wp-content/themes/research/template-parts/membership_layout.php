<?php
/**
 * Template Name: Membership Page
 */


get_header();

?>


    <section class=" pb30 membership">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills">
                        <li ><a data-toggle="tab" href="#list">Member's List</a></li>
                        <li><a data-toggle="tab" href="#benefit">Membership Benefits</a></li>
                        <li><a data-toggle="tab" href="#apply">Apply Membership</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div id="list" class="tab-pane fade active in">
                            <div class="title">
                                <h2><?= get_post_meta(get_the_ID(), 'membership_list_title', true); ?></h2>
                            </div>
                            <div class="team-list">
                                <?php
                                $args = array(
                                    'post_type' => 'member',
                                    'posts_per_page' =>7,
                                    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
									'order'          => 'ASC',
                                );

                                $member = new WP_Query($args);

                                if ($member->have_posts()) :
                                    while ($member->have_posts()) : $member->the_post();
                                        ?>
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="member-single">
                                            <div class="member-single__img">
                                                <img class="" src="<?= esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>" alt=""> <!-- 1366x450-->
                                            </div>
                                            <div class="member-single__text">
                                                <h4><?= esc_html(get_the_title()); ?></h4>
                                                <h5>Membership Id: <?= get_post_meta(get_the_ID(), 'member_detail_id', true); ?></h5>
                                                <h5><?= get_post_meta(get_the_ID(), 'member_detail_position', true); ?></h5>
                                                <p><?= get_post_meta(get_the_ID(), 'member_detail_desc', true); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                    endwhile;
                                    if ($member->max_num_pages > 1) {
                                        echo '<div class="pagination">';
                                        echo paginate_links(array(
                                            'total'     => $member->max_num_pages,
                                            'current'   => max(1, get_query_var('paged')),
                                            'prev_text' => '&laquo; Previous',
                                            'next_text' => 'Next &raquo;',
                                        ));
                                        echo '</div>';
                                    }
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

<!--Membership Benefit-->
                        <div id="benefit" class="tab-pane fade">
                            <div class="title">
                                <h2><?= get_post_meta(get_the_ID(), 'membership_benefit_title', true); ?></h2>

                            </div>
                            <div class="row">
                            <?php
                            $benefits = get_post_meta(get_the_ID(), 'membership_benefit_group', true);
                            foreach ($benefits as $index => $benefit) :
                                ?>
                                <div class="col-md-4">
                                    <div class="single-values">
                                        <h5><?= $benefit['membership_benefit_group_title']; ?></h5>
                                        <p><?= $benefit['membership_benefit_group_desc']; ?></p>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            ?>
                            </div>
                        </div>

<!--Apply Membership-->
                        <div id="apply" class="tab-pane fade">
                            <div class="title">
                                <h2><?= get_post_meta(get_the_ID(), 'membership_apply_title', true); ?></h2>
                                <p>
                                    <?= get_post_meta(get_the_ID(), 'membership_apply_desc', true); ?>
                                </p>
                            </div>
                            <div class="membership-application">
                                <?= do_shortcode('[contact-form-7 id="714a139" title="Membership Form"]') ?>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>



<?php

get_footer();
