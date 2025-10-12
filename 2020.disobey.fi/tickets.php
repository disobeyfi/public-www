<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "tickets";
	$pagename = "Tickets";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage subpage-tickets'>

	<script> var current_navi_item="tickets" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<!-- GET TICKET BUTTON -->
	<!-- <a href="https://holvi.com/shop/Disobey/" id='tickets-page-get-ticket' class="button hidden" style="color:white;">
			<div class='show-for-medium'>Get your ticket now <i class="fas fa-chevron-right"></i></div>
			<div class='hide-for-medium'>Buy ticket<i class="fas fa-chevron-right"></i></div>
	</a>
	-->

	<script>
		$(".header-row").append($("#tickets-page-get-ticket"))
	</script>

	<section class='container hidden'>

		<!-- Worshops -->
		<div class='full-row clearfix lazyload translucent' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Tickets</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>
						<div class='cell large-6'>
							<h4><span style="text-decoration:line-through">Event User Badge (EARLY BIRD), 50€</span> SOLD OUT</h4>
							<p>A cheaper User badge and two day entrance to the Disobey event Feb 14-15th 2020.
							Available for purchase from Sep 1st 2019.
							Due to popular demand, a second batch of early bird tickets are sold from Sep 5th 2019 onwards.</p>
						</div>
						<div class='cell large-6'>
							<h4>Event User Badge, 60€</h4>
							<p>User badge and two day entrance to the Disobey event Feb 14-15th 2020.
							User badges sold online have run out, a very small number will still be sold at the door during the event.</p>
						</div>
						<div class='cell large-6'>
							<h4><span style="text-decoration:line-through">Support badge, 199€</span> SOLD OUT</h4>
							<p>The official support badge for the Disobey 2020 event.
							Purchasing a support badge helps us to keep ticket prices low for the general public.
							A support badge grants two day entrance to the event and includes a special support T-shirt given at the event.
							Available for purchase Sep 1st 2019.</p>
						</div>
						<div class='cell large-6'>
							<h4><span style="text-decoration:line-through">Hacker badge, 35€</span> SOLD OUT</h4>
							<p>Hacker badge and two day entrance to the Disobey event Feb 14-15th 2020.
							Available for purchase only after completing the <a href="https://disobey2020.github.io/">Disobey CTF puzzle challenge</a>.</p>
					</div>
				</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>

	</section>
</body>
</html>
