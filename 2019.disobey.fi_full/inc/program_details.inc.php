<?php

	/*-------------------------
	 SCHEDULE VIEW OUTPUT
	 -----------------------*/
	 /*
	 v = cell value
	 c = css classes
	 cp = cellspan for table
	 rp = rowspan for table
 */
	function outputSchedule( $data ){
		$output = "";

		foreach( $data as $row){

			//Make single rows
			$row_output = "";
			foreach ($row as $key => $value) {
				if( !empty( $value ) ){

					$v 				= ( empty($value['v']) )? 		"" : $value['v'];
					$cp 			= ( empty($value['cp']) )? 		"" : $value['cp'];
					$rp 			= ( empty($value['rp']) )? 		"" : $value['rp'];
					$c 				= ( empty($value['c']) )? 		"" : $value['c'];
					$url 			= ( empty($value['url']) )? 	"" : $value['url'];
					$has_url 	= ( empty($url) )? 	"" : "pointer";
					$content 	= ( empty($url) )? "{$v}" : "<a href='profile.php?profile={$url}'>{$v}</a>";
					$on_click	= ( empty($url) )? "" : "onclick='window.location.href=" . '"profile.php?profile='.$url.'"'."'";

					$row_output .= "<td class='{$c} {$has_url}' colspan='{$cp}' rowspan='{$rp}' {$on_click} >{$content}</td>";
				}
			}
			$output .= "<tr>{$row_output}</tr>";
		}

		return "<table>{$output}</table>";
	}

	/*-------------------------
	 DAY ONE DATA
	 -----------------------*/
	$data_day_1 = [

		[
				["v"=>"TIME","c"=>"time header"],
				["v"=>"Main Stage day 1","c"=>"main header"],
				["v"=>"Overflow Workshop room day 1", "c"=>"header"],
				["v"=>"Deadlock Workshop Room day 1", "c"=>"header"]
		],

		[ ["v"=>"12:00-13:30","c"=>"time"],			["v"=>"Doors opening, Registration", "c"=>"main pre", "cp"=>"3"] 				],

		[ ["v"=>" 13:30-14:00","c"=>"time"],		["v"=>"Opening <label>NotMyNick</label>", "c"=>"main", "cp"=>"3"] ],

		[
				["v"=>"14:00-14:30","c"=>"time"],
				["v"=>"Weaponizing XX Vulnerability <label>Harry Sintonen</label>", "c"=>"main", "url"=>"weaponizin_xx_vulnerability"],
				["v"=>"Setting up a perfect x509 CMI using acme-dns <label>Joona Hoikkala</label>", "rp"=>"5", "url"=>"setting_up_x509_infrastructrure" ],
				["v"=>"Red teaming for fun and education <label>Tuuli Siiskonen</label>", "rp"=>"2", "url"=>"red_teaming_for_fun"]
		],

		[ ["v"=>"14:30-14:45","c"=>"time"],	["v"=>"Break", "c"=>"main break"] ],

		[
				["v"=>"14:45-15:15","c"=>"time"],
				["v"=>"Starting from scratch – Mobile Core Network Honeypot <label>Silke Holtmanns, Falvia Sebeni</label>", "c"=>"main", "rp"=>"2",  "url"=>"mobile_core_network_honeypot"],
				["v"=>"Break", "c"=>"break"]
		],
		[
				["v"=>"15:15-15:45","c"=>"time"],
				["v"=>"Architecture threat analysis on car heater <label>Tuuli Siiskonen</label>","c"=>"column_3", "rp"=>"2"]
		],
		[
				["v"=>"15:45-16:00","c"=>"time"],
				["v"=>"Break", "c"=>"main break"]
		],
		[
				["v"=>"16:00-17:00","c"=>"time"],
				["v"=>"Ghost in the locks -- Owning electronic locks without leaving a trace <label>Tomi & Timo</label>", "c"=>"main", "url"=>"ghost_in_the_locks"],
				["v"=>"Break", "c"=>"break" ],
				["v"=>"Break", "c"=>"break"]
		],

		[
			["v"=>"17:00-17:15","c"=>"time"],
			["v"=>"Break", "c"=>"main break" ],
			["v"=>"Let's pwn a Chinese web browser!<label>Juho Nurminen</label> ", "rp"=>"8", "url"=>"juho_nurminen"  ],
			["v"=>"Bug Bounting Web Applications <label>Lea Viljanen</label>", "rp"=>"5", "url"=>"bug_bounting_web_applications" ],
		],
		[
				["v"=>"17:15-17:45","c"=>"time"],
				["v"=>"History and Future of Online Anonymity and Tor <label>Juha Nurmi</label>", "c"=>"main","rp"=>"2"]
		],

		[	["v"=>"17:45-18:15","c"=>"time"] ],

		[
				["v"=>"18:15-18:30","c"=>"time"],
				["v"=>"Break", "c"=>"main break"]
		],

		[
				["v"=>"18:30-19:00","c"=>"time"],
				["v"=>"Securing crypto deployments <label>Sini Ruohomaa</label>", "c"=>"main","rp"=>"2", "url"=>"securing_crypto_deployments" ]
		],
		[
				["v"=>"19:00-19:30","c"=>"time"],
				["v"=>"Break", "c"=>"break", "rp"=>"2"]
		],
		[
				["v"=>"19:30-19:45","c"=>"time"],
				["v"=>"Break", "c"=>"main break"]
		],
		[
				["v"=>"19:45-20:45","c"=>"time"],
				["v"=>"Super Smash Ports. Ultimate! <label>Cesar Pereida García & Nicola Tuveri</label>", "c"=>"main", "rp"=>"1", "url"=>"portsmash"],
				["v"=>"Lightning Talks","c"=>"column_3", "rp"=>"1"]
		],
		[
				["v"=>"20:45-21:00","c"=>"time"],
				["v"=>"Break", "c"=>"main break", "cp"=>"3"]
		],
		[
				["v"=>"21:00-late","c"=>"time"],
				["v"=>"Party at the location <label>Mariella &amp; Timo Pudas <br/>Blastromen</label>", "c"=>"main", "cp"=>"3"]
		],
	];

	/*-------------------------
	 DAY TWO DATA
	 -----------------------*/
	$data_day_2 = [

		[
				["v"=>"TIME","c"=>"time header"],
				["v"=>"Main Stage day 1","c"=>"main header"],
				["v"=>"Overflow Workshop Room day 2", "c"=>"header"],
				["v"=>"Deadlock Workshop Room day 2", "c"=>"header"]
		],

		[ ["v"=>"10:00-11:00","c"=>"time"],	["v"=>"Doors, Opening, Registration", "cp"=>"3", "c"=>"pre"]	],

		[
			["v"=>"11:00-12:00","c"=>"time"],
			["v"=>"", "c"=>"main pre"],
			["v"=>"Think Security <label>Laura Kankaala, Karmina Aquino, Christine Bejerasco and Laura Noukka</label>", "rp"=>"5", "url"=>"think_security"],
			["v"=>"", "c"=>"column_3 pre"]
		],

		[
			["v"=>"12:00-12:30","c"=>"time"],
			["v"=>"Social cyberattacks  <label>Antti Kurittu</label>", "c"=>"main", "rp"=>"2", "url"=>"social_cyber_attacks"],
			["v"=>"BlackHat Python <label>Antti Virtanen</label>", "c"=>"column_3", "rp"=>"4", "url"=>"antti_virtanen"]
		],

		[ ["v"=>"12:30- 13:00","c"=>"time"] ],

		[ ["v"=>" 13:00- 13:30","c"=>"time"],			["v"=>"Break", "c"=>"main break"] ],

		[ ["v"=>" 13:30-14:00","c"=>"time"],		["v"=>"Privilege Escalation in Mechanical Master-Key Systems - Arden Meyer", "c"=>"main", "url"=>"privilege_escalation"] ],

		[
				["v"=>"14:00-14:45","c"=>"time"],
				["v"=>"Lunch break", "c"=>"main break lunch","cp"=>"3"]
		],

		/*----------- KEY NOTE AND BREAK---------*/
		[
				["v"=>"14:45-15:45","c"=>"time"],
				["v"=>"KEYNOTE - Christine Bejerasco", "c"=>"main keynote", "cp"=>"3"]
		],
		[
				["v"=>"15:45-16:00","c"=>"time"],
				["v"=>"Break", "c"=>"main break","cp"=>"3"]
		],

		[
				["v"=>"16:00-16:30","c"=>"time"],
				["v"=>"How to hide your browser 0-day <label>Zoltan Balazs</label>", "c"=>"main", "rp"=>"2", "url"=>"how_to_hide_your_browser_0_day" ],
				["v"=>"Quantum Computing for Developers<label>Topias Uotila</label>", "rp"=>"8", "url"=>"quantum_computing" ],
				["v"=>"Hands-on Threat Modeling - Securing Your Software Design <label>Anne Oikarinen and Nadin Torralba</label>","rp"=>"8", "url"=>"hands_on_threat_modeling" ]
		],
		[	["v"=>"16:30-17:00","c"=>"time"] ],

		[ ["v"=>"17:00-17:15","c"=>"time"], ["v"=>"Break", "c"=>"main break" ] ],

		[
				["v"=>"17:15-17:45","c"=>"time"],
				["v"=>"Scale Your Auditing Events <label>Phillip Krenn</label>", "c"=>"main","rp"=>"2", "url"=>"phillip_krenn"]
		],

		[
				["v"=>"17:45-18:15","c"=>"time"]
		],
		[
				["v"=>"18:15-18:30","c"=>"time"],
				["v"=>"Break", "c"=>"main break"]
		],

		[
				["v"=>"18:30-19:00","c"=>"time"],
				["v"=>"All your bases are belong to us <label>Shamil Alifov</label>", "c"=>"main", "url"=>"all_your_bases_are_belong_to_us" ]
		],
		[
				["v"=>"19:00-19:15","c"=>"time"],
				["v"=>"Break", "c"=>"break"]
		],
		[
				["v"=>"19:15-20:00","c"=>"time"],
				["v"=>"Jackpotting ATM's (Automated Teller Machines) - Its easier than you might think  <label>Alexander Forbes</label>", "c"=>"main", "rp"=>"2", "url"=>"jackpotting_atms"],
				["v"=>"Break", "c"=>"break", "rp"=>"1"],
				["v"=>"Break", "c"=>"break", "rp"=>"1"]
		],
		[
				["v"=>"20:00-20:15","c"=>"time"],
				["v"=>"Lightning Talks","c"=>"column_2", "rp"=>"4"],
				["v"=>"Lightning Talks","c"=>"column_3", "rp"=>"4"]
		],
		[
				["v"=>"20:15-20:30","c"=>"time"],
				["v"=>"Break", "c"=>"main break"]
		],
		[
				["v"=>"20:30-21:30","c"=>"time"],
				["v"=>"DNSSEC local validation: using the getdns library to verify DNS results in an application  <label>Philip Homburg</label>", "c"=>"main double", "rp"=>"1", "url"=>"dnssec_local_validation"]
		],
		[
				["v"=>"21:30-21:45","c"=>"time"],
				["v"=>"Break", "c"=>"main break","cp"=>"3"]
		],
		[
				["v"=>"21:45-22:00","c"=>"time"],
				["v"=>"Closing remarks <label>NotMyNick</label>", "c"=>"main", "cp"=>"3"]
		],
		[
				["v"=>"22:00-04:00","c"=>"time"],
				["v"=>"Disobey afterparty located at <strong><a href='https://biitsi.fi/'>Biitsi.fi</a></strong>", "c"=>"main", "cp"=>"3"]
		]
];

?>
<div class='schedule-list-container schedule-details text-center' >
	<h4 class="text-center" id="top">Friday 11th</h4>
	<div id='venue-map' class='medium-text-right text-center'><a href='practical.php'>See Venue map</a></div>
	<?php echo outputSchedule( $data_day_1 ); ?>
</div>

<!-- Program day 1 -->


<!-- Program day 2 -->
<div class='schedule-list-container schedule-details text-center' >
	<h4 class="text-center">Saturday 12th</h4>
		<?php echo outputSchedule( $data_day_2 ); ?>
</div>

<script>
$("td.time").each( function(){
	$(this).html(  $(this).html().replace("-","<span class='hide-for-small-only'> - </span><span class='show-for-small-only'><br></span>") )
})
</script>
