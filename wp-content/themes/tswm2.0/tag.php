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

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/04/header-bg-fallback-2.png); background-position:center center;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">
			<!-- breadcrumbs -->
		<h1 class="hidden"><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/">Items tagged: <?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content tag-archive">
							<!-- BODY CONTENT -->

								<?php get_template_part('loop'); ?>

							<!-- BODY CONTENT -->
							<div class="pagination-interior"><?php get_template_part('pagination'); ?></div>
						</div>

					</section>
					<!-- /section -->
				</main>
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
