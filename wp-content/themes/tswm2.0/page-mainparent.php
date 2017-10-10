<?php  /* Template Name: Main Parent Pages */  get_header(); ?>

<?php
	$args = array(
		'post_type' => 'main_pages_grid',
	);

	$the_query = new WP_Query( $args );

	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>

<div class="main-container">

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-position: <?php the_field('header_background_position'); ?>;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>

	<?php if ( get_field( 'h1' ) ): ?>

		<h1 class="hidden"><?php the_field('h1'); ?></h1>

	<?php else: // field_name returned false ?>

		<h1 class="hidden"><?php the_title(); ?></h1>

	<?php endif; // end of if field_name logic ?>

	<div class="middle-content-container">

		<div class="main-page-content">
			<main role="main">

				<div class="background-page-title"><?php the_title(); ?></div>

				<div class="grid-secondary-container grid">
					<?php

					// check if the flexible content field has rows of data
					if( have_rows('grid_item') ):

					     // loop through the rows of data
					    while ( have_rows('grid_item') ) : the_row();

					        if( get_row_layout() == 'grid_item_single' ):

					        	$title = get_sub_field('title');
					        	$number = get_sub_field('number');
					        	$description = get_sub_field('description');
					        	$page_link = get_sub_field('page_link');
					        	$image = get_sub_field('image');


					        endif;

					?>

					<div class="grid-item col-1-2">
						<div class="number-container">
							<span><?php echo($number) ?></span>
						</div>
						<a href="<?php echo($page_link) ?>">
							<div class="grid-content">
								<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"  title="<?php echo $image['title'] ?>" class="image" />
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
				<div class="clearfix"></div>
				<div class="spacer"></div>
				<!--  old bottom was section here -->

			</main>
		</div>
	</div>



</div>

<?php get_footer(); ?>
