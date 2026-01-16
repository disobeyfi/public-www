<?php

// speakers adapted from schedule_data.php


$schedule_data = json_decode(file_get_contents("./inc/schedule.json"), true)["schedule"]["conference"];

function checkIfNameExists( $name ){

	global $speakers;
	foreach( $speakers as $speaker ){
		if( $speaker['name'] == $name ){
			return true;
		}
	}

}

function getSpeakersData( $roomname, $dayindex ){

	global $schedule_data, $speakers;

	foreach ($schedule_data["days"] as $day) {

		if ($day["index"] != $dayindex) continue;
	
		foreach ($day["rooms"] as $room => $roomdata) {
	
			if ($room != $roomname) continue;

			foreach ($roomdata as $event) {
				
				$slug = $event["slug"];

				// add to speakers if not there already
				if( !empty($event["persons"]) ){
					foreach ($event["persons"] as $person) {
						if( checkIfNameExists( $person["public_name"] ) ){ continue; }
						$speakers[] = [ "name" => $person["public_name"], "image" => $person["code"], "url" => $slug ];
					}
				}

			}
		}
	}	
}

$speakers = array();

getSpeakersData("Security Forum", 1);
getSpeakersData("Terminal Stage", 1);
getSpeakersData("Security Theater", 1);
getSpeakersData("Security Forum", 2);
getSpeakersData("Terminal Stage", 2);
getSpeakersData("Security Theater", 2);


//print_r($speakers);

?>
<!--- SPEAKERS -->
<div class='full-row clearfix lazyload translucent'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
	<section class="grid-container cell grid-y cell location text-center" id='speakers' >

		<div class="cell">
			<h1 class='red'>Speakers</h1>
		</div>

		<?php
			/*-------------------------
				Output all speakers ->
				with no image at the end
				-----------------------*/

			$output_with_image 	= "";
			$output_no_image 		= "";

			/*-------------------------
				Loop images
				-----------------------*/
			foreach ($speakers as $key => $value) {


				$image_name =  ( empty( $value['image'] ) )? "default" : $value['image'];
				$image_url 	= "img/bios/bio_{$image_name}.jpg";

				if( !file_exists($image_url) ){
					$image_name = "default";
					$image_url = "img/bios/default.jpg";
				}

				$image 	= "<img class='speaker-image lazyload red' data-src='{$image_url}' src='img/bios/default.jpg' />";


				$ratio 	= ( $image_name != "default" )? "large-2" : "large-2"; // large-4 id for no-image
				$url 	= ( empty( $value['url']) )? "#" : "{$baseurl}profile/{$value['url']}";

				$output ="
							<div class='cell {$ratio} small-6' >
								<a class='speaker-link' href='{$url}'>
									{$image}
									<h1>{$value['name']}</h1>
								</a>
							</div>
				";

				/* Put default image to the end */
				if(  $image_name == "default" ){
					$output_no_image .= $output;
				}else{
					$output_with_image .= $output;
				}

			}

			/*-------------------------
				Output
				-----------------------*/
			echo "
				<div class='speaker-container grid-x grid-padding-x grid-margin-x' id='speakers-with-img-container'>
					{$output_with_image}
					{$output_no_image}
				</div>
			";

			?>

	</section>
</div>
