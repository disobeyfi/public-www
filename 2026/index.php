<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php include "inc/head.inc.php"; ?>

<body id='frontpage' class='text-center hide-background frontpage'>
<div id='video-container'>
    <video id='videoplayer' autoplay loop muted>
        <source src="" type="video/mp4">
    </video>
</div>
<div id='loader-container' class='hidden'>
    <div class='loader hidden'><img onload="startLoader()" src='<?php echo $baseurl; ?>img/just_logo.png' alt="loader">
    </div>
</div>

<script> var current_navi_item = "" </script>
<?php include "inc/navigation.inc.php"; ?>
<section class='container hidden'>

    <div class='full-row top-bar'></div>
    <!--- HEADER -->
    <?php
    $is_frontpage = true;
    include "inc/header.inc.php";
    ?>

    <!-- KEYNOTES -->

        <div class='full-row clearfix lazyload'>
        <section class="grid-container cell grid-y cell location" id='keynotes'>
			<div class="cell">
				<h1 class="red">Keynote speakers</h1>
				<!-- <h4 style='color:white;'>To be announced</h4> -->
			</div>
			<div class="cell grid-x grid-padding-x grid-margin-x">
				<!-- keynote 1 -->
				<div class='cell large-6 medium-text-left'>
					<div class='illustration illustration-keynote lazyload first ' title='' data-alignment="center" data-src='img/bios/bio_X3DGSF.jpg' style='background-image:url("");'></div>
					<h4 class='text-center red' >Joe Grand</h4>
					<p>
					Joe Grand, also known as Kingpin, is a computer engineer, hardware hacker, occasional YouTuber, creator of the first electronic badges for DEFCON, member of L0pht Heavy Industries, and former technological juvenile delinquent. 							
					</p>
				</div>
				<!-- keynote 12 -->
				<div class='cell large-6 medium-text-left'>
					<div class='illustration illustration-keynote lazyload' title='' data-alignment="center" data-src='img/bios/bio_FB8EHY.jpg' style='background-image:url("");'></div>
					<h4 class='text-center'>Chantal Stekelenburg</h4>
					<p> 
					Chantal Stekelenburg is a cybersecurity professional focused on ethical hacking, community building, and inclusivity, organising conferences like WICCON, speaking internationally, and working at the intersection of security, collaboration, and impact.
					</p>
				</div>
			</div>
		</section>
	</div>

    <div class='full-row clearfix divider'>&nbsp;</div>
    
			<!--- SPEAKERS -->
			<a name='speakers' id='speakers'></a>
			<div class='full-row clearfix divider'>&nbsp;</div>

			<?php include "inc/speakers.inc.php";	?>


		<div class='full-row clearfix divider'>&nbsp;</div>

    <div class='full-row clearfix divider'>&nbsp;</div>

    <?php include "inc/contact.inc.php"; ?>

</section>

<script>
  /*-------------------------
   Start loading video background
   -----------------------*/
  $(window).on('load',
    function () {

      var video = document.getElementById("videoplayer");
      var req = new XMLHttpRequest();
      req.responseType = 'blob';
      req.open('GET', 'video/etusivu_2025.mp4', true);

      req.onload = function () {
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
      req.onerror = function () {
        // Error
      }

      req.send();
    })
</script>

<?php include "inc/footer.inc.php"; ?>

<link rel="prefetch" href="img/glitch_logo/logo_glitch_1.webp"/>
<link rel="prefetch" href="img/glitch_logo/logo_glitch_2.webp"/>
<link rel="prefetch" href="img/glitch_logo/logo_glitch_3.webp"/>

</body>
</html>
