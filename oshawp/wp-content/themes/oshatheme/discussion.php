<?php
/*
    Template Name: Forums Index Page
 */

get_header(); ?>
        <div class="discussion-container">
            <div class="discussion-wrapper">
                <div class="image-wrapper">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/electricianupapole.jpg">
                </div>
            </div>
            <div class="login">
                <p>
                    To participate in the discussions below please register
                </p>
                <?php echo do_shortcode('[bbp-login]');?>

            </div>
                <div class="forum-wrapper">

                </div>
        </div>

<?php get_footer();
