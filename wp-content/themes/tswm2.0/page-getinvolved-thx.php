<?php /* Template Name: Get Involved Thank You Page */  get_header(); ?>

<?php
	$args = array(
		'post_type' => 'background_position',
	);

	$the_query = new WP_Query( $args );


	$post_thumbnail_id = get_post_thumbnail_id();
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>
<script>
	function getQueryVariable(variable)
	{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
	}
</script>
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
						<div class="normal-content">
							<!-- BODY CONTENT -->
							<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<!-- article -->
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


									<h2>Thanks for joining the fight!</h2>
									<p>Thanks for showing your support for stronger tobacco policies in Oklahoma.</p>
									<p>Want to take a more active role in your community? Contact your local TSET grantee, who is working in your area to improve health by reducing tobacco use.</p>


									<div class="grantee-container">
										<h3>According to your zip code of <script>document.write(getQueryVariable("zip"));</script>, your grantee agency is...</h3>
										<div class="grantee-list"><!--  GRANTEES BY ZIP -->
											<ul>
												<?php include('zipcodesagency.php')?>
												<li class="nomatch grantee">
													<h2>Not available.</h2>There are no Healthy Living Program Grants in your area at this time. Visit <a href="http://tset.ok.gov/">tset.ok.gov</a> to learn more.
												</li>
											</ul>
											<ul class="match">
												<li class="grantee-list-pdf"><a href="http://newtswm.wpengine.com/wp-content/uploads/2017/06/Grantee-List-by-County.pdf" target="_blank" rel="noopener noreferrer">TSET Healthy Living Grants by County</a>
												</li>
												<li class="grantee-list-pdf"><a href="http://newtswm.wpengine.com/wp-content/uploads/2017/06/Grantee-List-By-Agency.pdf" target="_blank" rel="noopener noreferrer">TSET Healthy Living Grants by Agency</a>
												</li>

											</ul>
										</div><!--  GRANTEES BY ZIP -->
									</div>
									<p>&nbsp;</p>
									<p><a href="/">Return to homepage.</a></p>

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

