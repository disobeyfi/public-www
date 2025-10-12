<?php

/*-------------------------
 FILE
 -----------------------*/
include('./inc/profiles/filenames.php');

if( empty($_GET['profile']) ) die("");
if ( !in_array( $_GET['profile'], $filenames) ) die("");

$filename = $_GET['profile'];

$profile_data = file_get_contents( "./inc/profiles/{$filename}.json" );
$profile_data = json_decode( $profile_data );

/*-------------------------
 Content
 -----------------------*/
$title 		= ( empty( $profile_data->title ) )?    "" : "{$profile_data->title}";
$subtitle	= ( empty( $profile_data->subtitle ) )? "" : "{$profile_data->subtitle}";
$content 	= ( empty( $profile_data->synopsis ) )? "" : "<div class='synopsis'>".nl2br($profile_data->synopsis)."</div>";
/*-------------------------
 Speakers
 -----------------------*/
if(  !empty( $profile_data->speakers )  ){
	$speakers 	= "";
	$is_single 	= (count($profile_data->speakers) == 1);
	$grid 			= ( !$is_single )? "grid-x grid-margin-x grid-margin-y":"";
	$columns 		= ( !$is_single )? "cell medium-6":"";
	$single_css	= ( $is_single )? "single":"";

	foreach ( $profile_data->speakers as $key => $value) {
			$name 		= ( empty( $value->name ) )? 	"" : $value->name;
			$position = ( empty( $value->position ) )? 	"" : ", ".$value->position;
			$image 		= ( empty( $value->img ) )? 	"" : "<img class='speaker-image ' src='img/bios/{$value->img}.jpg'/>";

			$speakers .= "<div class='speaker {$single_css} {$columns} text-left'><div class='speaker-container'><div class='flexed-item-container'><div class='image'>{$image}</div><p class=''>{$name}{$position}</p></div></div></div>";
	}

	$speakers = "<div class='{$grid} speakers text-center'>{$speakers}</div>";
}


?><!DOCTYPE html>
<html lang="en">

<?php

	$slug 		= "profile";
	$pagename = "{$title}";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

<div class="off-canvas-content" data-off-canvas-content>

	<script> var current_navi_item="program" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>
		<div class='full-row clearfix lazyload translucent' >
			<section class="grid-container cell grid-y" id='profile' >

				<div class="cell">
					<a id="back-button" onclick="window.history.back()" >&laquo; Back</a>
				</div>

				<div class="cell">
					<h1><?php echo $title; ?></h1>
					<?php if ($subtitle != "") echo "<h3>{$subtitle}</h3>"; ?>
					<?php echo $speakers; ?>
				</div>

				<div class="cell text-left">
					<?php
					echo $content;

					if (!empty($profile_data->speakers)) {
						$bios = "\n";
						foreach ( $profile_data->speakers as $key => $value) {
							$name		= ( empty( $value->name ) )?		"" : $value->name;
							$position	= ( empty( $value->position ) )?	"" : ", ".$value->position;
							$bio		= ( empty( $value->bio ) )?			"" : $value->bio;

							$bios .= "<b>{$name}{$position}</b>\n\n";
							$bios .= "{$bio}\n\n";

							if( empty( $position ) && empty( $bio ) ){ 	$bios = ""; }
						}
						echo nl2br($bios);
					}
					?>
				</div>

				<div class="cell">
					<br><br>
					<a id="back-button" onclick="window.history.back()" >&laquo; Back</a>
				</div>

			</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>

	</section>

</div>
</body>
</html>
