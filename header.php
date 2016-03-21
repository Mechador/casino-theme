<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package casino
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'casino' ); ?></a>

<!------------------------------- Header Area Start  ------------------------------->
<div class="header">
        <div class="navbar navbar-default">

                <div class="container">

                        <div class="navbar-header">
                                <a class="navbar-brand" href="#">
                                        <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/images/brand-logo.png">
                                </a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                        </div>

                        <div class="navbar-collapse collapse navigacija navbar-ex1-collapse">

<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'header-menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav navbar-left',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>

                        </div>
                        <!-- /.navigacija -->
                </div>
                <!-- /.container -->
        </div>

        <div class="navbar-collapse sub-navbar visible-md visible-lg">
                <div class="container">
                        <ul id="sub-nav" class="nav navbar-nav">
                                <li class="active"><a href="">Casinos</a></li>
                                <li><a href="">Reviews</a></li>
                                <li><a href="">Guides</a></li>
                                <li><a href="">Articles</a></li>
                                <li><a href="">Videos</a></li>
                                <li><a href="">News</a></li>
                        </ul>
                         <?php get_search_form(); ?>

                </div>

        </div>



</div>
<!------------------------------- Header Area Finish ------------------------------->


