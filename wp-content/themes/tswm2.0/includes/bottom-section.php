<div class="bottom-section <?php if( have_rows('take_action') ) { echo 'true-action';} else {echo 'false-action';} ?>">
	<div class="maxwidth grid">
		<div class="main-bottom-copy col-2-3">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>


			<!-- IF NO CONTENT -->
			<?php else: ?>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			<?php endif; ?>
		</div>
		<div class="take-action-container col-1-3">
			<?php
			if( have_rows('take_action') ):
			    while ( have_rows('take_action') ) : the_row();
			        if( get_row_layout() == 'take_action_item' ):

			        	$headline = get_sub_field('headline');
			        	$content = get_sub_field('content_ta');
			        endif;
			?>
			<div class="action-item">
				<span class="headline"><?php echo($headline) ?></span>
				<?php echo($content) ?>
			</div>
			<?php endwhile;
			else :
			endif;
			?>
		</div>
	</div>
</div>