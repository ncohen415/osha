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
                <div class="discussion-content-wrapper">
                <?php
                
                    echo do_shortcode('[bbp-forum-index]')

                ?>
                </div>
            </div>
        </div>
        <!--main-->
    </div>
<?php get_footer();
