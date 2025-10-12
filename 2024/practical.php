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

		<div class='full-row clearfix lazyload translucent' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Practical</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

							<!-- location -->
							<div class='cell large-6'>
								<h4>Location</h4>
								<!-- map for mobile -->
								<iframe class='show-for-small-only' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4721.4185328585745!2d24.898667201934195!3d60.162325376335495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692097b421b03b1%3A0xdd1747631829f57a!2sKaapelitehdas!5e0!3m2!1sfi!2sfi!4v1538026072408" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
								<p class='show-for-small-only'>&nbsp;</p>

								<p>The event will take place in the venue Merikaapelihalli, Cable Factory (Kaapeliaukio 3, 00180 Helsinki, Finland).</p>



								<p>You can find general and specific info about the location
								<a href="https://www.kaapelitehdas.fi/en">Kaapelitehdas</a> and venue
								<a href="https://www.kaapelitehdas.fi/en/space-rent/merikaapelihalli">Merikaapelihalli</a>
								</p>

							</div>

							<!-- hotels -->
							<div class='cell large-6'>
								<h4>Hotels</h4>
								<p>
									The closest hotel to the venue is <a href="https://finland.ihg.com/hotellit/holiday-inn-helsinki-west-ruoholahti/">Holiday Inn - Helsinki West Ruoholahti</a>.
								</p>

								<p>For other options <a href="https://wikitravel.org/en/Helsinki#Sleep" target="_blank">check Wikitravel.</a></p>
							</div>

							<!-- map for desktop -->
							<div class='cell large-6'>
								<iframe class='show-for-medium' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4721.4185328585745!2d24.898667201934195!3d60.162325376335495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692097b421b03b1%3A0xdd1747631829f57a!2sKaapelitehdas!5e0!3m2!1sfi!2sfi!4v1538026072408" width="90%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>

							<!-- Travel -->
							<div class='cell large-6'>
								<h4>Travel</h4>
								<p>For visitors from abroad, we recommend checking out <a href='https://wikitravel.org/en/Helsinki#Get_in' target="_blank">Wikitravel's Helsinki page.</a> </p>

								<p>The closest metro station is Helsinki / Ruoholahti.</p>

								<p>The local transport service <a href='https://www.hsl.fi/en' target="_blank">HSL's Journey Planner</a> can be used to plan your local mode of transportation. It recognizes the name "Kaapelitehdas" as a starting or end point.</p>
							</div>

							<!-- tickets -->
							<div class='cell large-6'>

								<h4>Tickets</h4>

								<p>This year we have the possibility to change the ticket for a wristband in advance. If you want to do this, please come to Lasipiha at Kaapelitehdas on Thu between 16:00-20:00. </p>

								<p>On Friday the doors and wristband exchange will open at 11:30. When you arrive at the exchange point, please remember to dig out the QR code from your email before your turn at the counter. Please keep your phone screen bright to help with the QR code readers!</p>

								<p>Please note that the wristband is non-transferable, i.e. one wristband equals one person. A single wristband can only be used to provide entrance for one person during the event.</p>

								<p>Some ticket groups do not contain a QR code. If yours does not, find the queue that is marked as “Special Cases”.</p>

								<p><b>Important: The event is sold out, so we will not be selling tickets at the door.</b></p>
							</div>

							<!-- schedule -->
							<div class='cell large-6'>
								<h4>Rough schedule</h4>

								<p>On Friday, doors will open to the public at 11:30, and the program ends at 22:00. On Saturday, doors will open to the public at 10:00, and the program ends at 22:00. Doors close at 23:00. </p>

								<p>Please see <a href='<?php echo $baseurl; ?>program<?php echo $suffix;?>'>the program page</a> and <a href='<?php echo $baseurl; ?>communityvillage<?php echo $suffix;?>'>the Community Village page</a> for information on the actual program. (Please refer to the program pages for scheduling &ndash; there may be changes, and the pages will have the latest info.)</p>

							</div>

							<!-- photos -->
							<div class='cell large-6'>
								<h4>ON TAKING PHOTOS AT THE EVENT</h4>

								<p>We do not encourage taking photos as we respect the privacy of others, but if you feel the need to take photos, make sure to restrict the photographing to cover only you and your friends (and even with them, ask them permission first!).</p>

								<p>We have an official photographer at the site &ndash; you can recognize them by their badge. They will always ask for permission before taking pictures of individual, recognizable people.</p>

							</div>

							<!-- food and shopping -->
							<div class='cell large-6'>

								<h4>Food and shopping</h4>

								<p>There are food and drink vendors at the venue: straight next to Disobey entrance, in the Lasipiha (Glass garden) space, Restaurant Traba serves for the duration of the event (Fri 11-19:30, Sat 12-19:30).</p>

								<p>
									The Ruoholahti mall (500 metres by foot) and its surroundings offer fast food places, restaurants, off-licence and grocery stores.
								</p>

							</div>

							<!-- social media -->
							<div class='cell large-12 medium-text-center'>
								<h4>Social Media</h4>

								<p>
									The official hashtag is: <span class='green'>#disobey2024</span> &nbsp;&nbsp; We can be found and tagged on various social media with:
								</p>
								<ul id='social-media-list'>
									<li>Twitter / X <br> <span class='green'>@Disobey_fi</span></li>
									<li>Facebook <br> <span class='green'>@disobeyfi</span></li>
									<li>LinkedIn <br> <span class='green'>@disobey</span></li>
									<li>BlueSky <br> <span class='green'>@disobey_fi</span></li>
									<li>Instagram <br> <span class='green'>@disobey_fi</span></li>
								</ul>

							</div>

							<div class='cell large-12 medium-text-center'>
								<br><h4>Venue</h4>
								<br><br>
								<a href='img/venue_map.jpg'><img class='lazyload' data-src='img/venue_map.jpg' src='img/venue_map_small_paceholder.jpg'></a>
								<div id='venue-map-open' class='medium-text-right text-center'><a href='img/venue_map.jpg'>Open venue Image</a></div>
							</div>

					</div>
				</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>


		<?php include "inc/footer.inc.php"; ?>
	</section>
</body>
</html>
