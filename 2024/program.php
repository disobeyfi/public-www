<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "program";
	$pagename = "Program";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage program-page'>

<div class="off-canvas-content" data-off-canvas-content>

	<script> var current_navi_item="program" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>
		<?php	include "inc/program.inc.php"; ?>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>


		<?php include "inc/footer.inc.php"; ?>

	</section>

</div>
</body>
</html>
