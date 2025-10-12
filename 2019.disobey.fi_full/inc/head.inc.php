<head>
		<?php
			$slug 			= ( empty( $slug ) )? "" : "/" . $slug;
			$some_title = ( empty( $pagename ) )? "" : "- " . $pagename;
		?>
		<link rel="icon"
      type="image/png"
      href="favicon.ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

		<title>Disobey 2019</title>
		<meta name="description" content="Disobey 2019 - The Nordic Security Event">

		<!-- <meta property="og:url"                content="http://www.ddr.fi/disobey/2019" /> -->
		<meta property="og:url"                content="https://disobey.fi<?php echo $slug; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Disobey 2019 <?php echo $some_title; ?>" />
		<meta property="og:description"        content="Disobey 2019 - The Nordic Security Event From 11th to 12th of January, 2019" />
		<meta property="og:image"              content="https://disobey.fi/img/disobey_facebook.jpg" />

		<!--- STYLES -->
		<style>@import url("https://use.typekit.net/nfb1rio.css");</style>
		<link rel="stylesheet" href="https://use.typekit.net/nfb1rio.css">
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

		<!-- <link rel="stylesheet" type="text/css" href="css/foundation.min.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0-rc.3/css/foundation.css" integrity="sha256-TBfD6eZd0iucH7siGZQtyck76IQ/iOw6Px6EwkYLurA=" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="css/main.css?v=11">
		<link rel="stylesheet" type="text/css" href="css/lists.css?v=11">
		<link rel="stylesheet" type="text/css" href="css/navigation.css?v=11">
		<link rel="stylesheet" type="text/css" href="css/header.css?v=11">
		<link rel="stylesheet" type="text/css" href="css/tables.css?v=12">
		<link rel="stylesheet" type="text/css" href="css/profiles.css?v=11">

		<!-- SCRIPTS -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha256-XJuslujM3cGzRZGiSi/KNSdk58uORO/mmrEQNjVtb5k=" crossorigin="anonymous"></script>

		<script defer src="js/vendor/fontawesome.min.js"></script>
		<script defer src="js/vendor/fa-brands.min.js"></script>
		<script defer src="js/vendor/fa-regular.js"></script>
		<script defer src="js/vendor/fa-solid.js"></script>

		<!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js" 	integrity="sha256-mRYlCu5EG+ouD07WxLF8v4ZAZYCA6WrmdIXyn1Bv9Vk=" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0-rc.3/js/foundation.min.js" integrity="sha256-l1HhyJ0nfWQPdwsVJLNq8HfZNb3i1R9M82YrqVPzoJ4=" crossorigin="anonymous"></script>
		<script defer src="js/vendor/lazyload.min.js"></script>

		<script defer src="js/main.js?v=2"></script>
		<script>

			var startLoader = function(){
				TweenLite.to(".loader", 10, {rotation:-1440, transformOrigin:"50% 50%"});
				$(".loader").removeClass("hidden");
			}
		</script>
</head>
