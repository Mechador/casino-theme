<?php
/*
 Template Name: Front Page Template
*/
get_header();

?>

    <?php get_template_part( 'carousel' ); ?>
		
    <?php get_template_part( 'casinos' ); ?>

    <?php get_template_part( 'latestnews' ); ?>

    <?php get_template_part( 'topfocus' ); ?>


<?php get_footer(); ?>