<script>

	$('.grantee-list').addClass('zip-' + getQueryVariable("zip"));

	var zipcodediv = function() {
	    $('.grantee-list').addClass('zip-' + getQueryVariable("zip"));
	}
	$('.grantee').hide();
	$('.zip-' + getQueryVariable("zip")).show();


	var myArray = [ "zip-74457", "zip-74931", "zip-74960", "zip-74964", "zip-74965", "zip-73716", "zip-73719", "zip-73722", "zip-73726", "zip-73728", "zip-73739", "zip-73741", "zip-73749", "zip-74525", "zip-74533", "zip-74540", "zip-74542", "zip-74555", "zip-74569", "zip-73844", "zip-73931", "zip-73932", "zip-73938", "zip-73950", "zip-73627", "zip-73644", "zip-73645", "zip-73648", "zip-73662", "zip-73668", "zip-73040", "zip-73043", "zip-73724", "zip-73744", "zip-73755", "zip-73763", "zip-73770", "zip-73772", "zip-73449", "zip-74701", "zip-74702", "zip-74720", "zip-74721", "zip-74723", "zip-74726", "zip-74729", "zip-74730", "zip-74731", "zip-74733", "zip-74741", "zip-74747", "zip-74753", "zip-73001", "zip-73005", "zip-73006", "zip-73009", "zip-73015", "zip-73017", "zip-73029", "zip-73033", "zip-73038", "zip-73042", "zip-73047", "zip-73048", "zip-73053", "zip-73094", "zip-73014", "zip-73022", "zip-73036", "zip-73064", "zip-73078", "zip-73085", "zip-73090", "zip-73099", "zip-73401", "zip-73402", "zip-73403", "zip-73435", "zip-73436", "zip-73437", "zip-73438", "zip-73443", "zip-73444", "zip-73458", "zip-73463", "zip-73481", "zip-73487", "zip-73488", "zip-74427", "zip-74441", "zip-74444", "zip-74451", "zip-74452", "zip-74464", "zip-74465", "zip-74471", "zip-74727", "zip-74735", "zip-74738", "zip-74743", "zip-74756", "zip-74759", "zip-74760", "zip-74761", "zip-73933", "zip-73937", "zip-73946", "zip-73947", "zip-73019", "zip-73026", "zip-73051", "zip-73068", "zip-73069", "zip-73070", "zip-73071", "zip-73072", "zip-73153", "zip-73160", "zip-73165", "zip-73170", "zip-73189", "zip-74857", "zip-74534", "zip-74535", "zip-74538", "zip-74556", "zip-74572", "zip-73501", "zip-73502", "zip-73503", "zip-73505", "zip-73506", "zip-73507", "zip-73527", "zip-73528", "zip-73538", "zip-73540", "zip-73541", "zip-73543", "zip-73552", "zip-73557", "zip-73558", "zip-73567", "zip-73531", "zip-73562", "zip-73568", "zip-73572", "zip-74301", "zip-74332", "zip-74369", "zip-74010", "zip-74028", "zip-74030", "zip-74039", "zip-74041", "zip-74044", "zip-74046", "zip-74047", "zip-74052", "zip-74066", "zip-74067", "zip-74068", "zip-74071", "zip-74131", "zip-73096", "zip-73601", "zip-73620", "zip-73625", "zip-73639", "zip-73669", "zip-74338", "zip-74342", "zip-74344", "zip-74345", "zip-74346", "zip-74347", "zip-74359", "zip-74368", "zip-73646", "zip-73654", "zip-73658", "zip-73659", "zip-73663", "zip-73667", "zip-73835", "zip-73859", "zip-73832", "zip-73840", "zip-73843", "zip-73858", "zip-73701", "zip-73702", "zip-73703", "zip-73705", "zip-73706", "zip-73720", "zip-73727", "zip-73730", "zip-73733", "zip-73735", "zip-73736", "zip-73738", "zip-73743", "zip-73753", "zip-73754", "zip-73773", "zip-74640", "zip-73052", "zip-73057", "zip-73074", "zip-73075", "zip-73098", "zip-73433", "zip-74872", "zip-73002", "zip-73004", "zip-73011", "zip-73018", "zip-73023", "zip-73059", "zip-73067", "zip-73079", "zip-73082", "zip-73089", "zip-73092", "zip-73758", "zip-73759", "zip-73761", "zip-73766", "zip-73771", "zip-74636", "zip-74643", "zip-73547", "zip-73554", "zip-73673", "zip-73544", "zip-73550", "zip-73571", "zip-73834", "zip-73848", "zip-73851", "zip-73855", "zip-74440", "zip-74462", "zip-74472", "zip-74552", "zip-74941", "zip-74943", "zip-74944", "zip-74531", "zip-74570", "zip-74827", "zip-74839", "zip-74848", "zip-74850", "zip-74883", "zip-73521", "zip-73522", "zip-73523", "zip-73526", "zip-73532", "zip-73537", "zip-73539", "zip-73549", "zip-73556", "zip-73560", "zip-73456", "zip-73520", "zip-73548", "zip-73561", "zip-73565", "zip-73569", "zip-73573", "zip-73432", "zip-73447", "zip-73450", "zip-73455", "zip-73460", "zip-73461", "zip-74530", "zip-74748", "zip-74836", "zip-74856", "zip-74601", "zip-74602", "zip-74604", "zip-74631", "zip-74632", "zip-74641", "zip-74646", "zip-74647", "zip-74653", "zip-73016", "zip-73734", "zip-73742", "zip-73750", "zip-73756", "zip-73762", "zip-73764", "zip-73041", "zip-73062", "zip-73559", "zip-73564", "zip-73566", "zip-73651", "zip-73655", "zip-74545", "zip-74559", "zip-74563", "zip-74571", "zip-74578", "zip-74549", "zip-74577", "zip-74901", "zip-74902", "zip-74930", "zip-74932", "zip-74935", "zip-74937", "zip-74939", "zip-74940", "zip-74942", "zip-74947", "zip-74949", "zip-74951", "zip-74953", "zip-74956", "zip-74959", "zip-74966", "zip-74026", "zip-74079", "zip-74824", "zip-74832", "zip-74834", "zip-74855", "zip-74864", "zip-74869", "zip-74875", "zip-74881", "zip-73027", "zip-73028", "zip-73044", "zip-73050", "zip-73056", "zip-73058", "zip-73063", "zip-73073", "zip-73430", "zip-73441", "zip-73448", "zip-73453", "zip-73459", "zip-73718", "zip-73729", "zip-73737", "zip-73747", "zip-73760", "zip-73768", "zip-73838", "zip-73439", "zip-73440", "zip-73446", "zip-74330", "zip-74337", "zip-74340", "zip-74349", "zip-74350", "zip-74352", "zip-74361", "zip-74362", "zip-74364", "zip-74365", "zip-74366", "zip-74367", "zip-73010", "zip-73031", "zip-73065", "zip-73080", "zip-73093", "zip-73095", "zip-74831", "zip-74722", "zip-74724", "zip-74728", "zip-74734", "zip-74736", "zip-74737", "zip-74740", "zip-74745", "zip-74750", "zip-74752", "zip-74754", "zip-74755", "zip-74764", "zip-74766", "zip-7495 ", "zip-74963", "zip-74426", "zip-74432", "zip-74438", "zip-74459", "zip-74461", "zip-74845", "zip-73030", "zip-73032", "zip-73039", "zip-73086", "zip-74401", "zip-74402", "zip-74403", "zip-74422", "zip-74423", "zip-74428", "zip-74434", "zip-74436", "zip-74439", "zip-74450", "zip-74455", "zip-74463", "zip-74468", "zip-74469", "zip-74470", "zip-73061", "zip-73077", "zip-73757", "zip-74630", "zip-74644", "zip-74651", "zip-74027", "zip-74042", "zip-74048", "zip-74072", "zip-74083", "zip-74829", "zip-74833", "zip-74859", "zip-74860", "zip-74880", "zip-73003", "zip-73007", "zip-73008", "zip-73013", "zip-73020", "zip-73034", "zip-73045", "zip-73049", "zip-73054", "zip-73066", "zip-73083", "zip-73084", "zip-73097", "zip-73101", "zip-73102", "zip-73103", "zip-73104", "zip-73105", "zip-73106", "zip-73107", "zip-73108", "zip-73109", "zip-73110", "zip-73111", "zip-73112", "zip-73113", "zip-73114", "zip-73115", "zip-73116", "zip-73117", "zip-73118", "zip-73119", "zip-73120", "zip-73121", "zip-73122", "zip-73123", "zip-73124", "zip-73125", "zip-73126", "zip-73127", "zip-73128", "zip-73129", "zip-73130", "zip-73131", "zip-73132", "zip-73134", "zip-73135", "zip-73136", "zip-73137", "zip-73139", "zip-73140", "zip-73141", "zip-73142", "zip-73143", "zip-73144", "zip-73145", "zip-73146", "zip-73147", "zip-73148", "zip-73149", "zip-73150", "zip-73151", "zip-73152", "zip-73154", "zip-73155", "zip-73156", "zip-73157", "zip-73159", "zip-73162", "zip-73163", "zip-73164", "zip-73167", "zip-73169", "zip-73172", "zip-73173", "zip-73178", "zip-73179", "zip-73184", "zip-73185", "zip-73190", "zip-73193", "zip-73194", "zip-73195", "zip-73196", "zip-73197", "zip-73198", "zip-73199", "zip-74421", "zip-74431", "zip-74437", "zip-74445", "zip-74447", "zip-74456", "zip-74460", "zip-74001", "zip-74002", "zip-74035", "zip-74054", "zip-74056", "zip-74060", "zip-74084", "zip-74633", "zip-74637", "zip-74652", "zip-74331", "zip-74333", "zip-74335", "zip-74339", "zip-74343", "zip-74354", "zip-74355", "zip-74358", "zip-74360", "zip-74363", "zip-74370", "zip-74020", "zip-74034", "zip-74038", "zip-74045", "zip-74058", "zip-74081", "zip-74650", "zip-74023", "zip-74032", "zip-74059", "zip-74062", "zip-74074", "zip-74075", "zip-74076", "zip-74077", "zip-74078", "zip-74085", "zip-74425", "zip-74430", "zip-74442", "zip-74501", "zip-74502", "zip-74522", "zip-74528", "zip-74529", "zip-74546", "zip-74547", "zip-74553", "zip-74554", "zip-74560", "zip-74561", "zip-74565", "zip-74576", "zip-74820", "zip-74821", "zip-74825", "zip-74842", "zip-74843", "zip-74844", "zip-74865", "zip-74871", "zip-74801", "zip-74802", "zip-74804", "zip-74826", "zip-74840", "zip-74851", "zip-74852", "zip-74854", "zip-74866", "zip-74873", "zip-74878", "zip-74521", "zip-74523", "zip-74536", "zip-74543", "zip-74557", "zip-74558", "zip-74562", "zip-74567", "zip-74574", "zip-73628", "zip-73638", "zip-73642", "zip-73650", "zip-73660", "zip-73666", "zip-74015", "zip-74016", "zip-74017", "zip-74018", "zip-74019", "zip-74031", "zip-74036", "zip-74053", "zip-74080", "zip-74818", "zip-74830", "zip-74837", "zip-74849", "zip-74867", "zip-74868", "zip-74884", "zip-74435", "zip-74936", "zip-74945", "zip-74946", "zip-74948", "zip-74954", "zip-74955", "zip-74962", "zip-73055", "zip-73425", "zip-73434", "zip-73442", "zip-73491", "zip-73529", "zip-73533", "zip-73534", "zip-73536", "zip-73901", "zip-73939", "zip-73942", "zip-73944", "zip-73945", "zip-73949", "zip-73951", "zip-73530", "zip-73542", "zip-73546", "zip-73551", "zip-73553", "zip-73555", "zip-73570", "zip-74008", "zip-74011", "zip-74012", "zip-74013", "zip-74021", "zip-74033", "zip-74037", "zip-74043", "zip-74050", "zip-74055", "zip-74063", "zip-74070", "zip-74073", "zip-74101", "zip-74102", "zip-74103", "zip-74104", "zip-74105", "zip-74106", "zip-74107", "zip-74108", "zip-74110", "zip-74112", "zip-74114", "zip-74115", "zip-74116", "zip-74117", "zip-74119", "zip-74120", "zip-74121", "zip-74126", "zip-74127", "zip-74128", "zip-74129", "zip-74130", "zip-74132", "zip-74133", "zip-74134", "zip-74135", "zip-74136", "zip-74137", "zip-74141", "zip-74145", "zip-74146", "zip-74147", "zip-74148", "zip-74149", "zip-74150", "zip-74152", "zip-74153", "zip-74155", "zip-74156", "zip-74157", "zip-74158", "zip-74159", "zip-74169", "zip-74170", "zip-74171", "zip-74172", "zip-74182", "zip-74183", "zip-74184", "zip-74186", "zip-74187", "zip-74189", "zip-74192", "zip-74193", "zip-74194", "zip-74014", "zip-74429", "zip-74446", "zip-74454", "zip-74458", "zip-74467", "zip-74477", "zip-74003", "zip-74004", "zip-74005", "zip-74006", "zip-74022", "zip-74029", "zip-74051", "zip-74061", "zip-74082", "zip-73021", "zip-73024", "zip-73622", "zip-73624", "zip-73626", "zip-73632", "zip-73641", "zip-73647", "zip-73661", "zip-73664", "zip-73717", "zip-73731", "zip-73746", "zip-73842", "zip-73860", "zip-73801", "zip-73802", "zip-73841", "zip-73852", "zip-73853", "zip-73857" ];

		'.zip-' + getQueryVariable("zip")

        var zipcodeclass = 'zip-' + getQueryVariable("zip");


        if (jQuery.inArray(zipcodeclass, myArray)!='-1') {
            console.log(zipcodeclass + ' is in the array!');
        } else {
            console.log(zipcodeclass + ' is NOT in the array...');
            $('.nomatch.grantee').show();
        }






</script>

<?php get_footer(); ?>
