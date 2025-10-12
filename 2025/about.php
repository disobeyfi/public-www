<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "about";
	$pagename = "About";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="about" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

		<!-- About -->
		<div class='full-row clearfix lazyload extra-padding translucent'  >
				<section class="grid-container cell grid-y cell location" id='about' >
					<div class="cell">
						<h1 class="red">Disobey - organising hacker culture events since 2015</h1>
					</div>
					<div class='cell'>

						<div class=''>
							<p>We here at Disobey wish to encourage hacker culture and bring together like-minded individuals at a gathering to share information and to train the skills our adversaries use against us. Our goal is to foster a vibrant community of creators, makers and breakers.</p>

							<p>We value encouragement, creativity and sharing and believe everyone can teach us something about the world.</p>
						</div>
					</div>
				</section>
		</div>

		<!-- ETHICS ETC -->
		<!-- <div class='full-row clearfix divider'>&nbsp;</div> -->
		<?php include "inc/etchics.inc.php";	?>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!-- History & what to expect -->
		<!-- ETHICS ETC -->
		<div class='full-row clearfix lazyload center-bg' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
				<section class="grid-container cell grid-y cell location" id='about' >
					<div class="cell">

						<!-- grid -->
						<div class='grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y text-left'>
							<div class='cell medium-6 '>
								<h4  class="red">What to expect</h4>
								<p>Disobey gathers the brightest minds around the hardest problems. As with most things in life, even here you get what you put in. Everyone will have a different experience, but together we can make sure it'll be a good one.</p>

								<p>We operate under the <a href="https://en.wikipedia.org/wiki/Chatham_House_Rule">Chatham House Rule</a>:</p>

								<p>&quot;When a meeting, or part thereof, is held under the Chatham House Rule, participants are free to use the information received, but neither the identity nor the affiliation of the speaker(s), nor that of any other participant, may be revealed.&quot;</p>
			</div>

							<div class='cell medium-6 '>
								<h4 class="red">History</h4>

								<ul class='undecorated'>
									<li>Previous events:</li>
									<li><a target="_blank" href='https://web.archive.org/web/20150926111835/http://disobey.fi/'>Disobey 2016 (archive.org)</a></li>
									<li><a target="_blank" href='http://2017.disobey.fi/'>Disobey 2017</a></li>
									<li><a target="_blank" href='http://2018.disobey.fi/'>Disobey 2018</a></li>
									<li><a target="_blank" href='https://disobey.fi/2019/'>Disobey 2019</a></li>
									<li><a target="_blank" href='https://disobey.fi/2020/'>Disobey 2020</a></li>
									<li><a target="_blank" href='https://disobey.fi/2021/'>Disobey 2021 (cancelled)</a></li>
									<li><a target="_blank" href='https://disobey.fi/2022/'>Disobey 2022 (cancelled)</a></li>
									<li><a target="_blank" href='https://disobey.fi/2023/'>Disobey 2023</a></li>
									<li><a target="_blank" href='https://disobey.fi/2024/'>Disobey 2024</a></li>
								</ul>

								<p>
									<ul class='undecorated'>
										<li><a target="_blank" href='https://docs.google.com/document/d/1iXD6CmQFG0cRkjgJOao2EeDeizEiMf-JJCjMMVv0CIc/edit'>Hacker ticket 2018 walkthrough</a></li>
									</ul>
								</p>
							</div>
						</div>
						<!-- grid ends -->


					</div>
				</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!-- Credits-->
		<div class='full-row clearfix lazyload center-bg' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
				<section class="grid-container cell grid-y location" id='credits' >
					<div class="cell">
						<h4 class="text-center">Credits</h4>
						<!-- grid -->
						<div class='grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y text-left'>
							<div class='cell medium-6 '>


								<h6 class='small-text-center large-text-left'>Photographer info</h6>
								<p>Mikael Peltomaa, Email: mikael.peltomaa@gmail.com</p>
							</div>

							<div class='cell medium-6 '>
								<h6 class="small-text-center large-text-left">Site design</h6>
								<p>Janne Ahvo, Email: janne.ahvo@ddrhelsinki.fi</p>
							</div>
						</div>
						<!-- grid ends -->
					</div>
				</section>
		</div>


		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>

	</section>

	<?php include "inc/footer.inc.php"; ?>
</body>
</html>
