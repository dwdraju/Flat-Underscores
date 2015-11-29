<?php
/**
 * The template for displaying Services page.
 *
 * This is the template that displays services page.
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flat_Underscores
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'services' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
