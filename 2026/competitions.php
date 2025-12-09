<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "competitions";
	$pagename = "Competitions";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="competitions" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

		<div class='full-row clearfix lazyload translucent competitions' data-src='img/lockbox.jpg' style='background-image:url( "" );' >
				<section class="grid-container cell grid-y cell location" id='workshops' >
					<div class="cell">
						<h1>Competitions</h1>
					</div>
					<div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

							<div class='cell large-12 text-center'>
                                <p>As always, Disobey has a bunch of competitions for you to hack your way through.
								Find some of those below &ndash; and the rest at the event! The competitions are only active during the event!
								</p>
                            </div>

		<?php /*
							<div class='cell large-6'>
								<h4>UNAUTHORIZED ACCESS COMPETITION</h4>


								<p>Find NotMyNick inside the venue without authorised access credentials. If you already have a badge, you will be disqualified.</p>

                                <p>The first to hack themselves into the event wins an official badge and entry to the event. And only the first one will be awarded &ndash; any later ones will be politely escorted out. </p>

                                <p>Please note that this competition may lead to physical harm, removal from the venue and depending on techniques used having the authorities called on you. </p>

                                <p>Don’t get caught. </p>


							</div>


							<div class='cell large-6'>
								<h4>DISOBEY BADGE PUZZLE (NO-GO)</h4>
								<p>When shit hits the fan: No badge puzzle. This is a sad year for the badge fans. Read more at: <a href="https://badge.disobey.fi">https://badge.disobey.fi</a></p>

							</div>

							<div class='cell large-6'>
								<h4>DISOBEY CTF</h4>
								<p>In a CTF, teams compete in solving hacker-minded challenges of varying types and skill levels. More solves, more points. Most points, victory.</p>
								<br><br>
								<ul style="font-family: monospace; font-size:16px;">
                                        <li>0x0000: The maximum team size is 10 people.</li>
                                        <li>0x0027: The CTF is for event participants only, unfortunately participating outside the event won't be possible. This is due to resources and the physical nature of some challenges.</li>
                                        <li>0x006a: scoring method will be dynamic, i.e., "the more solves the challenge has, the less points it's worth".</i>.</li>
                                        <li>0x017e: A(t least a) wired network connection (1000BASE-T) will be provided, so you might want to prepare for that.</li>
                                        <li>0x02ac: The CTF starts on Friday afternoon and ends on Saturday in the evening. Details TBA.</li>
                                        <li>0xff8d: The winners are announced and objects are given at the Awards Ceremony on Saturday.</li>
                                </ul>
							</div>

							<div class='cell large-6'>

                                <h4>Sticker Design Competition</h4>
								<p>No cybersecurity event is complete without stickers! And we want our community to be part of creating one. So here is a quick competition for creating one! Read more at <a href="https://disobey.fi/2025/stickaz.html">the competition rules</a>! </p>

                                <p>Send your design by Feb 6th!.</p>

							</div>
	*/ ?>


							<div class='cell large-6'>
								<h4>BADGE COMPETITIONS!</h4>

									<p>Let's do a new thing with the badge! The badge's source available in <a href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware"> in this repository</a>.</p>

									<p>The Badge 3D model and schema are available <a href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware/blob/main/HARDWARE.md#badge-design-files"> here</a>.</p>
									
									<p>Don't know what to do? Get to our Discord and in the badge channel and we will help you onwards!</p>
									
									<p>The 1st competition is "Best hardware mod for the badge." You know what to do!</p>
									
									<p>The 2nd competition will be announced later, but will be software related!</p>

							<div class='cell large-6'>
							</div>

					</div>
	<?php /*
	
					<div class="cell">
						<h1>Disobey 2025 CTF results</h1>
					</div>
					<div class='cell'>
						<div class=''>
							<p>Top 25 teams</p>
							<p>
								<table>
								<tr><th>Position</th><th>Team</th><th>Score</th></tr>
								<tr><td>1</td><td>team mvm but reversed</td><td>4785</td></tr>
								<tr><td>2</td><td>cockmasters</td><td>2650</td></tr>
								<tr><td>3</td><td>2dev4ops</td><td>2574</td></tr>
								<tr><td>4</td><td>TKT-vetomiehet</td><td>2265</td></tr>
								<tr><td>5</td><td>JYVSECTEC and friends</td><td>2252</td></tr>
								<tr><td>6</td><td>Vilho2025</td><td>2157</td></tr>
								<tr><td>7</td><td>Hevosen Puhelinnumero</td><td>1584</td></tr>
								<tr><td>8</td><td>Only here for the (free) beer</td><td>1442</td></tr>
								<tr><td>9</td><td>Oulun Ryyppyrinki</td><td>1364</td></tr>
								<tr><td>10</td><td>Posankka utd</td><td>1296</td></tr>
								<tr><td>11</td><td>xo10</td><td>1108</td></tr>
								<tr><td>12</td><td>que tamine?</td><td>1087</td></tr>
								<tr><td>13</td><td>CLSRJ-900</td><td>1054</td></tr>
								<tr><td>14</td><td>Roima</td><td>1002</td></tr>
								<tr><td>15</td><td>cyber-fairies</td><td>949</td></tr>
								<tr><td>16</td><td>#east</td><td>926</td></tr>
								<tr><td>17</td><td>Team Windows XP SP0</td><td>910</td></tr>
								<tr><td>18</td><td>riippakivi</td><td>782</td></tr>
								<tr><td>19</td><td>Asylum</td><td>710</td></tr>
								<tr><td>20</td><td>Testausservery ry</td><td>689</td></tr>
								<tr><td>21</td><td>Piingu</td><td>684</td></tr>
								<tr><td>22</td><td>1234567</td><td>612</td></tr>
								<tr><td>23</td><td>50CentOS</td><td>605</td></tr>
								<tr><td>24</td><td>Purple Shirts</td><td>598</td></tr>
								<tr><td>25</td><td>giguliina</td><td>596</td></tr>
								</table>
							</p>
						</div>
					</div>
				</section>
		</div>

		*/ ?>

		<div class='full-row clearfix divider'>&nbsp;</div>

				<!--- Puzzle -->
			<div class='full-row clearfix lazyload' data-src='img/puzzle.jpg' style='background-image:url( "" );' >
				<section class="grid-container cell grid-y cell location" id='puzzle' >
					<div class="cell">
						<h1 class="red">FINISHED: Hacker Puzzle (has concluded!)</h1>
					</div>
					<div class='cell'>
						<p>
							Whoever seeks, finds. This year's instructions for the Hacker Puzzle are only for those who can find it..
							<a href="https://x.com/BlueOcean313130">Is this it?</a>
						</p>
						<p>
							NOTE: This year's Hacker Puzzle has been completed and all hacker tickets sold!
						</p>
						<p class='narrower'>
							<small>
								It is not mandatory to register an X account in order to solve the first step.
								Also, the hacker puzzle does not require bruteforcing. You can find out all the credentials by solving the challenges.
								Save the (virtual) environment and don't melt the icebergs.
							</small>
						</p>
					</div>
				</section>
			</div>

		<div class='full-row clearfix divider'>&nbsp;</div>

		<?php include "inc/contact.inc.php"; ?>


		<?php include "inc/footer.inc.php"; ?>
	</section>
</body>
</html>
