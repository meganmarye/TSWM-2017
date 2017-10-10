<?php /* Template Name: Get Involved */  get_header(); ?>
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
		<div class="grid interior-page-content fullwidthtemp">

			<!-- breadcrumbs -->

			<div class="full-content">
				<div class="breadcrumbs" typeof="BreadcrumbList" vocab="//schema.org/"><?php if(function_exists('bcn_display')){ bcn_display();}?></div>
				<main role="main">
					<section>
						<div class="normal-content getinvolved-cont">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<?php the_content(); ?>

									<h2>Take action to make Oklahoma tobacco free.</h2>

									<div class="three-ctas-getinvolved">

										<div class="related-content true-related three-ctas-getinvolved">

											<div class="grid-item">
												<a href="#jointhefight">
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/jointhefight.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/jointhefight.png'; this.onerror=null;" alt="Join the Fight"/>
														<div class="copy">
															<h3>JOIN THE FIGHT</h3>
															<p>Show your support for stronger tobacco policies in Oklahoma.</p>
															<img src="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.svg" data-fallback="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.png" class="rightarrow" alt="Right Arrow">
														</div>
													</div>
												</a>
											</div>

											<div class="grid-item">
												<a href="#stayinformed">
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/stayinformed.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/stayinformed.png'; this.onerror=null;" alt="Stay Informed"/>
														<div class="copy">
															<h3>STAY INFORMED</h3>
															<p>Sign up for our newsletter for tobacco control updates.</p>
															<img src="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.svg" data-fallback="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.png" class="rightarrow" alt="Right Arrow">
														</div>
													</div>
												</a>
											</div>

											<div class="grid-item">
												<a href="#betobaccofree">
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/betobaccofree.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/betobaccofree.png'; this.onerror=null;" alt="Be Tobacco Free"/>
														<div class="copy">
															<h3>BE TOBACCO FREE</h3>
															<p>Free support is available through the Oklahoma Tobacco Helpline.</p>
															<img src="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.svg" data-fallback="http://newtswm.staging.wpengine.com/wp-content/themes/tswm2.0/img/Down-Arrow.png" class="rightarrow" alt="Right Arrow">
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="anchor-link" id="jointhefight"></div>
									<div class="gi-section jointhefight grid" id="">
										<div class="col-1-2">
											<div class="copy">
												<h4>JOIN THE FIGHT</h4>
												<p>
													Want to join the cause for stronger tobacco policies but aren’t sure where to start? Show your support by filling out the form to add your pin to the map, and learn how you can take an active role in your own community.
												</p>
												<?php echo do_shortcode( '[gravityform id="3" title="false" description="false"]' ); ?>
											</div>
										</div>
										<div class="col-1-2 no-pad">
											<?php echo do_shortcode( '[put_wpgm id=1]' ); ?>
										</div>
									</div>
									<div class="anchor-link" id="stayinformed"></div>
									<div class="gi-section stayinformed grid" id="">
										<div class="col-1-2">
											<div class="copy">
												<h4>STAY INFORMED</h4>
												<p>
													Stay up to date on tobacco control issues in Oklahoma. Sign up to receive our newsletter to monitor policy progress and learn about opportunities for action in your community.
												</p>

											</div>
										</div>
										<div class="col-1-2 no-pad">
											<?php echo do_shortcode( '[gravityform id="4" title="false" description="false"]' ); ?>
										</div>
									</div>
									<div class="anchor-link" id="betobaccofree"></div>
									<div class="gi-section betobaccofree grid">
										<div class="col-1-2">
											<div class="copy">
												<h4>BE TOBACCO FREE</h4>
												<p>
													If you or a loved one is trying to quit tobacco, the <a href="https://okhelpline.com/">Oklahoma Tobacco Helpline</a> is here to help. Get free text and email support, free patches, gum or lozenges and lots more to help all Oklahomans become tobacco free.
												</p>
												<div class="button-container" style="padding-top: 0px;"><a href="https://okhelpline.com/"><button class="btn btn-1 btn-1b">Visit the Helpline</button></a></div>
											</div>
										</div>
										<div class="col-1-2 no-pad">
											<p>
												Get involved with others in your community. Contact your local TSET Healthy Living Program grantee for more information.
												<ul>
													<li class="vc_tta-panel-title vc_tta-controls-icon-position-left"><a href="http://newtswm.wpengine.com/wp-content/uploads/2017/06/Grantee-List-By-Agency.pdf" target="_blank" rel="noopener noreferrer"><span class="vc_tta-title-text">TSET Healthy Living Grants by Agency</span></a></li>
													<li class="vc_tta-panel-title vc_tta-controls-icon-position-left"><a href="http://newtswm.wpengine.com/wp-content/uploads/2017/06/Grantee-List-by-County.pdf" target="_blank" rel="noopener noreferrer">TSET Healthy Living Grants by County</a></li>
												</ul>
											</p>
										</div>
									</div>

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
