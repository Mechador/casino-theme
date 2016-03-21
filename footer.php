<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package casino
 */

?>

<!------------------------------- Footer Area Start  ------------------------------->
	<div class="footer">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 footer-banner">
					<img src="<?php echo get_template_directory_uri(); ?>/images/footerimg.jpg" alt="betsson" class="img-responsive">
				</div>
				
				<div class="col-md-12 footer-list">
                                <?php 
                                    $args = $args = array(
                                        'theme_location'  => footer-menu,
                                        'menu_class'      => 'nav footer-nav clearfix',
                                     );
                                    
                                    wp_nav_menu($args);
                                    
                                    
                                    ?>
					<ul class="nav footer-nav clearfix">

					</ul>
				</div>
				
				<div class="col-md-10 col-md-offset-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nisl et erat euismod venenatis eget in sem phasellus ut nulla posuere, congue metus in finibus augue. Nam at feugiat ante. Phasellus ante ex, maximus ut lacinia id, aliquet in neque. Nulla facilisi. Ut sit amet diam faucibus, ultrices lorem ut, commodo risus. Nam sed tortor volutpat, gravida nunc at, consectetur leo. Aliquam sed lorem non orci condimentum pharetra.</p>
				</div>

			</div>
		</div>
	</div>
	<!-- /.footer -->
<!------------------------------- Footer Area Finish ------------------------------->

<?php wp_footer(); ?>

</body>
</html>
