<?php get_header(); ?>

<?php
	$args = array(
		'post_type' => 'background_position',
	);

	$the_query = new WP_Query( $args );


	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
<div class="main-container blog-single">

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-size: cover; background-repeat: no-repeat; background-position: <?php the_field('header_background_position'); ?>;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content blog">
			<!-- breadcrumbs -->

			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<h1><?php the_title(); ?></h1>
									<p class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?>  on <?php the_time('F j, Y'); ?></p>
									<?php the_content(); ?>

								</article>
								<!-- /article -->
							<?php endwhile; ?>
							<!-- IF NO CONTENT -->
							<?php else: ?>
								<!-- article -->
								<article>
									<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
								</article>
								<!-- /article -->
							<?php endif; ?>
						</div>
						<div class="left-share">
							<span>SHARE</span>
							<a href="https://www.facebook.com/dialog/share?app_id=165808663777969&amp;display=popup&amp;href=<?php the_permalink(); ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a href="//twitter.com/share?text=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;hashtags=" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-custom="true" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="mailto:?&subject=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&body=Check%20out%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</div>
						<div class="related-content <?php if( have_rows('grid_item_related') ) { echo 'true-related';} else {echo 'false-related';} ?>">
							<span>recommended PAGES</span>
							<?php

							// check if the flexible content field has rows of data
							if( have_rows('grid_item_related') ):

							     // loop through the rows of data
							    while ( have_rows('grid_item_related') ) : the_row();

							        if( get_row_layout() == 'grid_item_single' ):

							        	$title = get_sub_field('title');
							        	$number = get_sub_field('number');
							        	$description = get_sub_field('description');
							        	$page_link = get_sub_field('page_link');
							        	$image = get_sub_field('image');


							        endif;

							?>

							<div class="grid-item">
								<a href="<?php echo($page_link) ?>">
									<div class="grid-content">
										<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="image" />
										<div class="copy">
											<h3><?php echo($title) ?></h3>
											<?php echo($description) ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/>
										</div>
									</div>
								</a>
							</div>

							<?php endwhile;
							else :
							    // no layouts found
							endif;
							?>
						</div>
					</section>
				</main>
			</div>
			<div class="right-content sidebar-interior-page">
				<ul id="menu-blog" class="menu">
					<li class="viewall"><a href="/news/">view all articles</a></li>
				</ul>
				<?php get_sidebar() ?>
				<div class="sidebar-section <?php if( have_rows('take_action') ) { echo 'true-action';} else {echo 'false-action';} ?>">
					<div class="take-action-container">
						<?php
						if( have_rows('take_action') ):

						    // loop through the rows of data
						    while ( have_rows('take_action') ) : the_row();

						        if( get_row_layout() == 'take_action_item' ):

						        	$headline = get_sub_field('headline');
						        	$content = get_sub_field('content_ta');

						        endif;
						?>
						<div class="action-item">
							<span class="headline"><?php echo($headline) ?></span>
							<?php echo($content) ?>
						</div>


						<?php endwhile;
						else :
						    // no layouts found
						endif;
						?>
					</div>

				</div>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
