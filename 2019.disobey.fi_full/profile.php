<?php

/*-------------------------
 FILE
 -----------------------*/
$filenames = ['phillip_krenn',
'juho_nurminen',
'antti_virtanen',
'hands_on_threat_modeling',
'red_teaming_for_fun',
'bug_bounting_web_applications',
'ghost_in_the_locks',
'think_security',
'jackpotting_atms',
'social_cyber_attacks',
'how_to_hide_your_browser_0_day',
'quantum_computing',
'privilege_escalation',
'mobile_core_network_honeypot',
'setting_up_x509_infrastructrure',
'weaponizin_xx_vulnerability',
'all_your_bases_are_belong_to_us',
'securing_crypto_deployments',
'portsmash', 
'dnssec_local_validation'
];

if( empty($_GET['profile']) ) 										die("");
if ( !in_array( $_GET['profile'], $filenames) ) 	die("");

$filename = $_GET['profile'];

$profile_data = file_get_contents( "inc/profiles/{$filename}.json" );
$profile_data = json_decode( $profile_data );

/*-------------------------
 Content
 -----------------------*/
$title 		= ( empty( $profile_data->title ) )? 		"" : "{$profile_data->title}";
$content 	= ( empty( $profile_data->synopsis ) )? "" : "<div class='synopsis'>{$profile_data->synopsis}</div>";
$content 	= nl2br($content);
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
			$name 		= ( empty( $value->name ) )? 			"" : $value->name;
			$position = ( empty( $value->position ) )? 	"" : $value->position;
			$image 		= ( empty( $value->img ) )? 			"" : "<img class='speaker-image ' src='img/bios/{$value->img}.jpg'/>";

			$speakers .= "<div class='speaker {$single_css} {$columns} text-left'>{$image}<p class=''>{$name}{$position}</p></div>";
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
					<?php echo $speakers; ?>
				</div>

				<div class="cell text-left">
					<?php echo $content; ?>
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
