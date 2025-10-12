<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php include "inc/head.inc.php"; ?>

<body class='text-center hide-background'  >
	<div id='video-container'>
		<video id='videoplayer' autoplay loop muted>
	  	<source src="" type="video/mp4">
		</video>
	</div>
	<div id='loader-container' class='hidden'><div class='loader hidden'><img onload="startLoader()" src='img/just_logo.png' alt="loader"></div></div>

	<?php include "inc/navigation.inc.php"; ?>
	<section class='container hidden'>

                <!--- status update -->
                <div class='full-row clearfix lazyload'>
                        <section class="grid-container cell grid-y cell location" id='announcement' >
                        <div class="cell">
                        <h1>DISOBEY 2022 CANCELLED</h1>
                        </div>
                        <div class='cell'>
                            <p>
                                Given the concerns around the rapidly spreading omicron and severely deteriorating COVID-19 situation and the fact that significant part of the visitors would not yet have the 3rd vaccination, it is with deep disappointment, sadness and heavy hearts that we announce the cancellation of Disobey 2022.
                            </p>
                            <p>
                                We aim to give it another go in 2023.
                            </p>
                        </div>
                        </section>
                </div>

		<div class='full-row clearfix divider'>&nbsp;</div>

		<!--- Puzzle -->
		<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
			<section class="grid-container cell grid-y cell location" id='puzzle' >
		        <div class="cell">
	                <h1>Disobey puzzle</h1>
		        </div>
		        <div class='cell'>
					<p>Disobey 2021 Hacker Challenge is produced in cooperation with Kouvosto Telecom. It seems that they've made some OPSEC fails down the road.. can you find what those fails are? &#x1F609;</p>
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
			 $(window).on('load', function(){
					var video = document.getElementById("videoplayer");

					var req = new XMLHttpRequest();
					req.responseType = 'blob';
					req.open('GET', 'video/tausta_2021_v4.mp4', true);


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

</body>
</html>
