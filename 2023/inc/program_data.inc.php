<?php
/*-------------------------
 Timetable data
 -----------------------*/
/*-------------------------
 Day 1
 -----------------------*/

$main_day_1 = [
	['id' => 106, 'time'=>'11:30', 'length'=>'2', 'header'=>'Doors open & registration', 'name'=>'', 'url' => '', "guid" => "41f9d291-a87f-5d92-b540-123f4976c6a5"],
	['id' => 108, 'time'=>'12:30', 'length'=>'2', 'header'=>'Opening', 'name'=>'NotMyNick', 'url' => '', "guid" => "36e8e127-c41a-5504-9609-1ab119a7f276"],
	['id' => 31, 'time'=>'13:00', 'length'=>'4', 'classes'=>'keynote', 'header'=>'KEYNOTE', 'name'=>'Antti Kurittu', 'url' => 'keynote_kurittu' ],
	['id' => 34, 'time'=>'14:15', 'length'=>'4', 'header'=>'Losing My Mental Health in Cyber Security', 'name'=>'Juho "Whois" Jauhiainen', 'url' => 'losing_my_mental_health_in_cyber_security' ],
	['id' => 45, 'time'=>'15:30', 'length'=>'2', 'header'=>'Drug Traders on the Dark Web', 'name'=>'J. Tuomas Harviainen', 'url' => 'drug_traders_on_the_dark_web' ],

	['id' => 75, 'time'=>'17:00', 'length'=>'4', 'header'=>'Need for network visibility in the age of modern EDR', 'name'=>'Ville Vainikka, Henri Aalto', 'url' => 'need_for_network_visibility' ],
	['id' => 89, 'time'=>'18:15', 'length'=>'2', 'header'=>'I am a weapon of the mind', 'name'=>'Pyry Åvist', 'url' => 'i_am_a_weapon_of_the_mind' ],
	['id' => 28, 'time'=>'19:00', 'length'=>'3', 'header'=>'Locked Sky Boats (simplified)', 'name'=>'Benjamin Nagel' , 'url' => 'locked_sky_boats'],
	['id' => 38, 'time'=>'20:00', 'length'=>'4', 'header'=>'Building cybersecurity in maritime world, a story of SVAN', 'name'=>'Karo Vallittu', 'url' => 'building_cybersecurity_in_maritime_world' ],
	['id' => 88, 'time'=>'21:15', 'length'=>'4', 'header'=>'Vulnerability handling for the masses', 'name'=>'Jussi Eronen', 'url' => 'vulnerability_handling_for_the_masses' ],

	['id' => 112, 'time'=>'23:00', 'length'=>'2', 'header'=>'DOORS CLOSE 23:00', 'name'=>'', 'url' => '', "guid" => "e9f9ebfa-d12b-5499-bfd7-7c440b07054c"]
];
/* Workshop 1 */
$w1_day_1 = [
	['time'=>'13:00', 'length'=>'4', 'classes' => 'keynote-stream', 'header'=>'KEYNOTE STREAM', 'name'=>'', 'url' => 'keynote_kurittu' ],
	['id' => 44, 'time'=>'14:00', 'length'=>'8', 'header'=>'Hands-on Workshop on Fault Injection Attacks', 'name'=>'Joona Kannisto, Tomi Koski,  Mika Kaustinen', 'url' => 'fault_injection_attacks' ],
	['id' => 37, 'time'=>'16:00', 'length'=>'16', 'header'=>'Deep Dive: External Attack Surface Mapping and how to SCALE IT UP', 'name'=>'Joona Hoikkala, Alexis Fernández', 'url' => 'deep_dive_external_attack' ],
	['id' => 43, 'time'=>'20:00', 'length'=>'8', 'header'=>'Fuzzing complex input languages using context-free grammars', 'name'=>'Jani "Aivo" Kirmanen', 'url' => 'fuzzing_complex_input_languages'  ],
];

