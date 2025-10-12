<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "hackerpuzzle";
	$pagename = "hackerpuzzle";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="hackerpuzzle" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

		<div class='full-row clearfix lazyload translucent competitions' data-src='<?php echo $baseurl; ?>img/lockbox.jpg' style='background-image:url( "" );' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Hacker Puzzle</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

							<div class='cell large-12 text-center'>
                                <p>The KCCP Cyber Division has identified a suspicious file linked to recent activity targeting key companies in Kouvostoliitto, including Kouvoston Makkara. We suspect a ransomware group may be involved, but their true motives remain unclear.</p>

<p>We are calling on the cybersecurity community to help us:</p>
<br>- Analyze the recovered file and determine its purpose</br>
<br>- Trace and infiltrate the group responsible</br>

<p>⚠️ As a general best practice, files of unknown origin should always be analyzed in a secure, isolated environment (e.g. sandbox or virtual machine). Avoid opening or executing them on your primary system.</p>

<p>Your mission begins here: https://files.kccp.fi/sample.zip </p>

<p>Good luck. We're counting on you.</p>

<p>— KCCP Cyber Division
								</p>
                            </div>


		<div class='full-row clearfix divider'>&nbsp;</div>

		</section>

		<?php include "inc/contact.inc.php"; ?>


		<?php include "inc/footer.inc.php"; ?>
</body>
</html>
