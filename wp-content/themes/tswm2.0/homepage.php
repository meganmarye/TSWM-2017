<?php /* Template Name: Homepage Template */ get_header(); ?>
<script>
	$( document ).ready(function() {
	    if ( $( 'html' ).hasClass( 'no-touch' ) ) {
			if ($(window).width() < 768) {
			    $('.img-content').attr('src', 'https://stopswithme.com/wp-content/themes/tswm2.0/img/23432-OTSET-STSTrainExcerpt-Final.gif');
			    $('.img-content').removeClass('header-video__media');
			    $('.img-content').addClass('header-video_mobile');
		    }
			$(window).on('resize', function(){
			    var win = $(this); //this = window
			    if (win.width() <= 768) {
				    $('.img-content').attr('src', 'https://stopswithme.com/wp-content/themes/tswm2.0/img/23432-OTSET-STSTrainExcerpt-Final.gif');
				    $('.img-content').removeClass('header-video__media');
				    $('.img-content').addClass('header-video_mobile');
			    }
			});
	    }
	    else{
		    // nothing
	    }

	    if ( $( 'html' ).hasClass( 'touch' ) ) {
	       $('.img-content').attr('src', 'https://stopswithme.com/wp-content/themes/tswm2.0/img/23432-OTSET-STSTrainExcerpt-Final.gif');
	       $('.img-content').removeClass('header-video__media');
	       $('.img-content').addClass('header-video_mobile');
	    }
	    else{
		    // nothing
	    }
	});
</script>

<div class="header-video" style="width: 1920px; height: 706px; background-color: black;">

	<img src="<?php echo get_template_directory_uri(); ?>/img/masthead.jpg" class="header-video__media img-content" data-video-url="https://www.youtube.com/embed/76msPY-rEkc?rel=0" data-teaser="video/teaser-video" data-video-width="560" data-video-height="315" alt="Tobacco is Still A Problem in Oklahoma GIF">

	<div class="intro">
		<h1>FIGHT BACK AGAINST<br>BIG TOBACCO</h1>
		<p>A Program of TSET &nbsp; / &nbsp; <a href="/stop-the-start/">Take Action</a></p>
	</div>
	<video autoplay="true" loop="true" muted="" id="header-video__teaser-video" class="header-video__teaser-video" src="<?php echo get_template_directory_uri(); ?>/img/23432-OTSET-STSTrainExcerpt-Final.mp4" type="video/mp4"></video>

	<div class="scroll">
		<a href="#scrolllink">
			SCROLL DOWN
			<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-B.gif" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Down-Arrow.png" alt="Scroll Down Arrow"/>
		</a>
	</div>

</div>

<div id="theTarget"></div>
<div class="clearfix"></div>


<div class="main-container homepage" id="scrolllink"><!-- MAIN CONTAINER -->

	<div class="feature-container">
		<div class="feature1">
				<div class="image">
					<a href="/exposing-big-tobacco/big-tobacco-found-guilty/"><img src="<?php echo get_template_directory_uri(); ?>/img/Big_tobacco_guilty.jpg" alt="Big Tobacco Found Guilty" /></a>
<!-- 					<a href="https://player.vimeo.com/video/33110953" data-featherlight="iframe" data-featherlight-iframe-allowfullscreen="true" data-featherlight-iframe-width="500" data-featherlight-iframe-height="281"> -->
<!--
						<a href="#" data-featherlight="#coaster-lightbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/play.png" class="play-button" alt="Play button"/>
						</a>
-->

				</div>
				<div class="copy">
					<div class="block">
					    <div class="ghost-centered">
					        <h2>Big Tobacco Found Guilty</h2>
					        <p>Tobacco companies have been found guilty of breaking civil racketeering laws, marketing to kids and lying to the public about the dangers of smoking.</p>
					        <a href="/exposing-big-tobacco/big-tobacco-found-guilty/" class="cta">
						        <p>FIND OUT MORE</p>
						        <img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" alt="Right Arrow"/>
					        </a>
					    </div>
					</div>
				</div>
		</div>

		<div class="feature2">
				<div class="image">
					<a href="/stop-the-start/"><img src="<?php echo get_template_directory_uri(); ?>/img/home-grid-3.png" alt="Coaster Video" /></a>
				</div>
				<div class="copy">
					<div class="block">
					    <div class="ghost-centered">
					        <h2>Stop the Start</h2>
					        <p>In a kid’s world, peer pressure to use tobacco isn’t the only thing parents should be worried about. There’s a much more sinister and subtle influence at work — the tobacco industry itself. </p>
					        <a href="/stop-the-start/" class="cta">
						        <p>FIND OUT MORE</p>
						        <img src="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/Right-Arrow.png" alt="Right Arrow"/>
					        </a>
					    </div>
					</div>
				</div>
		</div>
	</div>
