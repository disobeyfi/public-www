<?php

$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey_2023/" : "/2023/";
	

/*-------------------------
 FILE
 -----------------------*/
include('./inc/profiles/filenames.php');

if( empty($filenames) ) die("<h1>404 - Filenames not specified</h1>");
if( empty($_GET['profile']) ) die("<h1>404 - Specify profile name</h1>");
if ( !in_array( $_GET['profile'], $filenames) ) die("<h1>404 - correct file but no content</h1>");

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
			$position = ( empty( $value->position ) )? 	"" : "<span class='profile-speaker-position'>".$value->position ."</span>";
			$image 		= ( empty( $value->img ) )? 	"" : "<img class='speaker-image ' src='{$baseurl}img/bios/{$value->img}.jpg'/>";

			/* check if image exists and use default if not */
			if( !empty( $value->img ) && !file_exists( "img/bios/{$value->img}.jpg" ) ){
				$image 		= "<img class='speaker-image ' src='{$baseurl}img/bios/default.jpg'/>";
;			}

			$speakers .= "
			<div class='speaker {$single_css} {$columns} text-left'>
				<div class='speaker-container'>
					<div class='flexed-item-container'>
						<div class='image'>{$image}</div>
						<p class=''><span class='profile-speaker-name'>{$name}</span>{$position}</p>
					</div>
				</div>
			</div>";
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

					// Profiles on bottom of the page

					echo "<br>{$content}<br><br>";

					if (!empty($profile_data->speakers)) {
						$bios = "<hr>\n";
						foreach ( $profile_data->speakers as $key => $value) {
							$name				= ( empty( $value->name ) )?		"" : $value->name;
							$position			= ( empty( $value->position ) )?	"" : ", ".$value->position;
							$bio				= ( empty( $value->bio ) )?			"" : $value->bio;
							$nick 				= ( empty( $value->nick ) )?		"" : "<div class='profile-nick'><span class='fieldname'>Nick:</span> {$value->nick}</div>";
							
							$some = ""; 
							if( !empty( $value->some ) ){
								$some = "<div class='profile-some'>{$value->some}</div>";
							}		

							$bios .= "<span class='larger'>{$name}{$position}</span>\n\n";
							$bios .= "{$bio}{$nick}{$some}\n\n\n";

							if( empty( $position ) && empty( $bio ) ){ 	$bios = ""; }
						}
						echo nl2br($bios);
						echo "<hr>";
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
		<?php include "inc/footer.inc.php"; ?> 

	</section>

</div>
</body>
</html>