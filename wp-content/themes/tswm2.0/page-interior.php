<?php /* Template Name: Interior (Full Width) */  get_header(); ?>

<?php
	$args = array(
		'post_type' => 'background_position',
	);

	$the_query = new WP_Query( $args );


	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>

<div class="main-container">

	<div class="static-header-image <?php if ( has_post_thumbnail() ) { echo 'true';} else {echo 'false';} ?>" style="background-image: url(<?php echo $post_thumbnail_url ?>); background-position: <?php the_field('header_background_position'); ?>;"></div>
	<div class="texture-overlay"></div>
	<div id="theTarget"></div>
	<div class="middle-content-container">
		<div class="grid interior-page-content">

			<!-- H1 TITLE OF PAGE -->
			<?php if ( get_field( 'h1' ) ): ?>

				<h1 class="hidden"><?php the_field('h1'); ?></h1>

			<?php else: // field_name returned false ?>

				<h1 class="hidden"><?php the_title(); ?></h1>

			<?php endif; // end of if field_name logic ?>
			<!-- H1 TITLE OF PAGE -->

			<!-- breadcrumbs -->

			<div class="left-content interior-fullwidth">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php the_content(); ?>

								</article>
								<!-- /article -->
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
						<div class="acf-content">

							<?php

							$postURL = get_permalink($postobject->ID);

							// check if the flexible content field has rows of data
							if( have_rows('interior_content') ):

							    // loop through the rows of data
							    while ( have_rows('interior_content') ) : the_row();

							        //DID YOU KNOW
							        if( get_row_layout() == 'did_you_know' ):

							        	$post_object = get_sub_field('dyk_post');

					                   if( $post_object ):

					                        $post = $post_object; setup_postdata( $post );
					                        $image = get_field('image');
					                        ?>


											<div class="didyouknow-content">
												<div class="dyk-img">
													<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
													<div class="dky">DID YOU KNOW</div>
												</div>
												<div class="dky-text">
													<div class="copy"><?php the_field('copy_to_share'); ?></div>
													<div class="dky-share">
														<span>SHARE</span>
														<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=<?php the_permalink() ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
														<a href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode(get_field('copy_to_share')); ?>%20@StopsWithMe" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
														<a href="https://pinterest.com/pin/create/button/?url=<?php echo $postURL ?>&media=<?php echo $image['url']; ?>&description=DID%20YOU%20KNOW: <?php echo rawurlencode(get_field('copy_to_share')); ?>%20Find out more at%3A%20<?php echo $postURL ?>" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
														<a href="mailto:?&subject=DID YOU KNOW%20%7C%20Tobacco%20Stops%20With%20Me&body=<?php echo rawurlencode(get_field('copy_to_share')); ?>%20Find out more at%3A%20<?php echo $postURL ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
													</div>
												</div>
											</div>

											<? wp_reset_postdata();

					                    endif;


							        endif;
							        //DID YOU KNOW

									//WYSIWYG
							        if( get_row_layout() == 'wysiwyg-block' ):

							        	$wysiwyg = get_sub_field('wysiwyg');

							        	echo '<div class="wysiwyg-content">' . $wysiwyg . '</div>';

						        	endif;
									//WYSIWYG

									//INFOGRAPHIC
							        if( get_row_layout() == 'infographic_block_1' ):

							        	// check if the nested repeater field has rows of data
							        	if( have_rows('repeater_test') ):

										 	echo '<div class="infographic-container">';

										 	// loop through the rows of data
										    while ( have_rows('repeater_test') ) : the_row();

												$infoimg = get_sub_field('repeater_image');
									        	$sharecopy = get_sub_field('repeater_share_copy');
									        	$twitterurl= get_sub_field('repeater_twitter_image_url');
									        	$infocopy = get_sub_field('repeater_copy_within_infographic');
												// vars
												$field = get_sub_field_object('color_scheme');
												$value = $field['value'];
												$label = $field['choices'][ $value ];

												echo '
												<div class="single-infographic ' . $value . '">
													<img src="' . $infoimg . '" alt="' . $infocopy . '"/>
													<div class="page-share-infographic">
														<span>SHARE</span>
														<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=' . $postURL . '" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
														<a href="https://twitter.com/intent/tweet?text=' . $infocopy . '%20@StopsWithMe.%20pic.twitter.com/' . $twitterurl . '" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
														<a href="https://pinterest.com/pin/create/button/?url=' . $postURL . '&media=' . $infoimg . '&description=' . $sharecopy . 'Find out more at ' . $postURL . '" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
														<a href="mailto:?&subject=' . $sharecopy . '%20%7C%20Tobacco%20Stops%20With%20Me&body=' . $infocopy . '%20Find%20out%20more%20at%3A%20' . $postURL . '" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
													</div>
												</div>
												';

											endwhile;

											echo '</div>';

										endif;

							        endif;
							        //INFOGRAPHIC


									//INFOGRAPHIC 2
							        if( get_row_layout() == 'infographic_v3' ):

							        	// check if the nested repeater field has rows of data
							        	if( have_rows('infographic_single_v3') ):

										 	echo '<div class="infographic-container">';

										 	// loop through the rows of data
										    while ( have_rows('infographic_single_v3') ) : the_row();

							                   $post_object = get_sub_field('infographic_post_object');

							                   if( $post_object ):

							                        $post = $post_object; setup_postdata( $post ); ?>

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

													<? wp_reset_postdata();

							                    endif;

											endwhile;

											echo '</div>';

										endif;

							        endif;
							        //INFOGRAPHIC 2



							    endwhile;
								else :
							    // no layouts found
							endif;
							?>
						</div>
						<div class="left-share">
							<span>SHARE</span>
							<a href="https://www.facebook.com/dialog/share?app_id=165808663777969&amp;display=popup&amp;href=<?php the_permalink(); ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
							<a href="//twitter.com/share?text=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&amp;url=<?php echo wp_get_shortlink(); ?>&amp;hashtags=" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="https://www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" data-pin-custom="true" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							<a href="mailto:?&subject=<?php the_title('', ' %7C Tobacco Stops With Me Oklahoma'); ?>&body=Check%20out%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
						</div>
						<div class="related-content <?php if( have_rows('grid_item_related') ) { echo 'true-related';} else {echo 'false-related';} ?>">
							<span>recommended PAGES</span>
							<?php

							// check if the flexible content field has rows of data
							if( have_rows('grid_item_related') ):

							     // loop through the rows of data
							    while ( have_rows('grid_item_related') ) : the_row();

							        if( get_row_layout() == 'grid_item_single' ):

							        	$title = get_sub_field('title');
							        	$number = get_sub_field('number');
							        	$description = get_sub_field('description');
							        	$page_link = get_sub_field('page_link');
							        	$image = get_sub_field('image');


							        endif;

							?>

							<div class="grid-item">
								<a href="<?php echo($page_link) ?>">
									<div class="grid-content">
										<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="image" />
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
					</section>
				</main>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>
