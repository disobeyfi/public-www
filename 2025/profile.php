<?php

$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey_2025/" : "/2025/";

function poor_mans_markdown($str) {
	$patterns = array(
		'/\*\*(.*?)\*\*/',
		'/\_\_(.*?)\_\_/',
		'/\[(.+?)\]\((.+?)\)/',
		'/\\\r\\\n/'
	);
	$replacements = array(
		'<b>\1</b>',
		'<i>\1</i>',
		'<a href="\2">\1</a>',
		'<br/>'
	);
	return preg_replace($patterns, $replacements, $str);
}

/*-------------------------
 FILE
 -----------------------*/
$slug = $_GET['profile'];

if( empty($_GET['profile']) ) die("<h1>404 - Specify profile name</h1>");
if( empty($slug) ) die("<h1>404 - Filenames not specified</h1>");

$schedule_data = json_decode(file_get_contents("./inc/schedule.json"), true)["schedule"]["conference"]["days"];
$profile_data = null;

// find the correct event in the data
foreach ($schedule_data as $day) {
	if ($profile_data) break;
	foreach ($day["rooms"] as $room => $roomdata) {
		if ($profile_data) break;
		foreach ($roomdata as $event) {
			if ($event["slug"] === $slug) {
				$profile_data = $event;
			}
		}
	}
}

if ($profile_data == null) {
	die("<h1>404- Erroneous slug</h1>");
}

/*-------------------------
 Content
 -----------------------*/
$profile_data['abstract'] = poor_mans_markdown($profile_data['abstract']);
$profile_data['description'] = poor_mans_markdown($profile_data['description']);
$title 		= ( empty( $profile_data['title'] ) )?    "" : "{$profile_data['title']}";
$subtitle	= ( empty( $profile_data['subtitle'] ) )? "" : "{$profile_data['subtitle']}";
$content 	= ( empty( $profile_data['abstract'] ) )? "" : "<div class='synopsis'>".nl2br($profile_data['abstract'])."</div>";

/*-------------------------
 Speakers
 -----------------------*/
 // schedules-TODO: position, image
if(  !empty( $profile_data["persons"] )  ){
	$speakers 	= "";
	$is_single 	= (count($profile_data["persons"]) == 1);
	$grid 			= ( !$is_single )? "grid-x grid-margin-x grid-margin-y":"";
	$columns 		= ( !$is_single )? "cell medium-6":"";
	$single_css	= ( $is_single )? "single":"";

	foreach ( $profile_data["persons"] as $key => $value) {
			$name 		= ( empty( $value["public_name"] ) )? 	"" : $value["public_name"];
			$position = ( empty( $value->position ) )? 	"" : "<span class='profile-speaker-position'>".$value->position ."</span>";

			// Image or default
			$image_url = ( empty( $value["code"] ) )? 	"" : "img/bios/bio_{$value["code"]}.jpg";

			if( !file_exists($image_url) || empty($image_url)) $image_url = "img/bios/default.png";

			$image 	= "<img class='speaker-image ' src='{$image_url}'/>";

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
<body class='text-center hide-background subpage profile'>

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

					 // schedules-TODO: position, nick(?), some
					 if (!empty($profile_data["persons"])) {
						$bios = "<hr>\n";
						foreach ( $profile_data["persons"] as $key => $value) {
							$name				= ( empty( $value["public_name"] ) )?		"" : $value["public_name"];
							$position			= ( empty( $value->position ) )?	"" : ", ".$value->position;
							$bio				= ( empty( $value["biography"] ) )?			"" : $value["biography"];
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