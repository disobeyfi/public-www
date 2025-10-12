<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="en">

<?php include "inc/head.inc.php"; ?>

<body class='text-center hide-background'  >
	<div id='video-container'>
		<video id='videoplayer' autoplay loop muted>
	  	<source src="" type="video/mp4">
		</video>
	</div>
	<div id='loader-container' class='hidden'><div class='loader hidden'><img onload="startLoader()" src='img/just_logo.png' alt="loader"></div></div>

	<?php include "inc/navigation.inc.php"; ?>
	<section class='container hidden'>

            <div class='full-row top-bar'></div>
            <!--- HEADER -->
            <?php
              $is_frontpage = true;
              include "inc/header.inc.php";
            ?>

			<!-- ANNOUNCEMENT -->
			<div class='full-row clearfix lazyload'>
				<section class="grid-container cell grid-y cell location" id='announcement' >
					<div class="cell">
						<h1>ANNOUNCEMENT</h1>
					</div>
					<div class='cell'>
						<p>
							On Saturday, February 18th at approximately 1:30 PM (13:30), during Saturday's keynote talk at Disobey 2023, two pressurised drink containers exploded on the second floor balcony at Nixu's sponsor area. The explosion was powerful enough to break several inner, but not outer, window panes in the area.
						</p>
						<p>
							Immediately afterwards, the organizers and visitors nearest to the explosion were sent for a medical checkup in case of pressure-related injuries. Later on, we have become aware of one person with a perforated ear drum caused by the accident. Also, one person has exhibited significant nose bleed.
						</p>
						<p>
							IF YOU HAVE MEDICAL SYMPTOMS, SEEK MEDICAL ASSISTANCE. While we strongly believe that there is no immediate cause of concern, a perforated ear drum may affect your balance. For further information about related symptoms, see <a href="https://www.nhs.uk/conditions/perforated-eardrum/">https://www.nhs.uk/conditions/perforated-eardrum/</a>
						</p>
						<p>
							If you need further information or seek assistance related to insurance, contact us at contact@disobey.fi. Also contact us if you want to talk about any feelings of trauma related to the incident.
						</p>
						<p>
							What we know so far:
							<ul>
								<li>The pressurised containers were checked for correct pressure levels during the morning</li>
								<li>The containers were operated by experienced personnel</li>
								<li>The usual mode for accidents involving similar containers is caused by tampering or wrong transport, neither of which we have reason to suspect</li>
								<li>The pressure valve is mechanical, not electronical, and shows no outward signs of malfunction to a trained operator</li>
								<li>The root cause of the accident is not yet known and further investigation will continue as needed</li>
								<li>The containers were plastic, not metallic</li>
							</ul>
						</p>
					</div>
					<div class="cell">
						<h1>TIEDOTE</h1>
					</div>
					<div class='cell'>
						<p>
							Lauantaina 18. helmikuuta noin kello 13.30, saman päivän keynote-puheen aikana, Disobey 2023 -tapahtumassa räjähti kaksi paineistettua juoma-astiaa toisen kerroksen parvekkeella Nixun sponsorialueella. Räjähdys oli tarpeeksi voimakas rikkoakseen useita sisä-, muttei ulkoikkunoita sponsorialueella.
						</p>
						<p>
							Välittömästi räjähdyksen jälkeen lähetimme lähimpänä onnettumuutta olleet järjestäjät sekä kävijät terveyskeskukseen siltä varalta, että heillä olisi ollut paineen aiheuttamia vammoja. Myöhemmin yhdellä henkilöllä on todettu puhjennut tärykalvo, joka on aiheutunut onnettomuudesta. Lisäksi olemme kuulleet toisella henkilöllä tapahtuneesta merkittävästä nenäverenvuodosta.
						</p>
						<p>
							JOS SINULLA ON OIREITA, HAKEUDU HOITOON. Vaikka tällä hetkellä meillä ei ole syytä epäillä välitöntä vaaraa, tärykalvon vammat voivat vaikuttaa tasapainoaistiin. Oireiden yleiskuvaukset löytyvät mm. osoitteesta <a href="https://www.terveyskirjasto.fi/dlk00279">https://www.terveyskirjasto.fi/dlk00279</a>
						</p>
						<p>
							Jos haluat lisätietoja liittyen tapahtumaan tai vakuutukseen, ota meihin yhteys osoitteessa contact@disobey.fi. Ota myös yhteyttä, jos haluat jutella trauman aiheuttamista tunteista onnettomuuteen liittyen.
						</p>
						<p>
							Mitä toistaiseksi tiedämme:
							<ul>
								<li>Paineastiat oli tarkastettu samana aamuna ja niissä oli oikea paineistus</li>
								<li>Paineastioita käyttivät henkilöt, joilla oli aiempaa kokemusta vastaavista</li>
								<li>Samankaltaiset paineastiat yleensä vioittuvat väärin kuljetettuina tai käsiteltyinä, mutta tähän asti ei ole syytä epäillä kumpaakaan</li>
								<li>Paineensäätöventtiili on täysin mekaaninen, ei elektroninen, eikä kokeneen käyttäjän mielestä vaikuta ulkoisesti vaurioituneelta</li>
								<li>Onnettomuuden juurisyy ei ole vielä selvillä ja tutkinta jatkuu tarvittaessa viranomaisten kanssa</li>
								<li>Astiat olivat muovisia, eivät metallisia</li>
							</ul>
						</p>
					</div>
				</section>
			</div>

            <div class='full-row clearfix divider'>&nbsp;</div>

						<!-- KEYNOTES -->

						<div class='full-row clearfix lazyload translucent' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >

				 	 		<section class="grid-container cell grid-y cell location text-center" id='keynotes' >

				 				<div class="cell">
				 					<h1>Keynote speakers</h1>
				 				</div>

				 				<div class="cell grid-x grid-padding-x grid-margin-x">

									<!-- keynote 1 -->
				 					<div class='cell large-6 medium-text-left'>

										<div class='illustration illustration-keynote lazyload first' title='Connie McIntosh' data-alignment="center" data-src='img/bios/connie_mcintosh_disobey_2023.jpg' style='background-image:url("");'></div>

				 						<h4 class='text-center'>Connie McIntosh</h4>
										<label>Head of Security, Market Area – Ericsson</label>

				 						<p>
											Named top 100 Women in Cybersecurity by US Cyber Defense Magazine. Connie is an International speaker, presenter, conference host and moderator, CTF judge and mentor in cybersecurity. She is Head of Security for 40 Countries in Ericsson, responsible for Cyber Security, Information Security, Operational Security, Product Security and Privacy.
										</p>
										<p>
											She has over 20 years’ experience in Network and Cyber Security previously working for the Australian Government’s CERT, Department of Defence in Government classified networks, managing Cyber Operations and writing a Masters Cyber Program at the University of Sunshine Coast. Connie is passionate about cybersecurity, holds Masters and Bachelors Degrees and a long list of specialist training in Cybersecurity. Connie’s motto is “alone, we can do so little; together, we can do so much”.
										</p>
				 					</div>

									<!-- keynote 12 -->
				 					<div class='cell large-6 medium-text-left'>

										<div class='illustration  illustration-keynote lazyload' title='Antti Kurittu' data-alignment="center" data-src='img/bios/antti_kurittu_disobey_2023.jpg' style='background-image:url("");'></div>

				 						<h4 class='text-center'>Antti Kurittu</h4>
										<label>Security Operations Manager, EU area, Aiven Oy</label>

										<p>
											Antti is an experienced investigator and a team leader, whose work experience include working in Nixu Cyber Defence Center, the Finnish National Cyber Security Center (NCSC-FI) and the Helsinki Police Department. He has extended experience from working with cyber incident investigations in several different roles for the last decade - in law enforcement, private-sector DFIR services and as a part of the national CERT of Finland.
										</p>

										<p>
											Antti is one of the hosts of the award-winning Turvakäräjät podcast (currently on a break), and has spoken and written about cyber security issues and case investigations internationally for several years.
										</p>

				 					</div>

				 				</div>
				 			</section>
				 	</div>
		<!--- SPEAKERS -->
					<a name='speakers' id='speakers'></a>
					<div class='full-row clearfix divider'>&nbsp;</div>

					<?php include "inc/speakers.inc.php";	?>


					<div class='full-row clearfix divider'>&nbsp;</div>

					<?php /*
				    <!--- Puzzle -->
					<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
						<section class="grid-container cell grid-y cell location" id='puzzle' >
					        <div class="cell">
				                <h1>Disobey puzzle</h1>
					        </div>
					        <div class='cell'>
								<p>Disobey 2021-2023 Hacker Challenge is produced in cooperation with Kouvosto Telecom. It seems that they've made some OPSEC fails down the road.. can you find what those fails are? &#x1F609;</p>
					        </div>
						</section>
					</div>*/?>

		<div class='full-row clearfix divider'>&nbsp;</div>

		<?php include "inc/contact.inc.php";	?>

	</section>

	<script>
			/*-------------------------
			 Start loading video background
			 -----------------------*/
			 $(window).on('load', function(){
					var video = document.getElementById("videoplayer");

					var req = new XMLHttpRequest();
					req.responseType = 'blob';
					req.open('GET', 'video/tausta_video_2023_v3.mp4', true);


					req.onload = function() {
					 // Onload is triggered even on 404
					 // so we need to check the status code
					 if (this.status === 200) {
							var videoBlob = this.response;
							var vid = URL.createObjectURL(videoBlob); // IE10+
							// Video is now downloaded
							// and we can set it as source on the video element
							video.src = vid;
							console.log("200")
					 }
					}
					req.onerror = function() {
					 // Error
					}

					req.send();
				})
	</script>

	<?php include "inc/footer.inc.php"; ?>

</body>
</html>
