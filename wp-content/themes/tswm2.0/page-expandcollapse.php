<?php /* Template Name: Interior with Sidebar + Expand Collapse */  get_header(); ?>

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

			<div class="left-content">
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
			<div class="right-content sidebar-interior-page">
				<?php the_field('sidebar_menu_select') ?>
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

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="footer-left grid">
					<div class="col-1-2 left">
							<a href="/newsroom/" class="rss">
								<svg xmlns="//www.w3.org/2000/svg" viewBox="5796 625.291 25.417 25.417">
								  <defs>
								    <style>
								      .rss-svg {
								        fill: #746f71;
								      }
								    </style>
								  </defs>
								  <g id="Group_2434" data-name="Group 2434" transform="translate(5776 625.291)">
								    <path id="Path_4841" data-name="Path 4841" class="rss-svg" d="M2.888,34a2.888,2.888,0,0,0,0,5.777,2.888,2.888,0,0,0,0-5.777Z" transform="translate(20 -14.359)"/>
								    <path id="Path_4842" data-name="Path 4842" class="rss-svg" d="M4.578,18A.546.546,0,0,0,4,18.578v3.466a.546.546,0,0,0,.578.578,7.5,7.5,0,0,1,7.51,7.51.546.546,0,0,0,.578.578h3.466a.546.546,0,0,0,.578-.578A12.129,12.129,0,0,0,4.578,18Z" transform="translate(18.311 -7.602)"/>
								    <path id="Path_4843" data-name="Path 4843" class="rss-svg" d="M4.578,0A.546.546,0,0,0,4,.578V5.2a.546.546,0,0,0,.578.578A16.764,16.764,0,0,1,21.33,22.529a.546.546,0,0,0,.578.578h4.621a.546.546,0,0,0,.578-.578A22.558,22.558,0,0,0,4.578,0Z" transform="translate(18.311)"/>
								  </g>
								</svg>
								<span>NEWSROOM</span>
							</a>
							<a href="/media_room/" class="media">
								<svg xmlns="//www.w3.org/2000/svg" viewBox="5861 624.232 27.421 27.535">
								  <defs>
								    <style>
								      .media-svg {
								        fill: #746f71;
								      }
								    </style>
								  </defs>
								  <g id="Group_2435" data-name="Group 2435" transform="translate(5861 624.232)">
								    <path id="Path_4845" data-name="Path 4845" class="media-svg" d="M25.136,21.137a.571.571,0,1,1-1.143,0V5.941a2.573,2.573,0,0,0-1.828-2.4H6.855V2.285H25.136ZM16,23.993H12.568a1.143,1.143,0,1,1,0-2.285H16a1.143,1.143,0,1,1,0,2.285ZM4.57,13.711A5.657,5.657,0,0,1,10.283,8a5.713,5.713,0,1,1,0,11.425A5.657,5.657,0,0,1,4.57,13.711ZM8,23.993H4.57a1.143,1.143,0,1,1,0-2.285H8a1.143,1.143,0,1,1,0,2.285ZM26.279,0H5.713A1.079,1.079,0,0,0,4.57,1.143V3.428H2.057A2.048,2.048,0,0,0,0,5.484V25.479a2.048,2.048,0,0,0,2.057,2.057H18.738a1.86,1.86,0,0,0,1.942-1.942V6.855a1.215,1.215,0,0,1,1.028-1.143V21.137a2.856,2.856,0,1,0,5.713,0V1.143A1.079,1.079,0,0,0,26.279,0Z"/>
								    <path id="Path_4846" data-name="Path 4846" class="media-svg" d="M9.428,9a3.428,3.428,0,0,0,0,6.855A3.428,3.428,0,0,0,9.428,9" transform="translate(0.855 1.283)"/>
								  </g>
								</svg>
								<span>MEDIA MESSAGING & VIDEOS</span>
							</a>
							<a href="/resources-data/" class="resources">
								<svg xmlns="//www.w3.org/2000/svg" viewBox="6004 624.232 20.875 27.535">
								  <defs>
								    <style>
								      .pdf-svg {
								        fill: #746f71;
								      }
								    </style>
								  </defs>
								  <path id="Path_4844" data-name="Path 4844" class="pdf-svg" d="M14.894.544V5.98H20.33ZM12.717,8.158V0H0V27.535H20.875V8.158ZM4.506,19.483l1.527-1.527,3.319,3.319V10.517H11.53V21.275l3.319-3.319,1.527,1.527-5.935,5.935Z" transform="translate(6004 624.232)"/>
								</svg>
								<span>RESOURCES & DATA</span>
							</a>
							<a href="/about-us/" class="about">
								<svg xmlns="//www.w3.org/2000/svg" viewBox="5928 626.096 36.898 24.613">
								  <defs>
								    <style>
								      .about-svg {
								        fill: #746f71;
								      }
								    </style>
								  </defs>
								  <path id="Path_12658" data-name="Path 12658" class="about-svg" d="M32.584,0H4.314A4.34,4.34,0,0,0,0,4.314V20.3a4.314,4.314,0,0,0,4.314,4.314h28.68a4.321,4.321,0,0,0,3.9-4.273V4.314A4.34,4.34,0,0,0,32.584,0ZM8.875,5.794A3.534,3.534,0,1,1,5.342,9.327,3.533,3.533,0,0,1,8.875,5.794ZM14.012,18.2H3.821c-.822,0-1.027-.493-.452-1.109l1.89-2.137a3.71,3.71,0,0,1,2.465-1.109h2.383a3.71,3.71,0,0,1,2.465,1.109l1.89,2.137C15,17.71,14.792,18.2,14.012,18.2Zm18.737.452H18.531a1.274,1.274,0,1,1,0-2.548H32.748a1.28,1.28,0,0,1,1.274,1.274A1.308,1.308,0,0,1,32.748,18.655Zm0-4.972H18.531a1.274,1.274,0,1,1,0-2.548H32.748a1.274,1.274,0,0,1,0,2.548Zm0-5.1H18.531a1.274,1.274,0,0,1,0-2.548H32.748a1.274,1.274,0,0,1,0,2.548Z" transform="translate(5928 626.096)"/>
								</svg>
								<span>ABOUT US</span>
							</a>
					</div>
					<div class="col-1-2 right">
							<a href="https://www.facebook.com/StopsWithMe" target="_blank" class="facebook">
								<i class="fa fa-facebook-official" aria-hidden="true"></i>
								<span>@StopWithMe</span>
							</a>
							<a href="https://www.youtube.com/user/StopsWithMe" target="_blank" class="youtube">
								<i class="fa fa-youtube-play" aria-hidden="true"></i>
								<span>Tobacco Stops With Me</span>
							</a>
							<a href="https://twitter.com/StopsWithMe" target="_blank" class="twitter">
								<i class="fa fa-twitter" aria-hidden="true"></i>
								<span>@StopsWithMe</span>
							</a>
					</div>
				</div>

				<div class="footer-right grid">
					<div class="col-1-3 oth">
						<a href="//okhelpline.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/oth-logo.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/oth-logo.png" alt="Oklahoma Tobacco Helpline"/></a>
					</div>
					<div class="col-1-3 tset">
						<a href="//tset.ok.gov/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tset-logo.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/tset-logo.png" alt="Tobacco Settlement Endowment Trust"/></a>
					</div>
					<div class="col-1-3 syf">
						<a href="https://shapeyourfutureok.com/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/syf-logo.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/syf-logo.png" alt="Shape Your Future"/></a>
					</div>
					<div class="col-1-1 tswm">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tswm-footer-logo.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/tswm-footer-logo.png" alt="Tobacco Stops With Me"/>
					</div>
				</div>
				<div class="copyright">
					<p>&copy; Tobacco Stops with Me, <?php echo date("Y"); ?> | <a href="/legal-disclaimer/">Legal Disclaimer</a></p>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- smooth scroll -->


		<!-- header background -->
		<script type="text/javascript">
		$(document).on('scroll', function() {
		    if($(this).scrollTop()>=$('#theTarget').position().top){
				$('.header').addClass('black');
				$('.header .new-nav .nav ul#header-menu li ul.sub-menu').addClass('black');
		    }
		    else{
			    $('.header').removeClass('black');
			    $('.header .new-nav .nav ul#header-menu li ul.sub-menu').removeClass('black');
		    }
		});
		$(document).ready(function() {
			 if($(this).scrollTop()>=$('#theTarget').position().top){
				$('.header').addClass('black');
				$('.header .new-nav .nav ul#header-menu li ul.sub-menu').addClass('black');
		    }
		    else{
			    $('.header').removeClass('black');
			    $('.header .new-nav .nav ul#header-menu li ul.sub-menu').removeClass('black');
		    }
		 });
		</script>

		<!--  search overlay -->
		<script>
			function openNav() {
			    document.getElementById("searchoverlay").style.height = "100%";
			}

			function closeNav() {
			    document.getElementById("searchoverlay").style.height = "0%";
			}
			$(document).ready(function(){
				$('.mobile-search').click(function(){
					$('.mobile-nav .search-mobile form.search').slideToggle();
					$('.mobile-nav .bottom-toolbar .icons a img').toggleClass('visible');

					return false;
				});
			 });
		</script>


		<!-- featherlight nav -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/featherlight.min.js"></script>


		<!-- mobile nav -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-custom.js"></script>

		<!--  Mobile Menu -->
		<script>
			$(document).ready(function(){

				// kids
				$('.choose-kids .child').click(function(){
					$('.results').toggleClass('open');
					$('.choose-kids').slideUp();
					$('.child.result').slideDown();
				});

				// preteen
				$('.choose-kids .preteen').click(function(){
					$('.results').toggleClass('open');
					$('.choose-kids').slideUp();
					$('.preteen.result').slideDown();
				});

				// teen
				$('.choose-kids .teen').click(function(){
					$('.results').toggleClass('open');
					$('.choose-kids').slideUp();
					$('.teen.result').slideDown();
				});

				// view all
				$('.viewallkids .viewallbutton').click(function(){
					$('.results').toggleClass('open');
					$('.results .result').slideUp();
					$('.choose-kids').slideDown();
				});


				$('.burger').click(function(){
					$('#nav-icon3').toggleClass('open');
					$('.mobile-nav .menu-complete').slideToggle();
					$('.mobile-nav').toggleClass('black');
					return false;
				});
				$('.parent-category').click(function(){
					//Hide parent menu
					$('.parent-category', this).addClass('children-open');
					$(this).siblings().hide( 1, function showNext() {
				    	$(".parent-category.open-parent").next( "div" ).show( 1 , showNext );
					});

					// show sub
					$(".sub-menu", this).addClass('open-sub');
					$(".sub-menu", this).show(1);
					$(this).addClass('open-parent');
					$(".backbtn").show();
				});
				$(".backbtn").click(function(){
					if ( $( '.parent-category' ).hasClass( 'open-parent' ) ) {
				       $('.parent-category').removeClass('open-parent');
				       $(".backbtn").hide();
				       $('.parent-category').removeClass('children-open');
				       $('.parent-category').show();
				       $('.homepagelink').show();
				    }
				    else{
					    // nothing
					    $('.parent-category').removeClass('children-open')
				    }
					if ( $( '.sub-menu' ).hasClass( 'open-sub' ) ) {
				       $('.sub-menu').removeClass('open-sub');
				       $('.sub-menu').hide();
				       $(".backbtn").hide();
				       $('.parent-category').removeClass('children-open');
				       $('.parent-category').show();
				       $('.homepagelink').show();
				    }
				    else{
					    // nothing
					    $('.parent-category').removeClass('children-open')
				    }
				    return false;
				});
				$(".burger").click(function(){
					if ( $( '.parent-category' ).hasClass( 'open-parent' ) ) {
				       $('.parent-category').removeClass('open-parent');
				       $(".backbtn").hide();
				       $('.parent-category').removeClass('children-open');
				       $('.parent-category').show();
				       $('.mobile-nav').toggleClass('black');
				    }
				    else{
					    // nothing
					    $('.parent-category').removeClass('children-open')
				    }
					if ( $( '.sub-menu' ).hasClass( 'open-sub' ) ) {
				       $('.sub-menu').removeClass('open-sub');
				       $('.sub-menu').hide();
				       $(".backbtn").hide();
				       $('.parent-category').removeClass('children-open');
				       $('.parent-category').show();
				    }
				    else{
					    // nothing
					    $('.parent-category').removeClass('children-open')
				    }
				    return false;
				});
			});
			$(document).mouseup(function(e){
			   var menu = $('.mobile-nav');
			   if (!menu.is(e.target) // The target of the click isn't the container.
			   && menu.has(e.target).length === 0) // Nor a child element of the container
			   {
					$('#nav-icon3').removeClass('open');
					$('.mobile-nav .menu-complete').slideUp();
					$('.mobile-nav').removeClass('black');

					if ( $( '.parent-category' ).hasClass( 'open-parent' ) ) {
					$('.parent-category').removeClass('open-parent');
					$(".backbtn").hide();
					$('.parent-category').removeClass('children-open');
					$('.parent-category').show();
					$('.mobile-nav').toggleClass('black');
					}
					else{
					// nothing
					$('.parent-category').removeClass('children-open')
					}
					if ( $( '.sub-menu' ).hasClass( 'open-sub' ) ) {
					$('.sub-menu').removeClass('open-sub');
					$('.sub-menu').hide();
					$(".backbtn").hide();
					$('.parent-category').removeClass('children-open');
					$('.parent-category').show();
					}
					else{
					// nothing
					$('.parent-category').removeClass('children-open')
					}
					return false;

			   }
			});
			$('.wrapper').mouseup(function(e){
			   var menu = $('.mobile-nav');
			   if (!menu.is(e.target) // The target of the click isn't the container.
			   && menu.has(e.target).length === 0) // Nor a child element of the container
			   {
					$('#nav-icon3').removeClass('open');
					$('.mobile-nav .menu-complete').slideUp();
					$('.mobile-nav').removeClass('black');

					if ( $( '.parent-category' ).hasClass( 'open-parent' ) ) {
					$('.parent-category').removeClass('open-parent');
					$(".backbtn").hide();
					$('.parent-category').removeClass('children-open');
					$('.parent-category').show();
					$('.mobile-nav').toggleClass('black');
					}
					else{
					// nothing
					$('.parent-category').removeClass('children-open')
					}
					if ( $( '.sub-menu' ).hasClass( 'open-sub' ) ) {
					$('.sub-menu').removeClass('open-sub');
					$('.sub-menu').hide();
					$(".backbtn").hide();
					$('.parent-category').removeClass('children-open');
					$('.parent-category').show();
					}
					else{
					// nothing
					$('.parent-category').removeClass('children-open')
					}
					return false;

			   }
			});
		</script>
		<script>
			function myScriptYes() {
			    console.log('clicked yes');
			    $('#fbuilder .pbreak .pbPrevious').addClass('show');
			    $('.pbreak .pbNext').addClass('show');
			    $('.pbSubmit').addClass('show');
			}
			function myScriptNo() {
			    console.log('clicked no');
			    $('#fbuilder .pbreak .pbPrevious').addClass('show');
			    $('.pbreak .pbNext').addClass('show');
			    $('.pbSubmit').addClass('show');
		    }
		</script>

		<script>
			function svgasimg() {
			  return document.implementation.hasFeature(
			    "//www.w3.org/TR/SVG11/feature#Image", "1.1");
			}

			if (!svgasimg()){
			  var e = document.getElementsByTagName("img");
			  if (!e.length){
			    e = document.getElementsByTagName("IMG");
			  }
			  for (var i=0, n=e.length; i<n; i++){
			    var img = e[i],
			        src = img.getAttribute("src");
			    if (src.match(/svgz?$/)) {
			      /* URL ends in svg or svgz */
			      img.setAttribute("src",
			             img.getAttribute("data-fallback"));
			    }
			  }
			}
		</script>

		<!-- codrops css3 animations -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/classie.js"></script>


	</body>
</html>

