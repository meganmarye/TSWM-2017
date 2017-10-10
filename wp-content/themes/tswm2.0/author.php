<?php get_header(); ?>

<div class="main-container">

	<div class="static-header-image" style="background-image: url(//stopswithme.com/wp-content/uploads/2017/04/header-bg-fallback-2.png); background-position: center center;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">
			<!-- breadcrumbs -->
			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content author-archive">
							<!-- BODY CONTENT -->
								<?php if (have_posts()): the_post(); ?>

									<h1 class="hidden"><?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?></h1>

								<?php if ( get_the_author_meta('description')) : ?>

								<?php echo get_avatar(get_the_author_meta('user_email')); ?>

									<h2><?php _e( 'About ', 'html5blank' ); echo get_the_author() ; ?></h2>

									<?php echo wpautop( get_the_author_meta('description') ); ?>

								<?php endif; ?>
								<?php rewind_posts(); while (have_posts()) : the_post(); ?>

									<!-- article -->
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<div class="thumbnail <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>">
											<!-- post thumbnail -->
											<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
													<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
												</a>
											<?php endif; ?>
											<!-- /post thumbnail -->
										</div>

										<div class=" copy<?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>">
											<!-- post title -->
											<h3>
												<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
											</h3>
											<!-- /post title -->
											<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> on <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
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

