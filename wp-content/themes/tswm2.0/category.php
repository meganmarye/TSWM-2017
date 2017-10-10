
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

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url('//stopswithme.com/wp-content/uploads/2017/04/Header-Image@2x.png'); background-position: <?php the_field('header_background_position'); ?>;"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">
			<!-- breadcrumbs -->
		<h1 class="hidden"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/">Items categorized as: <?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content category-archive">
							<!-- BODY CONTENT -->

								<?php get_template_part('loop'); ?>

							<!-- BODY CONTENT -->
							<div class="pagination-interior"><?php get_template_part('pagination'); ?></div>
						</div>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="left-share">
				<span>SHARE</span>
				<a href="https://www.facebook.com/dialog/share?app_id=165808663777969&amp;display=popup&amp;href=<?php the_permalink(); ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
				<a href="//twitter.com/share?text=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;hashtags=" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-custom="true" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				<a href="mailto:?&subject=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&body=Check%20out%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
			</div>
			<div class="right-content sidebar-interior-page">
				<div>
					<ul id="menu-protecting-oklahoma" class="menu">
					<li><a href="/">RETURN TO HOMEPAGE</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
