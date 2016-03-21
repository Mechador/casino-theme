<?php
/**
 * Template part for displaying single posts.
 *
 * @package casino
 */

?>


<div class="col-md-9 post-content-area block-content <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <p class="post-published-date">
    Published
    <?php the_date('d-m-Y','<span>','</span>'); ?>
    in
    <?php $categories = get_the_category();

        if($categories[0]){
        echo '<a class="post-category-link" href="'. get_category_link($categories[0]->cat_ID). '">'. $categories[0]->name . '</a>'; 
        }
    ?>
    </p>


        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casino' ),
				'after'  => '</div>',
			) );
		?>


</div><!-- /.post-content-area -->

