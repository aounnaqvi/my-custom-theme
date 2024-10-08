<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my-custom-theme
 */

get_header();
?>
<div class="row">
	<div class="col-md-8">
		<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				echo '<h1>ACF Custom Field Data</h1>';
				$field_value = get_field('custom_text');
				echo "<p>{$field_value}</p>";

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div>	
<?php

get_footer();
