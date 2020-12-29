<?php
/* 
    Template Name: Contact Page
 */

get_header(); ?>

<main class="page-container grid-container"  role="main">
	<div class="grid-x grid-padding-x">
		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'parts/pages/content' );
			endwhile;
		?>
	</div>
</main>
<?php get_footer();