/* COMMUNITY STAGE */
$w2_day_1 = [
	['time'=>'13:00', 'length'=>'4', 'classes' => 'keynote-stream', 'header'=>'KEYNOTE STREAM', 'name'=>'', 'url' => 'keynote_kurittu' ],
	['id' => 50, 'time'=>'14:00', 'length'=>'2', 'header'=>'Don\'t trust the link', 'name'=>'Markus Lehtonen', 'url' => 'dont_trust_the_link' ],
	['id' => 49, 'time'=>'14:45', 'length'=>'4', 'header'=>'Embedded Linux device bughunting', 'name'=>'knud', 'url' => 'embedded_linux_device_bughunting'  ],
	['time'=>'15:45', 'length'=>'4', 'header'=>'Lightning Talk', 'name'=>'', 'url' => ''  ],
	['id' => 58, 'time'=>'17:15', 'length'=>'2', 'header'=>'Cyber Security is everyone\'s business', 'name'=>'Lotta Sandroos', 'url' => 'cyber_security_is_everyones_business' ],
	['id' => 95, 'time'=>'18:00', 'length'=>'2', 'header'=>'Have U Been Invited? My journey to find and chain macOS vulns', 'name'=>'Mikko Kenttälä (Turmio)', 'url'=>'have_u_been_invited' ],

	['id' => 46, 'time'=>'18:45', 'length'=>'4', 'header'=>'pwn Abloy Easy: Case study if it is possible to pick the latest Abloy mechanical lock model', 'name'=>'Idanhurja', 'url'=>'pwn_abloy_easy' ],

	['id' => 66, 'time'=>'20:45', 'length'=>'2', 'header'=>'Dangers of Service as a Principal - AWS', 'name'=>'Matthew Keogh, Tom Taylor-MacLean', 'url' => 'dangers_of_service' ],
	['id' => 54, 'time'=>'21:30', 'length'=>'2', 'header'=>'How we caused a route leak - anatomy of a routing incident', 'name'=>'Silvan Michael Gebhardt', 'url' => 'how_we_caused_a_route_leak' ]
];

/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_1 = [];

/*-------------------------
 Day 2
 -----------------------*/

$main_day_2 = [
	['id' => 107, 'time'=>'10:00', 'length'=>'4', 'header'=>'Doors open & registration', 'name'=>'' , 'url' => '', "guid" => "770c6d00-ccdd-547d-83ec-6ac9e94aee47"],
	['id' => 59, 'time'=>'11:00', 'length'=>'4', 'header'=>'Popopizza - How to break the Dutch police bodycams for fun and pizza', 'name'=>'Edwin van Andel' , 'url' => 'popopizza'],
	['id' => 97, 'time'=>'13:00', 'length'=>'4', 'header'=>'KEYNOTE', 'classes'=>'keynote', 'name'=>'Connie McIntosh' , 'url' => 'keynote_mcintosh'],
	['id' => 92, 'time'=>'14:15', 'length'=>'4', 'header'=>'Finding vulnerabilities in offensive security tooling', 'name'=>'Jonas Vestberg', 'url' => 'finding_vulnerabilities_in_offensive' ],
	['id' => 93, 'time'=>'15:30', 'length'=>'4', 'header'=>'Stormy Skies: Modern Cloud Attacks and their Countermeasures', 'name'=>'Nick Jones', 'url' => 'stormy_skies' ],

	['id' => 91, 'time'=>'17:15', 'length'=>'3', 'header'=>'Don\'t mind the air gap - Maximizing exfiltration speeds via HDMI TEMPEST', 'name'=>'windytan', 'url' => 'dont_mind_the_air_gap'],
	['id' => 63, 'time'=>'18:00', 'length'=>'4', 'header'=>'Harvest attackers won\'t wait for post-quantum standards - neither should you', 'name'=>'Suvi Lampila', 'url' => 'harvest_attackers_wont_wait' ],
	['id' => 68, 'time'=>'19:15', 'length'=>'4', 'header'=>'Your connection is not private - Exploiting insecure certificate validation in TLS clients', 'name'=>'Aapo Oksman', 'url' => 'your_connection_is_not_private' ],
	['id' => 65, 'time'=>'20:30', 'length'=>'2', 'header'=>'A Look Behind the Scenes: Responding to a Security Incident', 'name'=>'Niklas Särökaari', 'url' => 'a_look_behind_the_scenes' ],
	['id' => 110, 'time'=>'21:30', 'length'=>'2', 'header'=>'Closing remarks and Awards Ceremony', 'name'=>'NotMyNick', 'url' => '', "guid" => "f07339d6-32fc-59d8-b342-b430df27607f"],

	['id' => 111, 'time'=>'23:00', 'length'=>'2', 'header'=>'DOORS CLOSE 23:00', 'name'=>'', 'url' => '', "guid" => "e5761a7d-43a0-5582-be0e-6029bd35c38d"],

	['time'=>'23:30', 'length'=>'2', 'header'=>'Afterparty', 'name' => 'Biitsi Salmisaari, Energiakatu 3 (doors open at 20:00). Overflow parties at Clarion and Huutokonttori.', 'url' => '' ]

];

