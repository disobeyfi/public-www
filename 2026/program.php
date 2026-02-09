<!DOCTYPE html>
<html lang="en">

<?php
$slug = "program";
$pagename = "Program";
include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

<div class="off-canvas-content" data-off-canvas-content>

    <script> var current_navi_item = "program" </script>
    <?php include "inc/navigation.inc.php"; ?>
    <?php include "inc/header.inc.php"; ?>

    <section class='container hidden' id='main-content'>

        <!-- Program  -->
        <?php /*
		<div class='full-row clearfix lazyload extra-padding translucent'  >
			<section class="grid-container cell grid-y cell location" id='about' >
				<div class="cell">
					<h1>Program</h1>
				</div>
				<div class='cell'>

					<div class=''>
						<p>Will be updated soon!</p>
					</div>
				</div>
			</section>
		</div>
		*/ ?>

        <!-- Program table -->
        <?php include "inc/program.inc.php"; ?>

        <div class='full-row clearfix divider'>&nbsp;</div>
        <?php include "inc/contact.inc.php"; ?>


        <?php include "inc/footer.inc.php"; ?>

    </section>

</div>
</body>
</html>
