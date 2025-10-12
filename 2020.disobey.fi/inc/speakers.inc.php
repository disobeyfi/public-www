<!--- SPEAKERS -->
<div class='full-row clearfix lazyload translucent'  data-src='img/laptop.jpg' style='background-image:url( "" );'>
		<section class="grid-container cell grid-y cell location text-center" id='speakers' >
					<div class="cell">
						<h1>Speakers</h1>
					</div>
					<?php
						$speakers = array(
							array( "image"=>"jarno_niemela",
								"name"=>"Jarno Niemelä",
								'url'=>'cybersecurity_for_business_trips' ),

							array( "image"=>"antti_kurittu",
								"name"=>"Antti Kurittu",
								'url'=>'paradigm_shift' ),

							array( "image"=>"antti_virtanen",
								"name"=>"Antti Virtanen",
								'url'=>'i_m_in_your_office' ),

							array( "image"=>"whois",
								"name"=>"Juho 'whois' Jauhiainen",
								'url'=>'memory_forensics_101' ),

							array( "image"=>"mika",
								"name"=>"Mika",
								'url'=>'memory_forensics_101' ),

							array( "image"=>"topias_uotila",
								"name"=>"Topias Uotila",
								'url'=>'near_practical_quantum_computing' ),

							array( "image"=>"osku",
								"name"=>"Osku",
								'url'=>'basics_of_penetration' ),

							array( "image"=>"christopher_hernandez",
								"name"=>"Chris Hernandez",
								'url'=>'x86_isa_specific_malware' ),

							array( "image"=>"juho_nurminen",
								"name"=>"Juho Nurminen",
								'url'=>'app_setasdefaultrceclient' ),

							array( "image"=>"plant",
								"name"=>"Simon 'Plant programmer' Schliesky",
								'url'=>'deceive_yourself' ),

							array( "image"=>"a2nkf",
								"name"=>"Ilias 'A2nkF' Morad",
								'url'=>'deceive_yourself' ),

							array( "image"=>"default_image",
								"name"=>"Eran Zimmerman Gonen",
								'url'=>'shatter_reloaded' ),

							array( "image"=>"giovanni_rocca",
								"name"=>"Giovanni 'iGio90' Rocca",
								'url'=>'cracking_the_userspace' ),

							array( "image"=>"joohoi",
								"name"=>"joohoi",
								'url'=>'fuzzing_the_feb' ),

							array( "image"=>"kubecka",
								"name"=>"Chris Kubecka",
								'url'=>'more_than_turbulence' ),

							array( "image"=>"limonta",
								"name"=>"Gabriela Limonta",
								'url'=>'trustworthy_platforms_in_practice' ),

							array( "image"=>"helina",
								"name"=>"Helinä Turunen",
								'url'=>'adapt_your_infosec_message' ),

							array( "image"=>"hetti",
								"name"=>"Petar 'Hetti' Kosic",
								'url'=>'security_expedition_in_b0rkenLand' ),

							array( "image"=>"kirils",
								"name"=>"Kirils Solovjovs",
								'url'=>'noth1ng_t0_hid3' ),

							array( "image"=>"forstrom",
								"name"=>"Markus Forsström",
								'url'=>'shooting_ourselves_in_the_foot' ),

							array( "image"=>"frisk",
								"name"=>"Ulf Frisk",
								'url'=>'live_memory_attacks' ),

							array( "image"=>"oikarinen",
								"name"=>"Anne Oikarinen",
								'url'=>'privacy_threat_modeling' ),

							array( "image"=>"tuisku",
								"name"=>"Tuisku Sarrala",
								'url'=>'privacy_threat_modeling' ),

							array( "image"=>"tuovinen",
								"name"=>"Jussi 'TuoJussi' Tuovinen",
								'url'=>'leading_your_red_team' ),

							array( "image"=>"frilander",
								"name"=>"Kimmo Frilander",
								'url'=>'leading_your_red_team' ),

							array( "image"=>"niklas",
								"name"=>"Niklas Särökaari",
								'url'=>'identifying_attack_paths_with_bloodhound' ),

							array( "image"=>"henri",
								"name"=>"Henri Nurmi",
								'url'=>'identifying_attack_paths_with_bloodhound' ),

							array( "image"=>"rasmus",
								"name"=>"Rasmus 'razu' Männa",
								'url'=>'game_of_shells' ),

							array( "image"=>"taavi",
								"name"=>"Taavi Sonets",
								'url'=>'game_of_shells' ),

							array( "image"=>"rikujuu",
								"name"=>"Riku Juurikko",
								'url'=>'weaponizing_information' ),

							array( "image"=>"vakkala",
								"name"=>"Lauri 'OpEs' Vakkala",
								'url'=>'weaponizing_information' ),

							array( "image"=>"bui",
								"name"=>"Thanh Bui",
								'url'=>'we_pwn_vpn' ),

							array( "image"=>"rao",
								"name"=>"Sid Rao",
								'url'=>'we_pwn_vpn' ),

							array( "image"=>"antikainen",
								"name"=>"Markku Antikainen",
								'url'=>'we_pwn_vpn' ),

							array( "image"=>"bearsby",
								"name"=>"Robert Bearsby",
								'url'=>'lets_get_physical' ),

							array( "image"=>"hirvonen",
								"name"=>"Timo Hirvonen",
								'url'=>'lets_get_physical' ),

							array( "image"=>"schloh",
									"name"=>"Michael Schloh",
									'url'=>'secure_elements_and_disclosure' ),


							array( "image"=>"liisa",
											"name"=>"Liisa Tallinn",
											'url'=>'fun_with_logs' ),

							array( "image"=>"albert",
											"name"=>"Albert Zsigovits",
											'url'=>'darkratv2' ),

							array( "image"=>"kliment",
											"name"=>"Kliment",
											'url'=>'smd_assembly' ),

							array( "image"=>"karoliina_kemppainen",
											"name"=>"Karoliina Kemppainen",
											'url'=>'bad_day_of_forensic_analyst' ),

							array( "image"=>"default_image",
											"name"=>"Kimmo Linnavuo",
											'url'=>'bad_day_of_forensic_analyst' )




						);

						$output_with_image 	= "";
						$output_no_image 		= "";

						/*-------------------------
						 Loop images
						 -----------------------*/
						foreach ($speakers as $key => $value) {

							$image 	= ( $value['image'] != "default" )? "<img class='speaker-image lazyload' data-src='img/bios/{$value['image']}.jpg' src='img/bios/default.jpg' />" : "";
							$ratio 	= ( $value['image'] != "default" )? "large-2" : "large-4";
							$url 		= ( empty( $value['url']) )? "#" : "profile/" . $value['url'];

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
