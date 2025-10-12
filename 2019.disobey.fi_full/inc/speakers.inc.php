<!--- SPEAKERS -->
<div class='full-row clearfix lazyload translucent'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
		<section class="grid-container cell grid-y cell location text-center" id='speakers' >
					<div class="cell">
						<h1>Speakers</h1>
					</div>
<!-- 							array( "image"=>"ben_sadeghipour", 		"name"=>"Ben Sadeghipour" ), -->
					<?php
						$speakers = array(
							array( "image"=>"harry_sintonen", 		"name"=>"Harry Sintonen",		'url'=>'weaponizin_xx_vulnerability' ),
							array( "image"=>"arden_meyer", 				"name"=>"Arden Meyer",		'url'=>'privilege_escalation' ),
							array( "image"=>"timo_hirvonen", 			"name"=>"Timo Hirvonen",		'url'=>'ghost_in_the_locks' ),

							array( "image"=>"juha_nurmi", 				"name"=>"Juha Nurmi" ),
							array( "image"=>"sini_ruohomaa", 						"name"=>"Sini Ruohomaa",		'url'=>'securing_crypto_deployments' ),
							array( "image"=>"antti_kurittu", 			"name"=>"Antti Kurittu",		'url'=>'social_cyber_attacks' ),
							array( "image"=>"tomi_tuominen", 			"name"=>"Tomi Tuominen",		'url'=>'ghost_in_the_locks' ),

							array( "image"=>"christine_bejerasco", 	"name"=>"Christine Bejerasco",	'url'=>'think_security' ),
							array( "image"=>"zoltan_balazs", 				"name"=>"Zoltan Balazs",				'url'=>'how_to_hide_your_browser_0_day'  ),
							array( "image"=>"phillip_krenn", 				"name"=>"Phillip Krenn",				'url'=>'phillip_krenn' ),
							array( "image"=>"juho_nurminen", 				"name"=>"Juho Nurminen",				'url'=>'juho_nurminen'  ),
							array( "image"=>"tuuli_siiskonen", 			"name"=>"Tuuli Siiskonen",			'url'=>'red_teaming_for_fun'  ),


							array( "image"=>"anne_oikarinen", 			"name"=>"Anne Oikarinen",			'url'=>'hands_on_threat_modeling'  ),
							array( "image"=>"nadine_torralba", 			"name"=>"Nadin Torralba",			'url'=>'hands_on_threat_modeling'  ),
							array( "image"=>"laura_kankaala", 			"name"=>"Laura Kankaala", 		'url'=>'think_security' ),
							array( "image"=>"laura_noukka", 				"name"=>"Laura Noukka", 			'url'=>'think_security' ),

							array( "image"=>"topias_uotila", 				"name"=>"Topias Uotila",			'url'=>'quantum_computing'  ),

							array( "image"=>"falvia_sebeni", 				"name"=>"Flavia Sebeni",				'url'=>'mobile_core_network_honeypot'),
							array( "image"=>"karmina_aquino", 			"name"=>"Karmina Aquino", 		'url'=>'think_security' ),

							array( "image"=>"alexander_forbes", 		"name"=>"Alexander Forbes",	'url'=>'jackpotting_atms' ),
							array( "image"=>"joona_hoikkala", 			"name"=>"Joona Hoikkala",			'url'=>'setting_up_x509_infrastructrure' ),

							array( "image"=>"shamil_alifov", 					"name"=>" Shamil Alifov",				'url'=>'all_your_bases_are_belong_to_us'  ),
							array( "image"=>"philip_homburg", "name"=>"Philip Homburg", 'url'=>'dnssec_local_validation' ),

							array( "image"=>"default", 							"name"=>"Lea Viljanen",							'url'=>'bug_bounting_web_applications'  ),
							array( "image"=>"default", 							"name"=>"Antti Virtanen",						'url'=>'antti_virtanen' ),
							array( "image"=>"default", 							"name"=>"Silke Holtmanns", 					'url'=>'mobile_core_network_honeypot' )
						);

						$output_with_image 	= "";
						$output_no_image 		= "";

						/*-------------------------
						 Loopp images
						 -----------------------*/
						foreach ($speakers as $key => $value) {

							$image 	= ( $value['image'] != "default" )? "<img class='speaker-image lazyload' data-src='img/bios/{$value['image']}.jpg' src='img/bios/default.jpg' />" : "";
							$ratio 	= ( $value['image'] != "default" )? "large-2" : "large-4";
							$url 		= ( empty( $value['url']) )? "#" : "profile.php?profile=" . $value['url'];

							$output ="

										<div class='cell {$ratio} small-6' >
											<a class='speaker-link' href='{$url}'>
											{$image}
											<h1>{$value['name']}</h1>
											</a>
										</div>

							";

							if(  $value['image'] == "default" ){
								$output_no_image .= $output;
							}else{
								$output_with_image .= $output;
							}

						}

						/*-------------------------
						 Output
						 -----------------------*/
						echo "<div class='speaker-container grid-x grid-padding-x grid-margin-x' id='speakers-with-img-container'>
								{$output_with_image}
								<div class='cell grid-x grid-margin-x large-auto small-12' id='speakers-no-img-container'>{$output_no_image}</div>
							</div>";

					 ?>

		</section>
</div>
