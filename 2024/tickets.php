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

	<script>
		$(".header-row").append($("#tickets-page-get-ticket"))
	</script>

	<section class='container hidden'>


		<div class='full-row clearfix lazyload translucent' >

			<section class='grid-container grid-x grid-padding-x grid-padding-y grid-margin-y'>
				
				<div class='cell'>
					<h1>Tickets</h1>
					<h4 class='center'>Disobey 2024 is sold out!</h4>
					<p>Disobey 2024 will be organized on Feb 16-17th 2024 at Kaapelitehdas, Helsinki, Finland.</p>
				</div>
			</section>

		</div>	

		<div class='full-row clearfix divider'>&nbsp;</div>

		<div class='full-row clearfix lazyload translucent' >

			<section class='text-left grid-container grid-x grid-padding-x grid-padding-y grid-margin-y'>

				<div class='cell large-6 flex-column text-center medium-text-left sideline'>
					
					<h4>SUPPORT TICKETS</h4>
					
					<p>The Disobey support ticket for the 2024 event. Purchasing a support ticket helps us keep ticket prices low for the general public. A support ticket grants two day entrance to the event on Feb 16-17th 2024.</p>
					<p>One support ticket costs 300€</p>
			
					<p>
						<a class='buy-ticket-button inactive' style="text-decoration: line-through;" href='https://holvi.com/shop/Disobey/section/2024/' target='_blank'>SOLD OUT</a>
					</p>
					
				</div>

				<div class='cell large-6 flex-column text-center medium-text-left sideline'>
					
					<h4>STANDARD TICKETS</h4>

					<p>A standard Disobey ticket grants two day entrance to the event on Feb 16-17th 2024. </p>
					<p>Standard tickets will be available for purchase on Nov 20th 2023 at 6pm.</p>
					<p>One standard ticket costs 70€</p>

					<p>
						<!-- button olaceholder keep class buy-ticket-button remove inactive -->
						<a href='https://holvi.com/shop/Disobey/section/2024/' class='buy-ticket-button inactive' style="text-decoration: line-through;" >SOLD OUT</a>
					</p>
				</div>

			</section><!-- Grid end -->

		</div><!-- row end -->

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>
		
	</section>

	<?php include "inc/footer.inc.php"; ?>

</body>
</html>
