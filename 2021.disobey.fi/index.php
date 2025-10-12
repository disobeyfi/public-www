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
	                <h1>DISOBEY POSTPONED TO 2022</h1>
		        </div>
		        <div class='cell'>
					<p>
					Given the concerns around COVID-19, it is with deep sadness and heavy hearts that we announce the postponing of Disobey to Feb 18th&ndash;19th, 2022.
					</p>
					<p>
					We know that this will come as an enormous disappointment, not only to the community, but also for those who didn't get the chance to participate in the previous 2020 event held in February.
					</p>
					<p>
					This was a tough call to make, a decision we have not taken lightly. As much as we would have loved to make things happen, our primary concern is always the responsibility we feel towards our dear attendees and everyone involved in making the event happen.
					</p>
					<p>
					Let's keep the community alive by supporting each other, sharing the knowledge and all the great things we come across in these peculiar times.
					</p>
					<p>
					Last but not least; take care of yourselves and stay safe. &lt;3
					</p>
					<p>
					<b>The Disobey Crew</b>
					</p>
					<p>
					Ps. Hopefully our FAQ will help you answer all the questions you might have left. If not, please contact us at contact@disobey.fi
					</p>
		        </div>
			</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>

		<!--- postponing faq -->
		<div class='full-row clearfix lazyload'>
			<section class="grid-container cell grid-y cell location" id='announcement' >
		        <div class="cell">
	                <h1>FAQ</h1>
		        </div>
		        <div class='cell'>
					<p>
					Disobey 2021 is postponed to 2022. What now?
					</p>
					<p>
					<b>Q: Well this sucks. Why did you decide to cancel the event?</b><br/>
					A: The national and regional COVID-19 restrictions have been tightened and we do not see it as realistic to keep the event in February 2021. Most importantly, the only thing that could have saved the event would have been a mass distribution of the vaccine. However, that will likely take at least 2-3 months in Finland, and we can’t expect every visitor to have the vaccine by the possible dates of the event.
					</p>
					<p>
					<b>Q: Couldn’t you have just postponed to Summer or Fall of 2021?</b><br/>
					A: Our Venue, the Cable Factory graciously provided us with an alternative date that we might have postponed to. However, that date was not that much further in the future, and thus would not have realistically affected the likelihood of us organizing a full-scale event. Meaning that we would’ve probably still had to limit maximum participants so that too many visitors would’ve been left without a ticket. On the other hand, postponing to Summer or Fall would’ve put us in conflict with many other events also waiting for their turn.  In the end, the choice was between doing something properly or not at all. This time, it meant not at all.
					</p>
					<p>
					<b>Q: I’ve hacked my ass off and won the Hacker Badge ticket for the 2021 event. Is it still valid for the 2022 event?</b><br/>
					A:Yes. The same ticket is valid for Disobey 2022. We’ll keep the puzzle open for now, so others can still try harder. If you want a reimbursement of your payment instead, don’t hesitate to contact us at the e-mail specified below.
					</p>
					<p>
					<b>Q: Are there any plans to have a similar kind of event in 2021 to replace the postponed event?</b><br/>
					A: At this point, no. We’ve had some discussions about it, but not anything concrete. COVID-19 restrictions play a crucial role in all of the planning and we’d like to stick with having the event held at the Cable Factory. Please note that this explicitly means that we didn’t want to organize yet another online event.
					</p>
					<p>
					<b>Q: Will the CfP be closed though you’re only postponing the 2021 event to 2022?</b><br/>
					A: At this point, yes. We will open the CfP again later on when we activate ourselves again towards the end of 2021.
					</p>
					<p>
					<b>Q: Can I still get Disobey merch somewhere?</b><br/>
					A: At the moment we don’t have plans for mail orders. We might do a couple of targeted sales at the CitySec events, but no promises yet.
					</p>
					<p>
					<b>Q: Is the venue still the same?</b><br/>
					A: Yes, we’re still aiming for the Cable Factory in 2022.
					</p>
					<p>
					<b>Q: A question I had in mind was not listed on this FAQ. Please advise?</b><br/>
					A: Please contact us via email contact@disobey.fi and we’ll do our best to answer your questions.
					</p>
		        </div>
			</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>

		<div class='full-row top-bar'></div>
			<!--- HEADER -->
			<?php
				$is_frontpage = true;
				include "inc/header.inc.php";
			?>

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
