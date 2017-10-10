<?php get_header(); ?>

<?php
	$args = array(
		'post_type' => 'background_position',
	);

	$the_query = new WP_Query( $args );

	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>

<div class="main-container">

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url('//stopswithme.com/wp-content/uploads/2017/04/Header-Image@2x-1.png'); background-position: <?php the_field('header_background_position'); ?>;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">

			<!-- breadcrumbs -->

			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<!-- article -->
								<article class=" single-testimonial grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
									<div class="col-1-3">
										<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
											</a>
										<?php endif; ?>
									</div>
									<div class="col-2-3">
										<h1><?php the_title(); ?></h1>
										<h2><?php the_field('city'); ?>, OK</h2>
										<?php the_content(); ?>
									</div>

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
					</section>
				</main>
				<div class="left-share">
					<span>SHARE</span>
					<a href="https://www.facebook.com/dialog/share?app_id=165808663777969&amp;display=popup&amp;href=<?php the_permalink(); ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="//twitter.com/share?text=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;hashtags=" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					<a href="mailto:?&subject=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&body=Check%20out%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="right-content sidebar-interior-page">
				<ul id="menu-protecting-oklahoma" class="menu">
					<?php if( is_singular('testimonials') ) { ?>
					<li><?php previous_post_link( '%link', 'Previous Story' ) ?></li>
					<li><?php next_post_link( '%link', 'Next Story' ) ?></li>
					<li><a href="/testimonials/">View All Testimonials</a></li>
					<li><a href="/share-your-story/">Share Your Story</a></li>
					<?php } ?>
				</ul>
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
