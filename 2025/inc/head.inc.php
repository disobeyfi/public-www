<head>
		<?php

			//Same as in navigation
			$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey_2025/" : "/2025/";

			$slug 			= ( empty( $slug ) )? "" : "/" . $slug;
			$some_title = ( empty( $pagename ) )? "" : "- " . $pagename;
		?>
		<link rel="icon"
      type="image/png"
      href="favicon.ico">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

		<title>Disobey <?php echo $some_title; ?></title>
		<meta name="description" content="Disobey - The Nordic Security Event">

		<!-- <meta property="og:url"                content="http://www.ddr.fi/disobey/2019" /> -->
		<meta property="og:url"                content="https://disobey.fi/2025<?php echo $slug; ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:title"              content="Disobey <?php echo $some_title; ?>" />
		<meta property="og:description"        content="Disobey - The Nordic Security Event" />
		<meta property="og:image"              content="https://disobey.fi/2025/img/disobey_facebook.jpg" />

		<!--- STYLES -->
		<style>@import url("https://use.typekit.net/nfb1rio.css");</style>
		<link rel="stylesheet" href="https://use.typekit.net/nfb1rio.css">
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->

		<!-- <link rel="stylesheet" type="text/css" href="css/foundation.min.css"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/css/foundation.css" integrity="sha256-Ed7kL1p/BVuHCwGSEpUib2v9K7JtkCQlX4CweQEimJo=" crossorigin="anonymous" />

		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/loader.css?v=17">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/main.css?v=31">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/lists.css?v=18">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/navigation.css?v=8">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/header.css?v=18">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/tables.css?v=18">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/profiles.css?v=17">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/timetable.css?v=17">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/videos.css?v=17">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseurl; ?>css/community_program.css?v=17">

		<!-- SCRIPTS -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha256-XJuslujM3cGzRZGiSi/KNSdk58uORO/mmrEQNjVtb5k=" crossorigin="anonymous"></script>



		<!-- <script defer src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js" 	integrity="sha256-mRYlCu5EG+ouD07WxLF8v4ZAZYCA6WrmdIXyn1Bv9Vk=" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.3/js/foundation.min.js" integrity="sha256-/PFxCnsMh+nTuM0k3VJCRch1gwnCfKjaP8rJNq5SoBg=" crossorigin="anonymous"></script>
		<script defer src="<?php echo $baseurl; ?>js/vendor/lazyload.min.js"></script>

		<script defer src="<?php echo $baseurl; ?>js/main.js?v=11"></script>
		<script>

			var loaderReady = function(){
				console.log("loader ready");
			}

			var startLoader = function(){
				TweenMax.to(".loader", 10, {rotation:-1440, transformOrigin:"50% 50%", onComplete:"loaderReady" });
				$(".loader").removeClass("hidden");
				$("#loader-container").removeClass("hidden");
			}

			var BASEURL = "<?php echo $baseurl; ?>";

		</script>



</head>
