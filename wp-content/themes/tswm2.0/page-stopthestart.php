<?php /* Template Name: Stop the Start */  get_header(); ?>
<?php
	$args = array(
		'post_type' => 'background_position',
	);

	$the_query = new WP_Query( $args );


	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
<style>
	.talktoyourkidscont .testimonials-sys.choose-kids .grid-item:nth-child(3n+1){
		margin-right: 5%;
		margin-bottom: 0px;
    }
    .talktoyourkidscont .testimonials-sys.choose-kids .grid-item{
	   	margin-right: 5%;
	   	margin-bottom: 0px;
    }
    .talktoyourkidscont .testimonials-sys.choose-kids .grid-item:nth-child(1n+3){
        margin-right: 0px;
    }
    .talktoyourkidscont .testimonials-sys.choose-kids{
	    width: 100%;
	    padding-left: 10px;
    }
    .talktoyourkidscont .testimonials-sys.choose-kids{
	    margin-bottom: 0px;
    }
    @media only screen and (max-width: 575px){
		.talktoyourkidscont .testimonials-sys.choose-kids{
		    padding-left: 0px;
	    }
		.talktoyourkidscont .testimonials-sys.choose-kids .grid-item img{
			width: 45% !important;
		    display: inline-block;
		    vertical-align: -webkit-baseline-middle;
		}
		.testimonials-sys .grid-item .grid-content .copy{
		    width: 50%;
		    display: inline-block;
		    vertical-align: -webkit-baseline-middle;
	    }
	    .talktoyourkidscont .testimonials-sys.choose-kids .grid-item:nth-child(3n+1){
			margin-right: 0%;
			margin-bottom: 3%;
			width: 100%;
	    }
	    .talktoyourkidscont .testimonials-sys.choose-kids .grid-item{
		   	margin-right: 0%;
		   	margin-bottom: 3%;
		   	width: 100%;
	    }
    }
