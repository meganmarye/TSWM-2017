<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="fb:pages" content="1569098776665473" />

		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/default.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/component.css" />
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.js"></script>
		<script async defer src="//assets.pinterest.com/js/pinit.js"></script>

		<!-- googe web fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">

		<!-- featherlight -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/featherlight.min.css">

		<!-- jquery dropdown -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen, projection"/>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- font awesome -->
		<script src="https://use.fontawesome.com/4e5db2b2fc.js"></script>


		<!--[if lte IE 7]>
	        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" media="screen" />
	    <![endif]-->

		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tswm.css" />
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1892042061079137',
		      xfbml      : true,
		      version    : 'v2.5'
		    });
		  };
	
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<script type="text/javascript">
		    var img = new Image(); 
		    img.src = "https://stopswithme.com/wp-content/themes/tswm2.0/img/header-texture.png"; // background image
		</script>
		<!-- Google Tag Manager -->		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);		})(window,document,'script','dataLayer','GTM-NSSST2');</script>		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSST2"	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>	<!-- End Google Tag Manager (noscript) -->
	<img style="display: none;" src="<?php echo get_template_directory_uri(); ?>/img/header-texture.png" alt="header texture"/>
		<!-- mobile nav -->


		<div class="search-overlay">
			<div id="searchoverlay" class="overlay">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tswm-logo.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/tswm-logo.png'; this.onerror=null;" alt="Tobacco Stops With Me Logo" class="search-logo-img"/>
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			  <div class="overlay-content">
			    <?php get_search_form(); ?>
			  </div>
			</div>
		</div>


		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
			<div class="mobile-nav">
				<div class="logo mobilelogo">
					 <a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tswm-logo.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/tswm-logo.png'; this.onerror=null;" alt="Tobacco Stops With Me Logo" class="logo-img"/>
					</a>
				</div>
				<div class="top_bar">
					<a href="" class="back">
						<div class="backbtn" style="display: none;">
							<i class="fa fa-angle-left" aria-hidden="true"></i>
							BACK
						</div>
					</a>
					<a href="" class="burger">
						<p>MENU</p>
						<div id="nav-icon3">
						  <div class="burger-lines">
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
						  </div>
						</div>
					</a>
				</div>
				<div class="menu-complete" style="display: none;">
					<div class="border"></div>
					<div id="menu">
						<?php

						$defaults = array(
							'theme_location'  => 'mobile-menu',
							'menu'            => '',
							'container'       => 'div',
							'container_class' => 'nav',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => 'menu-main-menu-mobile',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
							'depth'           => 0,
							'walker'          => ''
						);

						wp_nav_menu( $defaults );

						?>
					</div>
					<div class="utility-menu">
							<?php

							$defaults = array(
								'theme_location'  => 'utility-menu',
								'menu'            => '',
								'container'       => 'ul',
								'container_class' => 'nav',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => 'utility-menu',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span id="underline">',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

							?>
					</div>
					<div class="bottom-toolbar">
						<div class="icons">
								<a href="#" class="mobile-search">
									<img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/search.png" alt="search icon" class="visible"/>
									<img src="<?php echo get_template_directory_uri(); ?>/img/closex.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/closex.png" alt="close icon"/>
								</a>
								<a href="/newsroom/" class="rss">
									<img src="<?php echo get_template_directory_uri(); ?>/img/rss.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/rss.png" alt="RSS icon"/>
								</a>
								<a href="/media_room/" class="media">
									<img src="<?php echo get_template_directory_uri(); ?>/img/media-room.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/media-room.png" alt="media room"/>
								</a>
								<a href="/resources-data/" class="resources">
									<img src="<?php echo get_template_directory_uri(); ?>/img/PDF.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/PDF.png" alt="resources and facts"/>
								</a>
								<a href="/about-us/" class="about">
									<img src="<?php echo get_template_directory_uri(); ?>/img/vcard.svg" data-fallback="<?php echo get_template_directory_uri(); ?>/img/vcard.png" alt="about us"/>
								</a>
								<a href="https://www.facebook.com/StopsWithMe" class="facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
								<a href="https://www.youtube.com/user/StopsWithMe" class="youtube" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
								<a href="https://twitter.com/StopsWithMe" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

						</div>
						<div class="search-mobile">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>

					<!-- logo -->

						<div class="logo">
							 <a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tswm-logo.svg" onerror="this.src='<?php echo get_template_directory_uri(); ?>/img/tswm-logo.png'; this.onerror=null;" alt="Tobacco Stops With Me Logo" class="logo-img"/>
							</a>
						</div>

					<!-- /logo -->


					<!-- nav-dropdown test -->
					<div class="container new-nav">
						<div class="utility-nav">
							<ul id="utility-menu" class="menu">
								
								<?php

								$defaults = array(
									'theme_location'  => 'utility-menu',
									'menu'            => '',
									'container'       => 'ul',
									'container_class' => 'nav',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => 'utility-menu',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '<span id="underline">',
									'link_after'      => '</span>',
									'items_wrap'      => '<div id="%1$s" class="%2$s">%3$s</div>',
									'depth'           => 0,
									'walker'          => ''
								);

								wp_nav_menu( $defaults );

								?>
								<li class="search menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a onclick="openNav()"><span id="underline"><i class="fa fa-search" aria-hidden="true"></i></span></a></li>
							</ul>
						</div>
						<div class="nav">
							<?php

							$defaults = array(
								'theme_location'  => 'header-menu',
								'menu'            => '',
								'container'       => 'ul',
								'container_class' => 'nav',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => 'header-menu',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '<span id="underline">',
								'link_after'      => '</span>',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );

							?>
						</div>
					</div>


			</header>
			<!-- /header -->