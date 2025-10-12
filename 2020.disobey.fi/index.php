<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php include "inc/head.inc.php"; ?>

<body class='text-center hide-background'  >

	<div id='loader-container' class='hidden'><div class='loader hidden'><img onload="startLoader()" src='img/just_logo.png' alt="loader"></div></div>

	<script> var current_navi_item="" </script>
	<?php include "inc/navigation.inc.php"; ?>

	<section class='container hidden'>
		<div class='full-row top-bar'></div>
			<!--- HEADER + DATE -->
			<?php
				$is_frontpage = true;
				include "inc/header.inc.php";
			?>

			<!-- INFO -->
			<div class='full-row tag-line clearfix translucent'>
				<section class="grid-container cell program">
					<h4>Disobey fills Helsinki Cable Factory again with security professionals, hackers, makers and other like minded people. Join us in February 2020!   </h4>
				</section>
			</div>

			<div class='full-row clearfix divider'>&nbsp;</div>

			<!-- INFO -->
			<div class='full-row info clearfix translucent'>

				<section class="grid-container cell program">

					<!--
					ANNOUNCEMENTS:
					COPY MORE BLOCK IF NEEDED - REMOVE comment tags for first
					-->

					<!--
					<section class='annoucements group'>
						<i class="fas fa-bullhorn"></i>Call for arts with Disobey & 2NS. Theme is "tribute to hackers and hacker culture". Winner gets a ticket to Disobey 2020. Submissions in TIF, JPG or EPS formats to <a href="mailto:submissions@disobey.fi">submissions@disobey.fi</a> at latest on 19.1.2020.
					</section>
					-->

					<!-- <section class='annoucements group'>
						<i class="fas fa-bullhorn"></i> Badges sold out. A very limited amount of Tickets will be available at the door.
					</section> -->

					<!-- Announcements end -->

					<script>	$(".annoucements:last").addClass("last") </script>





					<!-- <h1>Program</h1> -->
					<div id='program'>
							<div class='grid-x grid-padding-x event-items'>
								<div class='cell medium-4'>
										<h4 class='larger'>Main event</h4>
										<p> Will be filled with talks from leading security professionals, hackers and other interesting people.</p>
								</div>
								<div class='cell medium-4'>
										<h4 class='larger'>Workshops</h4>
										<p>Will cover practical cyber security, vulnerabilities, exploits and system fortification.</p>
								</div>
								<div class='cell medium-4'>
										<h4 class='larger'>Parties!</h4>
										<p>Of course, we will have Disobey parties for You. Perhaps even other casual, off-program activity.</p>
								</div>
							</div>
							<br>
							<div class='grid-x grid-padding-x illustrations'>
									<div class='cell medium-4'>
											<div class='illustration lazyload' title='Ⓒ Mikael Peltomaa' data-tooltip data-position="bottom" data-alignment="center" data-src='img/kuvitus_1.jpg' style='background-image:url("");'></div>
									</div>
									<div class='cell medium-4'>
										<div class='illustration lazyload' title='Ⓒ Mikael Peltomaa'   data-tooltip data-position="bottom" data-alignment="center" data-src='img/kuvitus_2.jpg' style='background-image:url("");'></div>
									</div>
									<div class='cell medium-4'>
										<div class='illustration lazyload' title='Ⓒ Mikael Peltomaa'  data-tooltip data-position="bottom" data-alignment="center" data-src='img/kuvitus_3.jpg' style='background-image:url("");'></div>
									</div>
							</div>
					</div>
				</section>

		</div>

		<!--- SPEAKERS -->
 	 <div class='full-row clearfix lazyload translucent' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
 	 		<section class="grid-container cell grid-y cell location text-center" id='keynotes' >
 				<div class="cell">
 					<h1>Keynote speakers</h1>
 				</div>
 				<div class="cell grid-x grid-padding-x grid-margin-x">

 					<div class='cell large-6 medium-text-left'>
						<div class='illustration illustration-keynote lazyload' title='John Doe' data-alignment="center" data-src='img/bios/mikko_hypponen.jpg' style='background-image:url("");'></div>
 						<h4 class='text-center'>Mikko Hyppönen</h4>

 						<p>Mikko Hyppönen has the third most viewed pastebin in history. His AMA made the front page of reddit. Mikko works as a data hostage negotiator. He spoke at the legendary Rubicon conference in Detroit before it was shut down. He has also had a keynote at both DEF CON and Black Hat Asia. He used to hold the US patent 6,577,920 but doesn’t anymore. Hyppönen is a certified bodyguard and an expert in hand-to-hand combat. He's also the current world champion in Xevious. He runs a podcast called “Herrasmieshakkerit” together with Tomi Tuominen, in Finnish because perkele.</p>

 					</div>


 					<div class='cell large-6 medium-text-left'>
						<div class='illustration  illustration-keynote lazyload' title='John Doe' data-alignment="center" data-src='img/bios/jason_e_street.jpg' style='background-image:url("");'></div>
 						<h4 class='text-center'>Jayson E. Street</h4>

 						<p>Jayson E. Street is an author of the "Dissecting the hack: Series". He’s also the DEF CON Groups Global Ambassador and the VP of InfoSec for SphereNY. Jayson has spoken at DEF CON, DerbyCon, GRRCon and at several other ‘CONs and colleges on a variety of Information Security related subjects.
