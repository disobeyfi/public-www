	<div class='full-row clearfix lazyload translucent fullwidth' >
		<section class="grid-container cell grid-y cell location" id='schedule' >



			<div class="cell">
				<h1>Program</h1>
			</div>

			<!-- DATE -->

			<?php /*include "inc/date.inc.php";*/ ?>

			<section id='program-intro' >
					<p>Below you can find the stage program guide for Disobey 2025 full of amazing talks and presentations. In addition, the Community Village has its own set of awesome scheduled and unscheduled program, which you can find on <a id='community-village-link' href='<?php echo $baseurl; ?>communityvillage<?php echo $suffix;?>'>the Community Village page! <span class='arrow right inline-arrow'></span></a></p>
			</section>

			<?php	include "inc/program_details.inc.php"; ?>

			<?php	/*include "inc/capture_the_flag.inc.php";*/ ?>
			<?php	/*include "inc/badge_challenge.inc.php";*/ ?>

			<?php	/*include "inc/simple_program.inc.php";*/ ?>


	</section>
</div>


<div class='full-row clearfix divider'>&nbsp;</div>
<?php include "inc/location.inc.php"; ?>
