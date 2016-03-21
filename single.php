<?php
/**
 * The template for displaying all single posts.
 *
 * @package casino
 */

get_header(); ?>

<div class="section-post">
    <div class="container">
        <div class="row">


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
        <?php get_sidebar(); ?>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>
