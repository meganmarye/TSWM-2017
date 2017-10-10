<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article loop -->
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