<div class="section section-latestnews">
		<div class="container">
			<div class="row">

				<div class="section-title clearfix col-md-12">
					<h2 class="section-title-header">Latest news<span class="fa fa-info-circle"></span></h2>
					<ul class="section-title-list">
						<li>News by game</li>
						<li>All news</li>
					</ul>
				</div>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

    <div class="container">

	<div class="section-content row">
                            
        <?php
		
            $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'paged' => $paged,
            );

            $job = query_posts($args);
            foreach ($job as $post) { setup_postdata($post);
	
        ?>

            <div class="col-md-3 col-sm-6 news-block">
                <a href="<?php echo get_the_permalink(); ?>">
                    <?php the_date('d-m-Y', '<p class="news-date">', '</p>'); ?>
                    <?php echo get_the_post_thumbnail($post->ID, 'minithumb',array('class' => 'news-img img-responsivee')); ?>
                    <h3 class="news-block-title"><?php the_title(); ?></h3>
                    <p class="news-block-content block-content">
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </a>
            </div>
            
            <?php } //end foreach ?>
            
            
	</div>
    </div>
	</div>
