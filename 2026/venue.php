<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "venue";
	$pagename = "Venue";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="venue" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

		<div class='full-row clearfix lazyload translucent' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Venue Maps</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>


							<div class='cell large-12 medium-text-center'>
								<a href='img/venue_map_2.0.png'><img id='venue-map' class='lazyload' data-src='img/venue_map_2.0.png' src='img/venue_map_2.0.png'></a>
								<div id='venue-map-open' class='medium-text-right text-center'><a href='img/venue_map_2.0.png'>Open venue Image</a></div>
							</div>

							<div class='cell large-12 medium-text-center'>
								<a href='img/Community-final.png'><img id='community-map' class='lazyload' data-src='img/Community-final.png' src='img/Community-final.png'></a>
								<div id='community-map-open' class='medium-text-right text-center'><a href='img/Community-final.png'>Open Community Village Image</a></div>
							</div>


							<!-- gmap-->
							<div class='cell '>
								<iframe class='show-for-small' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4721.4185328585745!2d24.898667201934195!3d60.162325376335495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4692097b421b03b1%3A0xdd1747631829f57a!2sKaapelitehdas!5e0!3m2!1sfi!2sfi!4v1538026072408" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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
