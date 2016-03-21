<?php
/*
Template Name: Casinos Page
*/
get_header();
?>

  <?php get_template_part( 'casino-page-slider-zone' ); ?>

<!------------------------------- Casinos Grid Main Content Start ------------------------------->
<div class="container">
	<div class="row">
            
            <div class="col-md-3 sidebar-left">

                <form class="search-form col-md-12 col-sm-12">
                        <i class="fa fa-search"></i>
                        <input type="search" placeholder="Search poker casinos">
                </form>

                <ul class="sidebar-grid-list list-unstyled col-md-12 col-sm-4">
                        <li class="active"><a href="/" >Online Casinos</a></li>
                        <li><a href="/" >Newset Casinos</a></li>
                        <li><a href="/" >Certified Casinos</a></li>
                        <li><a href="/" >Mobile Casinos</a></li>
                        <li><a href="/" >Blackliste Casinos</a></li>
                </ul>

                <ul class="sidebar-list list-unstyled col-md-12 col-sm-4 ">
                        <li class="list-title">Reviews</li>
                        <li><a href="/" class="block-content">Submit Review</a>
                        </li>
                        <li><a href="/" class="block-content">Recent Reviews</a>
                        </li>
                </ul>


                <ul class="sidebar-list list-unstyled col-md-12 col-sm-4 ">
                        <li class="list-title">Bonuses</li>
                        <li><a href="/" class="block-content">Welcome Bonuses</a>
                        </li>
                        <li><a href="/" class="block-content">No Deposit</a>
                        </li>
                </ul>

            </div>
            
		<div class="col-md-9 casino-masonry">
			<div class="container-fluid">
			<div class="row">
				<div class="section-title section-casino-title clearfix col-md-12">
					<h2 class="section-title-header">Online casinos</h2>
					<ul class="section-title-list">
						<li>Sort by:</li>
                                                <li class="filter" data-filter="all">All</li>
						<li class="active filter" data-filter=".popularity">Popularity</li>
                                             	<li class="filter" data-filter=".software">Software</li>
						<li class="filter" data-filter=".owner">Owner</li>
						<li class="filter" data-filter=".licenses">Licenses</li>
						<li class="filter" data-filter=".rtp">RTP</li>
					</ul>
				</div>
			</div>
			</div>

			
			
			<div class="row" id="container">
				<div class="col-md-4 col-sm-6 mix popularity"  >
					<div class="text-center casino-block ">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix software">
					<div class="text-center casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix popularity">
					<div class="text-center casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix rtp">
					<div class="text-center casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix owner">
					<div class="text-center casino-block hot-casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix popularity">
					<div class="text-center casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix rtl">
					<div class="text-center casino-block ">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
			
				<div class="col-md-4 col-sm-6 mix licenses">
					<div class="text-center casino-block">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
				
				
				<div class="col-md-4 col-sm-6 mix licenses">
					<div class="text-center casino-block hot-casino-block ">

						<img src="<?php echo get_template_directory_uri(); ?>/images/casinorounded.png" alt="Free Spins">

						<h3 class="casino-block-title">Free Spins Casino</h3>

						<span class="rating">
										<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star-half-empty"></span>
						</span>

						<p class="casino-block-content block-content">Free Spins Casino is an online casino that promises free spin on every deposit.</p>

						<div class="btn-group">
							<a href="/" class="btn btn-reviews">Reviews</a>
							<a href="/" class="btn btn-playnow">Play now</a>
						</div>

					</div>
					<!-- /.casino-block -->
				</div>
				<!-- /.col-md-3 -->
			</div>
			
		</div>
	</div>
</div>

<!------------------------------- Casinos Grid Main Content Finish ------------------------------->
<!------------------------------- Casinos Footer Content Start ------------------------------->
<div class="container">
        <div class="row">

                <div class="section-title  clearfix col-md-12">
                        <h2 class="section-title-header">New to Poker? Learn more</h2>
                </div>
        </div>
        <!-- /.row -->
        <div class="row">

                <div class="col-md-4 casinos-guide-block">
                        <h3>A Beginners Guide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nisl et erat euismod venenatis eget in sem phasellus ut nulla posuere, congue metus in finibus augue.
                        </p>
                        <a>Learn it all here</a>
                </div>


                <div class="col-md-4 casinos-guide-block">
                        <h3>A Beginners Guide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nisl et erat euismod venenatis eget in sem phasellus ut nulla posuere, congue metus in finibus augue.
                        </p>
                        <a>Learn it all here</a>
                </div>


                <div class="col-md-4 casinos-guide-block">
                        <h3>A Beginners Guide</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et nisl et erat euismod venenatis eget in sem phasellus ut nulla posuere, congue metus in finibus augue.
                        </p>
                        <a>Learn it all here</a>
                </div>
        </div>

</div>
<!------------------------------- Casinos Footer Content Finish ------------------------------->



<?php get_footer(); ?>