<!--
	<div id="coaster-lightbox">
		<div class="videoWrapper">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/76msPY-rEkc?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
-->
	<div class="infographics">
		<div class="maxwidth">
			<div class="grid">
				<div class="col-1-3">
					<img src="https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-1.png" alt="300,00 kids suffer respiratory infections from secondhand smoke each year."/>
					<div class="page-share-infographic">
						<span>SHARE</span>
						<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=https://stopswithme.com/infographics/30000-kids-suffer-respiratory-infections-secondhand-smoke-year/" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="https://twitter.com/intent/tweet?text=Together%20we%20can%20create%20a%20smokefree%20Oklahoma.%20Learn%20how%20with%20@StopsWithMe.%20pic.twitter.com/dorJrYlWon" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-1.png&description=Together we can create a smokefree Oklahoma. Find out more at https://stopswithme.com" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="mailto:?&subject=Together%20we%20can%20create%20a%20smokefree%20Oklahoma%20%7C%20Tobacco%20Stops%20With%20Me&body=300,00%20kids%20suffer respiratory%20infections%20from%20secondhand%20smoke%20each%20year.%20Find%20out%20more%20at%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</div>

				</div>
				<div class="col-1-3">
					<img src="https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-2.png" alt="216,000 kids in Oklahoma are exposed to secondhard smoke at home."/>
					<div class="page-share-infographic">
						<span>SHARE</span>
						<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=https://stopswithme.com/infographics/216000-kids-oklahoma-exposed-secondhard-smoke-home/" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="https://twitter.com/intent/tweet?text=Together%20we%20can%20create%20a%20smokefree%20Oklahoma.%20Learn%20how%20with%20@StopsWithMe.%20pic.twitter.com/lUbzXk4IgN" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-2.png&description=Together we can create a smokefree Oklahoma. Find out more at https://stopswithme.com" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="mailto:?&subject=Together%20we%20can%20create%20a%20smokefree%20Oklahoma%20%7C%20Tobacco%20Stops%20With%20Me&body=216,000%20kids%20in%20Oklahoma are%20exposed%20to%20secondhard%20smoke%20at%20home.%20Find%20out%20more%20at%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-1-3">
					<img src="https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-3.png" alt="Secondhand smoke causes 26,000 new cases of childhood asthma each year."/>
					<div class="page-share-infographic">
						<span>SHARE</span>
						<a href="https://www.facebook.com/dialog/share?app_id=1892042061079137&amp;display=popup&amp;href=https://stopswithme.com/infographics/secondhand-smoke-causes-26000-new-cases-childhood-asthma-year/" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
						<a href="https://twitter.com/intent/tweet?text=Together%20we%20can%20create%20a%20smokefree%20Oklahoma.%20Learn%20how%20with%20@StopsWithMe.%20pic.twitter.com/q9RYISGmk0" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=https://stopswithme.com/wp-content/uploads/2017/04/SAP-Nonsmokers-3.png&description=Together we can create a smokefree Oklahoma. Find out more at https://stopswithme.com" data-pin-do="buttonPin" data-pin-custom="true" target="_blank" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
						<a href="mailto:?&subject=Together%20we%20can%20create%20a%20smokefree%20Oklahoma%20%7C%20Tobacco%20Stops%20With%20Me&body=Secondhand%20smoke%20causes%2026,000%20new%20cases%20of%20childhood%20asthma%20each%20year.%20Find%20out%20more%20at%3A%20<?php the_permalink(); ?>" class="email"><i class="fa fa-envelope" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- END MAIN CONTAINER -->



<script src="<?php echo get_template_directory_uri(); ?>/js/fullscreenvideo.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>


<script type="text/javascript">

  $(document).ready(function() {
    $('.header-video').each(function(i, elem) {
        headerVideo = new HeaderVideo({
          element: elem,
          media: '.header-video__media',
          playTrigger: '.header-video__play-trigger',
          closeTrigger: '.header-video__close-trigger'
        });
    });
  });

</script>



<?php get_footer(); ?>
