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
						<div class="normal-content acf-content">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php $postURL = get_permalink($postobject->ID); ?>
								<div class="infographic-container">
									<div class="single-infographic <?php the_field('color_scheme')['value']?>">
										<img src="<?php the_field('image')?>" alt="<?php the_field('copy_within_infographic')?>"/>
										<div class="page-share-infographic">
											<span>SHARE</span>
											<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=<?php the_permalink() ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
											<a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(get_field('copy_within_infographic')); ?>%20@StopsWithMe.%20pic.twitter.com/<?php the_field('twitter_image_url') ?>" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											<a href="https://pinterest.com/pin/create/button/?url=<?php echo $postURL ?>&media=<?php the_field('image')?>&descriptions=<?php the_field('share_copy')?>Find out more at <?php echo $postURL ?>" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
											<a href="mailto:?&subject=<?php the_field('share_copy')?>%20%7C%20Tobacco%20Stops%20With%20Me&body=<?php  echo rawurlencode(get_field('copy_within_infographic')); ?>%20Find%20out%20more%20at%3A%20<?php echo $postURL ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
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
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