Jayson is a highly carbonated speaker who has partaken of Pizza from Beijing to Brazil. Jayson does not expect anybody to still be reading this far but if they are please note he was chosen as one of Time's persons of the year for 2006.</p>

 					</div>


 					<script>
 							$(".open-button").on("click", function(){
 								var target = $(this).data("target")
 								$(this).hide()
 								$("#"+target).toggle();
 							})
 					</script>

 				</div>
 			</section>
 	</div>
		<!--- SPEAKERS  -->
		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/speakers.inc.php";	?>


		<div class='full-row clearfix divider'>&nbsp;</div>


	<!-- SPEAKERS -->

	<div class='full-row clearfix divider'>&nbsp;</div>

		<!--- CFP -->
		<!--
		<div class='full-row clearfix lazyload extra-padding'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
				<section class="grid-container cell grid-y cell location" id='cfp' >
							<div class="cell">
								<h1>Call for Programme</h1>
							</div>
							<div class='cell'>
										<p>Disobey is calling all able minds to share knowledge and inspire others to action. <a href='https://docs.google.com/forms/d/1sEYcRjrZK0LeYNasYldTUAnA6DhBdgA5xH64m10GHPY/viewform?edit_requested=true' target="_blank">Call for Programme is now open</a> for the event.</p>
							</div>
				</section>
		</div>
		<div class='full-row clearfix divider'>&nbsp;</div>
		-->

		<!--- Puzzle -->
		<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
					<section class="grid-container cell grid-y cell location" id='puzzle' >
								<div class="cell">
									<h1>Disobey puzzle</h1>
								</div>
								<div class='cell'>
											<p>Solve the <a href='https://disobey2020.github.io/' target="_blank">Disobey puzzle</a> and you may get access to a special discounted hacker ticket.</p>
								</div>
					</section>
			</div>




			<!--- LOCATIION AND VENUE -->
			<div class='full-row clearfix divider'>&nbsp;</div>
			<?php include "inc/location.inc.php";	?>
			<div class='full-row clearfix divider'>&nbsp;</div>
			<?php include "inc/contact.inc.php";	?>

	</section>

	<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
	<script src="js/disobey_logo.js"></script>
	<script>
	var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
	function initAnimation() {
		canvas = document.getElementById("canvas");
		anim_container = document.getElementById("animation_container");
		dom_overlay_container = document.getElementById("dom_overlay_container");
		var comp=AdobeAn.getComposition("3D9D021F9473CB4593AFA463F0E4DADF");
		var lib=comp.getLibrary();
		var loader = new createjs.LoadQueue(false);
		loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
		loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
		var lib=comp.getLibrary();
		loader.loadManifest(lib.properties.manifest);
	}
	function handleFileLoad(evt, comp) {
		var images=comp.getImages();
		if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
	}
	function handleComplete(evt,comp) {
		//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
		var lib=comp.getLibrary();
		var ss=comp.getSpriteSheet();
		var queue = evt.target;
		var ssMetadata = lib.ssMetadata;
		for(i=0; i<ssMetadata.length; i++) {
			ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
		}
		exportRoot = new lib.disobey_logo();
		stage = new lib.Stage(canvas);
		//Registers the "tick" event listener.
		fnStartAnimation = function() {
			stage.addChild(exportRoot);
			createjs.Ticker.setFPS(lib.properties.fps);
			createjs.Ticker.addEventListener("tick", stage);
		}
		//Code to support hidpi screens and responsive scaling.
		AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);
		AdobeAn.compositionLoaded(lib.properties.id);
		fnStartAnimation();
	}
	</script>



</body>
</html>
