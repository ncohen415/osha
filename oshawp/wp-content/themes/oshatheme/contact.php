<?php
/* 
    Template Name: Contact Page
 */

get_header(); ?>

<main class="page-container grid-container"  role="main">
	<div class="grid-x grid-padding-x">
		<div class="contact-container">
			<div class="contact-wrapper">
			<div class="contact-form">
				<?php echo do_shortcode('[ninja_form id=1]') ?>
			</div>
			</div>
		</div>

	</div>
</main>
<?php get_footer();
