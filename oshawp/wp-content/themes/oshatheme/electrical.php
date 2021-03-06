<?php
/*
    Template Name: Electrical
 */

//Advanced Custom Fields

$video          = get_field('video');
$information    = get_field('information');

get_header(); ?>

<div class="main">

    <!-- BODY
    ========================================================================================================-->
    <div class="title">
            <h1>Electrical</h1>
        </div>
    <div class="section-container">

      <div class="section-info-wrapper">
        <div class="info-content">
          <div class="video-wrapper">
            <?php echo $video; ?>
          </div>
          <div class="info-wrapper">
            <?php echo $information; ?>
          </div>
        </div>
      </div>
      <div class="section-discussion-wrapper">
          <div class="discussion-content">
            <?php 
            
              echo do_shortcode('[bbp-single-forum id=97]')

            ?>
          </div>
      </div>
    </div>

    <!--main-->
  </div>