/* Community Stage */
$w2_day_2 = [
	['id' => 32, 'time'=>'11:30', 'length'=>'2', 'header'=>'Turn and Face the Strange: Ch-Ch-Changes in Ransomware Techniques', 'name'=>'Lindsay Kaye, James Niven', 'url' => 'turn_and_face_the_strange' ],
	['id' => 39, 'time'=>'12:15', 'length'=>'2', 'header'=>'Deepfakes through the lense of an adversary model', 'name'=>'Mika Juuti', 'url' => 'deepfakes_through_the_lense' ],
	['time'=>'13:00', 'length'=>'4', 'header'=>'KEYNOTE STREAM', 'name'=>'', 'classes'=>'keynote-stream', 'url' => 'keynote_mcintosh'],
	['id' => 69, 'time'=>'14:00', 'length'=>'2', 'header'=>'Yleisimpiä kompastuskiviä Katakri auditoinneissa', 'name'=>'Leevi Hietala', 'url' => 'yleisimpia_kompastuskivia' ],

	['id' => 79, 'time'=>'16:00', 'length'=>'2', 'header'=>'Techniques observed in security breaches and defending against them', 'name'=>'Jouni Mikkola', 'url' => 'techniques_observed_in_security_breache' ],
	['id' => 51, 'time'=>'17:30', 'length'=>'4', 'header'=>'Hacking a magnetic lock: successes and failures', 'name'=>'Walter Belgers', 'url' => 'hacking_a_magnetic_lock' ],
	['id' => 56, 'time'=>'18:45', 'length'=>'4', 'header'=>'Hacking the audit interview', 'name'=>'Lea Viljanen', 'url' => 'hacking_the_audit_interview' ],
	['id' => 76, 'time'=>'19:45', 'length'=>'2', 'header'=>'IEC62443-4-2-wtf? Operational Technology Device Security', 'name'=>'Lauri Paatero', 'url' => 'wtf_operational_technology' ],
	['id' => 29, 'time'=>'20:30', 'length'=>'2', 'header'=>'Beginner experiences in reverse engineering a (simple) BLE protocol', 'name'=>'Eero "rambo" af Heurlin', 'url' => 'beginner_experiences_in_reverse_engineering' ],
];

$w1_day_2 = [
	['id' => 47, 'time'=>'10:45', 'length'=>'8', 'header'=>'Cyber comms 101 - What to say when cyber hits the fan', 'name'=>'Helinä Turunen', 'url' => 'cyber_comms_101' ],
	['time'=>'13:00', 'length'=>'4', 'header'=>'KEYNOTE STREAM', 'name'=>'', 'classes'=>'keynote-stream', 'url' => 'keynote_mcintosh'],
	['id' => 62, 'time'=>'14:15', 'length'=>'12', 'header'=>'Smart Contract Bug Hunting 101 - Ethereum Edition', 'name'=>'SaMaN', 'url' => 'smart_contract_bug_hunting' ],
	['id' => 48, 'time'=>'17:30', 'length'=>'8', 'header'=>'Threat hunting basics', 'name'=>'Jouni Mikkola, Juuso Myllylä', 'url' => 'threat_hunting_basics' ],
	['id' => 60, 'time'=>'19:45', 'length'=>'7', 'header'=>'Hacking Citizen Awareness', 'name'=>'Maria Bique, Daria Catalui', 'url' => 'hacking_citizen_awareness' ]
];


/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_2 = [];
?>
