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
	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/05/cig-header.jpg); background-position: center center;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
		<div class="middle-content-container blog">
			<div class="main-page-content">
				<main role="main">
					<div class="background-page-title">NEWSROOM</div>

					<!-- H1 TITLE OF PAGE -->
					<h1 class="hidden">Media Messaging and Videos</h1>

					<div class="normal-content blog-archive grid-secondary-container grid">
						<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>

								<!-- item -->
								<div class="grid-item col-1-2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<div class="grid-content">
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><div class="image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>">
												<!-- post thumbnail -->
												<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
												<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
												<?php endif; ?>
												<!-- /post thumbnail -->
											</div></a>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<div class="copy">
													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h3><?php the_title(); ?></h3></a>
													<p class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>

													<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/></a>
												</div>
										</div>
									</a>
								</div>
								<!-- /item -->

							<?php endwhile; ?>

							<?php else: ?>
								<!-- article -->
								<article>
									<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
								</article>
								<!-- /article -->
							<?php endif; ?>

						<!-- BODY CONTENT -->
					</div>
					<div class="clearfix"></div>
					<div class="pagination-archive">
						<?php get_template_part('pagination'); ?>
					</div>
					<div class="clearfix"></div>
				</main>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>




