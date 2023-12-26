<?php
/**
 * Template Name: Apply for Research Fund
 */


get_header();

?>


<!--    Research Fund Form-->

    <section class="pt30 pb30 research-fund">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>
                            Fill up the form to apply for research fund
                        </h2>
                    </div>
                    <div class="fund-form">
                        <?= do_shortcode('[contact-form-7 id="ee6ffab" title="Research Fund Apply Form"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php

get_footer();

