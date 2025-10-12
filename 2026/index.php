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
	<div id='loader-container' class='hidden'><div class='loader hidden'><img onload="startLoader()" src='<?php echo $baseurl; ?>img/just_logo_red.png' alt="loader"></div></div>

	<script> var current_navi_item="" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<section class='container hidden'>

            <div class='full-row top-bar'></div>
            <!--- HEADER -->
            <?php
              $is_frontpage = true;
              include "inc/header.inc.php";
            ?>

<?php /*

			<div id='buy-tickets-cta-mobile-only' class='full-row show-for-small-only translucent'>
				<?php echo "<a href='{$baseurl}tickets{$suffix}' class='red'>Get tickets! <span class='arrow right'></a></a>"; ?>
			</div>

			<div class='full-row clearfix divider show-for-small-only'>&nbsp;</div>
*/ ?>



			<div class='full-row clearfix divider'>&nbsp;</div>

			<?php /*
			<!-- KEYNOTES -->

			<div class='full-row clearfix lazyload translucent' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >

				<section class="grid-container cell grid-y cell location text-center" id='keynotes' >

					<div class="cell">
						<h1 class="red">Keynote speakers</h1>
						<!-- <h4 style='color:white;'>To be announced</h4> -->
					</div>

					<div class="cell grid-x grid-padding-x grid-margin-x">

						<!-- keynote 1 -->
						<div class='cell large-6 medium-text-left'>

							<div class='illustration illustration-keynote lazyload first ' title='' data-alignment="center" data-src='img/bios/bio_NAMUP9.jpg' style='background-image:url("");'></div>

							<h4 class='text-center red' >Sébastien Dudek</h4>
							<label >Founder of PentHertz Consulting</label>

							<p>
							Sébastien Dudek is the founder of PentHertz Consulting, a company that specializes in wireless and hardware security. He has a strong passion for identifying vulnerabilities in radio communication systems and has published research on various aspects of mobile security, including 5G security, Open RAN, baseband fuzzing, interception, mapping, and more. Additionally, he has conducted research on data transmission using power-line communication technologies, such as HomePlug AV, which includes domestic PLC plugs, as well as their applications in electric cars and charging stations. Sébastien also focuses on practical attacks involving various technologies like Wi-Fi, RFID, and other wireless communication systems.
							</p>
						</div>

						<!-- keynote 12 -->
						<div class='cell large-6 medium-text-left'>

							<div class='illustration  illustration-keynote lazyload' title='' data-alignment="center" data-src='img/bios/bio_UQDBED.jpg' style='background-image:url("");'></div>

							<h4 class='text-center'>Marina Krotofil</h4>
							<label>Dr.-Eng. Specializing in Cyber-Physical Security in ICS</label>
							<p>
							Dr.-Eng. Marina Krotofil is a cyber security professional with over 15 years of hands-on experience in cyber-physical security with a strong focus on critical infrastructure protection. She has managed and executed diverse technical projects worldwide across a variety of industrial and non-industrial domains. Marina is also an experienced Red/Blue Teamer who has discovered numerous novel attack vectors and exploitation techniques, designed innovative defense methods, and assisted with complex incident responses. She frequently collaborates with international organizations on technical threat intelligence topics, is a member of the Black Hat Review Board, and serves as an evaluator of EU-funded security project proposals.
							</p>

						</div>

					</div>
				</section>
			</div>
*/ ?>

<?php /*
			<!--- SPEAKERS -->
			<a name='speakers' id='speakers'></a>
			<div class='full-row clearfix divider'>&nbsp;</div>

			<?php include "inc/speakers.inc.php";	?>
*/ ?>

	<div class='full-row clearfix divider'>&nbsp;</div>

	<!--- Puzzle -->
	<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
		<section class="grid-container cell grid-y cell location" id='puzzle' >
			<div class="cell">
				<h1 class="red">Hacker Puzzle</h1>
			</div>
			<div class='cell'>
				<p><a href="HackerPuzzle">Is open</a></p>
			</div>
		</section>
	</div>

	<div class='full-row clearfix divider'>&nbsp;</div>

	<!--- CFP -->
	<div class='full-row clearfix lazyload'>
		<section class="grid-container cell grid-y cell location" id='cfp' >
			<div class="cell">
				<h1 class="red">Call for papers</h1>
			</div>
			<div class='cell'>
				<p>Disobey 2026 Call for papers has now closed. Thank you for your submissions - our program team is now going through them and will get back to you soon!</p>
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
					req.open('GET', 'video/etusivu_2025.mp4', true);


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

</body>
</html>
