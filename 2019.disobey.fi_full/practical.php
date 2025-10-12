<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "practical";
	$pagename = "Practical";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="practical" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

		<!-- Worshops -->
		<div class='full-row clearfix lazyload translucent' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Practical</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

							<div class='cell large-6'>
								<h4>Location</h4>
								<!-- map for mobile -->
								<iframe class='show-for-small-only' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4721.4185328585745!2d24.898667201934195!3d60.162325376335495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692097b421b03b1%3A0xdd1747631829f57a!2sKaapelitehdas!5e0!3m2!1sfi!2sfi!4v1538026072408" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								<p class='show-for-small-only'>&nbsp;</p>

								<p>The event will take place in the venue Merikaapelihalli, Cable Factory.</p>



								<p>You can find general and specific info about the location 
								<a href="https://www.kaapelitehdas.fi/en">Kaapelitehdas</a> and venue
								<a href="https://www.kaapelitehdas.fi/en/space-rent/merikaapelihalli">Merikaapelihalli</a>
								</p>
							</div>

							<div class='cell large-6'>
								<h4>Hotels</h4>
								<p>The closest hotel to the venue is <a href="http://www.finland.holidayinn.com/hotellit/holiday-inn-helsinki-west-ruoholahti">Holiday Inn - Helsinki West Ruoholahti</a>.</p>

								<p>For other options <a href="https://wikitravel.org/en/Helsinki#Sleep" target="_blank">check Wikitravel.</a></p>
							</div>

							<div class='cell large-6'>
								<h4>Travel</h4>
								<p>For visitors from abroad, we recommend checking out <a href='https://wikitravel.org/en/Helsinki#Get_in' target="_blank">Wikitravel's Helsinki page.</a> </p>

								<p>The closest metro station is Helsinki / Ruoholahti. Please note the <a href="https://www.hsl.fi/en/news/2018/disruptions-eastbound-metro-services-friday-evening-11-january-2019-services-lauttasaari">Helsinki Metro disruption</a> that occurs between Jan 11th-13th, 2019.</p>

								<p>The local transport service <a href='https://www.hsl.fi/en' target="_blank">HSL's Journey Planner</a> can be used to plan your local mode of transportation. It recognizes the name "Kaapelitehdas" as a starting or end point.</p>
							</div>

							<div class='cell large-6'>
								<iframe class='show-for-medium' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4721.4185328585745!2d24.898667201934195!3d60.162325376335495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692097b421b03b1%3A0xdd1747631829f57a!2sKaapelitehdas!5e0!3m2!1sfi!2sfi!4v1538026072408" width="90%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

							<div class='cell large-12'>
								<h4>Venue</h4>
								<a href='img/venue_map.png'><img src='img/venue_map.png'></a>
								<div id='venue-map-open' class='medium-text-right text-center'><a href='img/venue_map.png'>Open venue Image</a></div>
							</div>

					</div>
				</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>

	</section>
</body>
</html>
