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

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/04/Header-Image@2x.png); background-position: center 30%;"></div>

	<div class="middle-content-container">

		<div class="grid interior-page-content">
			<div class="col-1-1">
				<main role="main">
					<!-- section -->
					<section>

						<article id="post-404">

							<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
							<h2>
								<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
							</h2>

						</article>

					</section>
					<!-- /section -->
				</main>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>

