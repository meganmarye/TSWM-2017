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

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/04/header-bg-fallback-2.png); background-position: center center;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">

			<!-- breadcrumbs -->

			<div class="full-content search-results">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>

						<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article class="grid" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<div class="col-1-4 <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>">
									<!-- post thumbnail -->
									<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
										</a>
									<?php endif; ?>
									<!-- /post thumbnail -->
								</div>

								<div class="col-3-4 <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>">
									<!-- post title -->
									<h3>
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h3>
									<!-- /post title -->

									<!-- post details -->
									<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author(); ?></span>
									<span class="date"> on <?php the_time('F j, Y'); ?></span>
									<!-- /post details -->

									<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
								</div>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>
								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
							</article>
							<!-- /article -->

						<?php endif; ?>


						<?php get_template_part('pagination'); ?>

					</section>
				</main>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
