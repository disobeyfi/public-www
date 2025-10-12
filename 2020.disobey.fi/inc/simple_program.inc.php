<?php
/*-------------------------
 Basically does same than profile.php,
 but outputs all profiles
 -----------------------*/
/*-------------------------
 FILE
 -----------------------*/
include('./inc/profiles/filenames.php');

$output = "";
/*-------------------------
 Get programs from json-files
 -----------------------*/
foreach ( $filenames as $key => $filename) {

	$profile_data = file_get_contents( "./inc/profiles/{$filename}.json" );
	$profile_data = json_decode( $profile_data );


	/*-------------------------
	 Content
	 -----------------------*/
	$title 		= ( empty( $profile_data->title ) )?    "" : "{$profile_data->title}";
	$subtitle	= ( empty( $profile_data->subtitle ) )? "" : "<h3>{$profile_data->subtitle}</h3>";
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

				$speakers .= "<div class='speaker text-center'><div class='speaker-container'><div class='flexed-item-container'><div class='image'>{$image}</div><p class=''>{$name}{$position}</p></div></div></div>";
		}

		$speakers = "<div class='speakers text-center'>{$speakers}</div>";
	}

	/*-------------------------
	 Output
	 -----------------------*/

	$output .=  "
		<div class='program-item cell large-6'>
			<div class='simple-program-header'>
				<a href='profile/{$filename}'><h1>{$title}</h1></a>
				<!-- {$subtitle} -->
			</div>
			<div class='simple-program-read-more'>
				<span class='sp-open-button'>More</span>
				<span class='sp-close-button'>Less</span>
			</div>
			{$content}
			{$speakers}
		</div>
	";

}

echo "<div id='simple-program' class=' grid-x grid-padding-x grid-margin-x grid-margin-y'>{$output}</div>";
?>
<script>
	$(".simple-program-read-more").on("click", function(){
		$(this).toggleClass("is-open")
		var synopsis = $(this).parent().find(".synopsis")
		synopsis.toggle();

	})

</script>