</style>

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

								<div style="display: block; clear: both;">
									<div class="talktoyourkidscont">
										<div class='grid choose-kids testimonials-sys' style="">
											<div class="grid-item col-1-3 child" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/22509-01---TSET-17-02-TSWM-Website-Refresh-Elementary.jpg" style="width: 100%; max-width: none;" />
															<div class="copy">
																<p>
																	<strong>Ages 5-10</strong><br>
																</p>
																<img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/>
															</div>
													</div>
											</div>

											<div class="grid-item col-1-3 preteen" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/22509-01-TSET-17-02-TSWM-Website-Refresh-MiddleSchool.jpg" style="width: 100%; max-width: none;" />
															<div class="copy">
																<p>
																	<strong>Ages 11-14</strong><br>
																</p>
																<img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/>
															</div>
													</div>
											</div>

											<div class="grid-item col-1-3 teen" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
													<div class="grid-content">
														<img src="<?php echo get_template_directory_uri(); ?>/img/22509-01-TSET-17-02-TSWM-Website-Refresh-HighSchool.jpg" style="width: 100%; max-width: none;" />
															<div class="copy">
																<p>
																	<strong>Ages 15-18</strong><br>
																</p>
																<img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" class="rightarrow" alt="Right Arrow"/>
															</div>
													</div>
											</div>
										</div>
									</div>
									<div class="grid testimonials-sys results" style="border-top: none; padding-top: 0px; margin-top: 0px;">
										<div class="child result" style="display: none;">
											<img src="<?php echo get_template_directory_uri(); ?>/img/elementaryschool.jpg" style="margin-bottom: 15px;">
											<p>
												<strong>Ages 5-10</strong><br>
												Though they’re still young, it’s never too early to start talking to your kids about the dangers of tobacco use.
											</p>
											<ul>
												<li>First things first: set a good example. If you use tobacco, think about quitting. Children of parents who smoke are more likely to start smoking at an early age. For free help quitting, call 1-800-QUIT NOW or visit <a href="https://okhelpline.com/">OKhelpline.com</a>.</li>
												<li>The next time you see someone smoking in public, take a moment to discuss how it harms the body. Tell them that it’s highly addictive and can harm their lungs, heart and other body parts.</li>
												<li>Be direct: Tell them honestly and directly that you don’t want them using tobacco. Be clear and consistent about the risks.</li>
												<li>Make it a two-way conversation. Encourage them to share and ask questions.</li>
											</ul>
											<p><a href="https://shapeyourfutureok.com/videos-extras/coloring-pages/">Download tobacco-free coloring pages</a></p>

											<div class="button-container viewallkids" style="padding: 20px 0px 0px 0px;">
												<a href="#talktoyourkidscontanchor"><button class="btn btn-1 btn-1b viewallbutton">view all age groups</button></a>
												<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=<?php the_permalink() ?>" target="_blank" class="button"><button class="btn btn-1 btn-1b">Share with other parents</button></a>
											</div>
										</div>
										<div class="preteen result" style="display: none;">
											<img src="<?php echo get_template_directory_uri(); ?>/img/middleschool.jpg" style="margin-bottom: 15px;">
											<p>
												<strong>Ages 11-14</strong><br>
												This is the stage when many kids try tobacco for the first time. Some even become addicted by age 14.
											</p>
											<ul>
												<li>First things first: set a good example. If you use tobacco, think about quitting. Children of parents who smoke are more likely to start smoking at an early age. For free help quitting, call 1-800-QUIT NOW or visit <a href="https://okhelpline.com/">OKhelpline.com</a>.</li>
												<li>Explain how tobacco can negatively affect their appearance, causing premature wrinkles and yellow teeth.</li>
												<li>Find out if they have friends that use tobacco. Talk to them about peer pressure and ways to say no. </li>
												<li>If friends or relatives have died from tobacco-related illness, tell them about it.</li>
												<li>Have your kid make a pledge to stay away from tobacco.</li>
											</ul>
											<div class="button-container viewallkids" style="padding: 20px 0px 0px 0px;">
												<a href="#talktoyourkidscontanchor"><button class="btn btn-1 btn-1b viewallbutton">view all age groups</button></a>
												<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=<?php the_permalink() ?>" target="_blank" class="button"><button class="btn btn-1 btn-1b">Share with other parents</button></a>
											</div>
										</div>
										<div class="teen result" style="display: none;">
											<img src="<?php echo get_template_directory_uri(); ?>/img/highschool.jpg" style="margin-bottom: 15px;">
											<p>
												<strong>Ages 15-18</strong><br>
												The older they get, the more exposed to tobacco they become. Talk to them regularly.
											</p>
											<ul>
												<li>First things first: set a good example. If you use tobacco, think about quitting. Children of parents who smoke are more likely to start smoking at an early age. For free help quitting, call 1-800-QUIT NOW or visit <a href="https://okhelpline.com/">OKhelpline.com</a>.</li>
												<li>Discuss the number of ways tobacco is harmful to their health. Be specific. You can learn more about tobacco’s health effects <a href="/protecting-oklahoma/health-impact/">here</a>.</li>
												<li>If you catch your teen using tobacco, avoid threats and ultimatums. Ask a few questions and find out why. Then talk about what can be done to help them stop.</li>
												<li>Always keep the line of dialogue open. If they ask a question you don’t know the answer to, research it together.</li>
												<li>Assure them that tobacco use isn’t as common or as cool as they might think. In fact, most adults and kids don’t smoke, vape or use tobacco products.</li>
												<li>Speak candidly about the issues you’ve faced, describing the physical, financial and social impacts it can have.</li>
												<li>Tell them how the tobacco industry <a href="/exposing-big-tobacco/targeting-our-children/">markets their products to kids</a> and empower them to resist.</li>
											</ul>


											<div class="button-container viewallkids" style="padding: 20px 0px 0px 0px;">
												<a href="#talktoyourkidscontanchor"><button class="btn btn-1 btn-1b viewallbutton">view all age groups</button></a>
												<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=<?php the_permalink() ?>" target="_blank" class="button"><button class="btn btn-1 btn-1b">Share with other parents</button></a>
											</div>
										</div>
									</div>
								</div>
								<div style="display: block; clear: both;">
									<h2 >Want to do more? Take action to make Oklahoma tobacco free.</h2>

									<div class="three-ctas-getinvolved" style="margin-top: 30px; margin-bottom: 0px;">

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
									<div class="gi-section jointhefight grid" style="padding-top: 30px;">
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
