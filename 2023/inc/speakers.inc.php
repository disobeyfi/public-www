<?php

$speakers = array(

	/*Day 1 main */
	array( "image"=>"jauhiainen", 	"name"=>"Juho \"Whois\" Jauhiainen",	'url'=>'losing_my_mental_health_in_cyber_security' ),
	array( "image"=>"harviainen", 	"name"=>"J. Tuomas Harviainen",			'url'=>'drug_traders_on_the_dark_web' ),
	array( "image"=>"vainikka", 	"name"=>"Ville Vainikka",				'url'=>'need_for_network_visibility' ),
	array( "image"=>"aalto", 		"name"=>"Henri Aalto",					'url'=>'need_for_network_visibility' ),
	array( "image"=>"avist", 		"name"=>"Pyry Åvist", 					'url'=>'i_am_a_weapon_of_the_mind' ),
	array( "image"=>"nagel", 		"name"=>"Benjamin Nagel",				'url'=>'locked_sky_boats' ),
	array( "image"=>"vallittu", 	"name"=>"Karo Vallittu",				'url'=>'building_cybersecurity_in_maritime_world' ),
	array( "image"=>"eronen", 		"name"=>"Jussi Eronen",					'url'=>'vulnerability_handling_for_the_masses' ),

	/* Day workshop 1 */
	array( "image"=>"kannisto", 	"name"=>"Joona Kannisto",		'url'=>'fault_injection_attacks'  ),
	array( "image"=>"koski", 		"name"=>"Tomi Koski",			'url'=>'fault_injection_attacks' ),
	array( "image"=>"kaustinen", 	"name"=>"Mika Kaustinen",		'url'=>'fault_injection_attacks'  ),
	array( "image"=>"hoikkala", 	"name"=>"Joona Hoikkala",		'url'=>'deep_dive_external_attack'  ),
	array( "image"=>"fernandez", 	"name"=>"Alexis Fernández",		'url'=>'deep_dive_external_attack' ),
	array( "image"=>"kirmanen", 	"name"=>"Jani Kirmanen",		'url'=>'fuzzing_complex_input_languages'  ),

	/* DAy 1 Community Stage */

	array( "image"=>"lehtonen", 	"name"=>"Markus Lehtonen",			'url'=>'dont_trust_the_link'  ),
	array( "image"=>"knud", 		"name"=>"Knud",						'url'=>'embedded_linux_device_bughunting'  ),
	array( "image"=>"sandroos", 	"name"=>"Lotta Sandroos", 			'url'=>'cyber_security_is_everyones_business' ),
	array( "image"=>"turmio", 		"name"=>"Mikko Kenttälä (Turmio)", 	'url'=>'have_u_been_invited' ),
	array( "image"=>"idanhurja", 	"name"=>"Idanhurja",				'url'=>'pwn_abloy_easy'  ),
	array( "image"=>"keogh", 		"name"=>"Matthew Keogh", 			'url'=>'dangers_of_service' ),
	array( "image"=>"maclean", 		"name"=>"Tom Taylor-MacLean",		'url'=>'dangers_of_service' ),
	array( "image"=>"gebhardt", 	"name"=>"Silvan Michael Gebhardt",	'url'=>'how_we_caused_a_route_leak' ),

	/* Day 2 main */
	array( "image"=>"andel", 		"name"=>"Edwin van Andel",	'url'=>'popopizza'  ),
	array( "image"=>"vestberg", 	"name"=>"Jonas Vestberg", 	'url'=>'finding_vulnerabilities_in_offensive' ),

	array( "image"=>"jones", 		"name"=>"Nick Jones",		'url'=>'stormy_skies'  ),
	array( "image"=>"windytan", 	"name"=>"windytan",			'url'=>'dont_mind_the_air_gap' ),
	array( "image"=>"lampila", 		"name"=>"Suvi Lampila", 	'url'=>'harvest_attackers_wont_wait' ),
	array( "image"=>"oksman", 		"name"=>"Aapo Oksman", 		'url'=>'your_connection_is_not_private' ),
	array( "image"=>"sarokaari", 	"name"=>"Niklas Särökaari", 'url'=>'a_look_behind_the_scenes' ),

	/* Day 2 Community Stage */
	array( "image"=>"kaye", 		"name"=>"Lindsay Kaye", 		'url'=>'turn_and_face_the_strange' ),
	array( "image"=>"niven", 		"name"=>"James Niven", 			'url'=>'turn_and_face_the_strange' ),
	array( "image"=>"juuti", 		"name"=>"Mika Juuti", 			'url'=>'deepfakes_through_the_lense' ),
	array( "image"=>"hietala", 		"name"=>"Leevi Hietala", 		'url'=>'yleisimpia_kompastuskivia' ),
	array( "image"=>"mikkola", 		"name"=>"Jouni Mikkola", 		'url'=>'techniques_observed_in_security_breache' ),
	array( "image"=>"belgers", 		"name"=>"Walter Belgers", 		'url'=>'hacking_a_magnetic_lock' ),
	array( "image"=>"viljanen", 	"name"=>"Lea Viljanen", 		'url'=>'hacking_the_audit_interview' ),
	array( "image"=>"paatero", 		"name"=>"Lauri Paatero", 		'url'=>'wtf_operational_technology' ),
	array( "image"=>"heurlin", 		"name"=>"Eero 'rambo' af Heurlin", 	'url'=>'beginner_experiences_in_reverse_engineering' ),

	/* Day 2 WORKSHOP */
	array( "image"=>"turunen", 		"name"=>"Helinä Turunen", 	'url'=>'cyber_comms_101' ),
	array( "image"=>"saman", 		"name"=>"SaMaN", 			'url'=>'smart_contract_bug_hunting' ),
	array( "image"=>"myllyla", 		"name"=>"Juuso Myllylä", 	'url'=>'threat_hunting_basics' ),
	array( "image"=>"bique", 		"name"=>"Maria Bique", 		'url'=>'hacking_citizen_awareness' ),
	array( "image"=>"catalui", 		"name"=>"Daria Catalui", 	'url'=>'hacking_citizen_awareness' )
);

?>
<!--- SPEAKERS -->
<div class='full-row clearfix lazyload translucent'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
	<section class="grid-container cell grid-y cell location text-center" id='speakers' >

		<div class="cell">
			<h1>Speakers</h1>
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
				$image_url 	= "img/bios/{$image_name}.jpg";

				if( !file_exists($image_url) ){
					$image_name = "default";
					$image_url = "img/bios/default.jpg";
				}

				$image 	= "<img class='speaker-image lazyload' data-src='{$image_url}' src='img/bios/default.jpg' />";


				$ratio 	= ( $image_name != "default" )? "large-2" : "large-6"; // large-4 id for no-image
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
					<div class='cell grid-x grid-margin-x large-auto small-12' id='speakers-no-img-container'>{$output_no_image}</div>
				</div>
			";

			?>

	</section>
</div>
