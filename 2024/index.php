<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php include "inc/head.inc.php"; ?>

<body id='frontpage' class='text-center hide-background frontpage'  > 
	<div id='video-container'>
		<video id='videoplayer' autoplay loop muted>
	  	<source src="" type="video/mp4">
		</video>
	</div>
	<div id='loader-container' class='hidden'><div class='loader hidden'><img onload="startLoader()" src='img/just_logo_red.png' alt="loader"></div></div>

	<script> var current_navi_item="" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<section class='container hidden'>

            <div class='full-row top-bar'></div>
            <!--- HEADER -->
            <?php
              $is_frontpage = true;
              include "inc/header.inc.php";
            ?>

			<div id='buy-tickets-cta-mobile-only' class='full-row show-for-small-only translucent'>
				<?php echo "<a href='{$baseurl}tickets{$suffix}' class='red'>Get tickets! <span class='arrow right'></a></a>"; ?>
			</div>

			<div class='full-row clearfix divider show-for-small-only'>&nbsp;</div>

			<!--- CFP -->
<?php /*
			<div class='full-row clearfix lazyload'>
				<section class="grid-container cell grid-y cell location" id='cfp' >
					<div class="cell">
						<h1 class="red">Call for papers</h1>
					</div>
					<div class='cell'>
						<p>Disobey 2024 Call for papers is now open! <a href="https://cfp.disobey.fi/disobey2024/">Submit your talk or workshop proposal here.</a></p>
					</div>
				</section>
			</div>
*/ ?>
			<div class='full-row clearfix divider'>&nbsp;</div>
		
			<!-- KEYNOTES -->

			<div class='full-row clearfix lazyload translucent' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >

				<section class="grid-container cell grid-y cell location text-center" id='keynotes' >

					<div class="cell">
						<h1 class="red">Keynote speakers</h1>
					</div>

					<div class="cell grid-x grid-padding-x grid-margin-x">

						<!-- keynote 1 -->
						<div class='cell large-6 medium-text-left'>

							<div class='illustration illustration-keynote lazyload first red' title='Nina Nissilä' data-alignment="center" data-src='img/nina_nissila_disobey_2024_keynote.jpg' style='background-image:url("");'></div>

							<h4 class='text-center red' >Nina Nissilä</h4>
							<label class="red">Deputy Director General in Kela</label>

							<p>
								Nina Nissilä works as a Deputy Director General in Kela, the Social Insurance Institution of Finland. She is in charge of IT and Shared Services. Customer centric digitalization, cyber security, innovation, and business development are close to Nissilä’s heart. Between 2020 and 2023, Nissilä has been a member of the Finnish Government’s high level Technology Advisory Board. Starting from summer 2023, she has been a member of European Social Insurance Platform’s Board of Governors. In her previous job positions, she has established a service design oriented digital team D9 for the Finnish Government and worked as a business lead in CGI and Tieto among others. Nissilä is CIO and Digital Leader of the year 2023 by Tivi IT Magazine.							
							</p>

							<p>
								In her keynote, Nina Nissilä opens up Kela’s critical role in Finnish society and what cyber and data security means in business where there is a high need to secure the most sensitive data for people living in Finland.
							</p>
						</div>

						<!-- keynote 12 -->
						<div class='cell large-6 medium-text-left'>

							<div class='illustration  illustration-keynote lazyload red' title='Jason Lang' data-alignment="center" data-src='img/jason_lang_disobey_2024_keynote.jpg' style='background-image:url("");'></div>

							<h4 class='text-center red'>Jason Lang</h4>
							<label class="red">Practice Lead of the Targeted Operations group at TrustedSec</label>

							<p>
								Jason Lang is the Practice Lead of the Targeted Operations group at TrustedSec, an industry leader in offensive security services. The Targeted Operations group consists of some of the industry’s finest red team operators and researchers and is responsible for performing red team assessments for some of the world’s largest organizations across industry verticals. When not red teaming, Jason can be found in his woodland hermit castle pushing a jack plane, drinking coffee, or doing country chores.
							</p>

							<p>
								In his keynote, Jason digs into the technical details of how these attacks continue to be pulled off. Tactics and tradecraft tips will be shared, along with practical recommendations for both offensive and defensive teams. 
							</p>

						</div>

					</div>
				</section>
			</div>


			 
			<!--- SPEAKERS -->
			<a name='speakers' id='speakers'></a>
			<div class='full-row clearfix divider'>&nbsp;</div>

			<?php include "inc/speakers.inc.php";	?>


			<div class='full-row clearfix divider'>&nbsp;</div>
			

		<!--- Puzzle -->
					<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
						<section class="grid-container cell grid-y cell location" id='puzzle' >
					        <div class="cell">
				                <h1 class="red">Puzzled?</h1>
					        </div>
					        <div class='cell'>
								<p>What’s going on in Kouvostoliitto? A hacker group AHVEN has declared an operation to overthrow the leadership of Kouvostoliitto.</p>
								<p>Disobey Hacker Puzzle is <a href="https://kouvostopankki.fi">live</a></p>
								<p class='video-container'>
									<video id='ahven-video' controls>
										<source src="video/ahven.mp4" type="video/mp4">
										Your browser does not support the video tag.
									</video>
								</p>
								<p class='narrower'>
									<small>
										The hacker puzzle does not require bruteforcing any web portals. You can find out all the credentials by solving the challenges.
										Outside of content discovery, if your brute forcing would be > 1024 tries, it's not the intended solution.
										Save the (virtual)environment and don't melt the icebergs.
									</small>
								</p>
					        </div>
						</section>
					</div>


		<div class='full-row clearfix divider'>&nbsp;</div>

		<?php include "inc/contact.inc.php";	?>

	</section>

	<script>
			/*-------------------------
			 Start loading video background
			 -----------------------*/
			 $(window).on('load', 
			 	function(){
					
					var video = document.getElementById("videoplayer");
					var req = new XMLHttpRequest();
					req.responseType = 'blob';
					req.open('GET', 'video/etusivu_2024.mp4', true);


					req.onload = function() {
					 // Onload is triggered even on 404
					 // so we need to check the status code
					 if (this.status === 200) {
							var videoBlob = this.response;
							var vid = URL.createObjectURL(videoBlob); // IE10+
							// Video is now downloaded
							// and we can set it as source on the video element
							video.src = vid;
							console.log("200")
					 }
					}
					req.onerror = function() {
					 // Error
					}

					req.send();
				})
	</script>

	<?php include "inc/footer.inc.php"; ?>

	<link rel="prefetch" href="img/glitch_logo/logo_glitch_1.webp" />
	<link rel="prefetch" href="img/glitch_logo/logo_glitch_2.webp" />
	<link rel="prefetch" href="img/glitch_logo/logo_glitch_3.webp" />

	<link rel="prefetch" href="img/glitch_logo/logo_mobile_dbh_glitch_1.webp" />
	<link rel="prefetch" href="img/glitch_logo/logo_mobile_dbh_glitch_2.webp" />
	<link rel="prefetch" href="img/glitch_logo/logo_mobile_dbh_glitch_3.webp" />

</body>
</html>
