
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

		<h1 class="hidden"><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<div class="left-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content media-archive-category">
							<!-- BODY CONTENT -->

								<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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
											<span><?php
											$args = array( 'hide_empty=0' );
											$terms = get_terms( 'media_categories', $args );
											if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
											    $count = count( $terms );
											    $i = 0;
											    $term_list = '<div class="my_term-archive">';
											    foreach ( $terms as $term ) {
											        $i++;
											        $term_list .= '<a href="' . esc_url( get_term_link( $term ) ) . '" alt="' . esc_attr( sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) ) . '">' . $term->name . '</a>';
											        if ( $count != $i ) {
											            $term_list .= ' / ';
											        }
											        else {
											            $term_list .= '</div>';
											        }
											    }
											    echo $term_list;
											}
											?>
											</span>

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
						</div>

					</section>
					<!-- /section -->
				</main>
				<div class="left-share">
					<span>SHARE</span>
					<a href="https://www.facebook.com/dialog/share?app_id=165808663777969&amp;display=popup&amp;href=<?php the_permalink(); ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<a href="//twitter.com/share?text=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;hashtags=" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-custom="true" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
					<a href="mailto:?&subject=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&body=Check%20out%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="right-content sidebar-interior-page">
				<div>
					<ul id="menu-protecting-oklahoma" class="menu">
					<?php
						// your taxonomy name
							$tax = 'media_categories';

							// get the terms of taxonomy
							$terms = get_terms( $tax, [
							  'hide_empty' => false, // do not hide empty terms
							]);

							// loop through all terms
							foreach( $terms as $term ) {

							  // if no entries attached to the term
							  if( 0 == $term->count )
							    // display only the term name
							    echo '<li><a>' . $term->name . '</a></li>';

							  // if term has more than 0 entries
							  elseif( $term->count > 0 )
							    // display link to the term archive
							    echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';

							}
						?>
					</ul>
				</div>

				<div class="sidebar-section <?php if( have_rows('take_action') ) { echo 'true-action';} else {echo 'false-action';} ?>">
					<div class="take-action-container">
						<?php
						if( have_rows('take_action') ):

						    // loop through the rows of data
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
						    // no layouts found
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
