<?php
/*
    Template Name: Discussion Page
 */

get_header(); ?>


    <div class="main">
            <!-- BODY
        ========================================================================================================-->

        <div class="discussion-container">
            <div class="discussion-wrapper">
                <div class="image-wrapper">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/electricianupapole.jpg">
                </div>
            </div>
                <div class="forum-wrapper">
                    <?php
                    echo do_shortcode('[bbp-forum-index]')
                ?>
                </div>
        </div>
            <!--main-->
    </div>
<?php get_footer();
