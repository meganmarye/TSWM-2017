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
	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/04/header-bg-fallback-2.png); background-position: center center; ?>;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
		<div class="middle-content-container">
			<div class="main-page-content">
				<main role="main">
					<div class="background-page-title"><?php post_type_archive_title(); ?></div>

					<!-- H1 TITLE OF PAGE -->
					<h1 class="hidden">Testimonials</h1>

					<div class="story-filter-container">
						<form>
							<h2>Filter by:</h2>
							<div class="styled-select megan-display">
								<select name="county" class="story-filter county-dropdown" onChange="document.location = this.value" value="GO">
							        <?php include("assets/counties.php"); ?>
								</select>
							</div>

						</form>
					</div>
					<div class="normal-content testimonials grid-secondary-container grid">
						<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>

								<!-- item -->
								<div class="grid-item col-1-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
													<h3><?php the_title(); ?></h3>
													<span class="location"><?php the_field('city'); ?>, OK</span>
													<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
													<img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/>
												</div>
											</a>
										</div>
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
