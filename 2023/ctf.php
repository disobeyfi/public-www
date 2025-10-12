<!DOCTYPE html>
<html lang="en">

<?php
	$slug 		= "ctf";
	$pagename = "CTF";
	include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

	<script> var current_navi_item="ctf" </script>
	<?php include "inc/navigation.inc.php"; ?>
	<?php include "inc/header.inc.php";	?>

	<section class='container hidden'>

	<!-- Results -->
	<div class='full-row clearfix lazyload extra-padding translucent'  >
			<section class="grid-container cell grid-y cell location" id='ctf' >
				<div class="cell">
					<h1>Disobey 2023 CTF results</h1>
				</div>
				<div class='cell'>

					<div class=''>
					<p>Top 25 teams</p>
					<p>
						<table>
							<tr><th>Position</th><th>Team</th><th>Score</th></tr>
							<tr><td>1</td><td>Team Europe-ish?</td><td>2735</td></tr>
							<tr><td>2</td><td>2Dev4Ops</td><td>2495</td></tr>
							<tr><td>3</td><td>BurningCocks</td><td>2420</td></tr>
							<tr><td>4</td><td>Only here for the (free) beer</td><td>2383</td></tr>
							<tr><td>5</td><td>xo10</td><td>2248</td></tr>
							<tr><td>6</td><td>TKT-Vetomiehet</td><td>2171</td></tr>
							<tr><td>7</td><td>Class3E</td><td>2114</td></tr>
							<tr><td>8</td><td>JST</td><td>1712</td></tr>
							<tr><td>9</td><td>TrojanBat</td><td>1514</td></tr>
							<tr><td>10</td><td>Tiim</td><td>1290</td></tr>
							<tr><td>11</td><td>roima</td><td>1089</td></tr>
							<tr><td>12</td><td>Hevosen puhelinnumero</td><td>1049</td></tr>
							<tr><td>13</td><td>beesti</td><td>710</td></tr>
							<tr><td>14</td><td>kybercastike</td><td>700</td></tr>
							<tr><td>15</td><td>PinkFluffyUnicorns</td><td>636</td></tr>
							<tr><td>16</td><td>buffer owlerflow</td><td>563</td></tr>
							<tr><td>17</td><td>Sask69</td><td>459</td></tr>
							<tr><td>18</td><td>#east</td><td>450</td></tr>
							<tr><td>19</td><td>Team V23</td><td>348</td></tr>
							<tr><td>20</td><td>jallunpihtaajat</td><td>319</td></tr>
							<tr><td>21</td><td>OispaKaljaa</td><td>301</td></tr>
							<tr><td>22</td><td>Team Migreeni</td><td>295</td></tr>
							<tr><td>23</td><td>groupwasdone</td><td>288</td></tr>
							<tr><td>24</td><td>WindowsXP</td><td>276</td></tr>
							<tr><td>25</td><td>chatgpt</td><td>271</td></tr>
						</table>
					</p>
					</div>
				</div>
			</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!-- Badge puzzle -->
		<div class='full-row clearfix lazyload center-bg' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
			<section class="grid-container cell grid-y cell location" id='ctf' >

				<div class="cell">
					<h1>Disobey 2023 badge puzzle</h1>
				</div>
				<div class='cell'>
					<div class=''>
						The winner of the badge puzzle was team <b>roima</b>, the only team with 6/6 solves.
					</div>
				</div>
			</section>
		</div>

<?php /*

		<div class='full-row clearfix lazyload extra-padding translucent'  >
				<section class="grid-container cell grid-y cell location" id='ctf' >
					<div class="cell">
						<h1>Disobey CTF</h1>
					</div>
					<div class='cell'>

						<div class=''>
							<p>A CTF (Capture The Flag) competition is part of the Disobey programme. In a CTF, teams compete in solving hacker-minded challenges of varying types and skill levels. More solves, more points. Most points, victory.</p>

							<p>For an introduction to CTFs, see e.g. <a href="https://ctf101.org/">CTF 101</a></p>

							<p>Unfortunately, it is not possible to participate remotely due to some challenges requiring physical access and limited resources.</p>
						</div>
					</div>
				</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!-- info & Rules -->
		<div class='full-row clearfix lazyload center-bg' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
			<section class="grid-container cell grid-y cell location" id='ctf' >
				<div class="cell">
					<h1>General information and rules</h1>
				</div>
				<div class="cell">
					<p>The (strongly recommended) maximum team size is 10 people.</p>
					<p>The CTF is for event participants only, unfortunately participating outside the event won't be possible. This is due to resources and the physical nature of some challenges.</p>
					<p>The scoring method will be dynamic, i.e., <i>"the more solves the challenge has, the less points it's worth"</i>.</p>
					<p>The winners are announced and objects are given at the Awards Ceremony on Saturday.</p>
					<p>A(t least a) wired network connection (1000BASE-T) will be provided, so you might want to prepare for that.</p>
                                        <p>The CTF starts on Friday afternoon and ends on Saturday in the evening. Details TBA.</p>
				</div>
			</section>
		</div>

		<div class='full-row clearfix divider'>&nbsp;</div>
		<!-- Call for challenges -->
		<div class='full-row clearfix lazyload center-bg' data-src='img/lock_darker.jpg' style='background-image:url( "" );' >
			<section class="grid-container cell grid-y cell location" id='ctf' >
				<div class="cell">
					<h1>Call for challenges</h1>
				</div>
				<div class="cell">
					<p>Want to help make Disobey 2023 even more fun? Leave a mark, create a challenge or many for the CTF.</p>
					<p>Creating challenges is a nice way to force^Whelp people learn something cool, so why not give them the opportunity.</p>
					<p>Interested? See the <a href="https://docs.google.com/document/d/1YUhMgx5kGzrML-yBzdjrHzTSr1DAQVjib_g9MzR8BcQ/edit#heading=h.6zcowwktwywk">challenge submission guidelines</a> and in case of any questions, contact the CTF team at games@disobey.fi!</p>
				</div>
			</section>
		</div>
*/ ?>
		<div class='full-row clearfix divider'>&nbsp;</div>
		<?php include "inc/contact.inc.php"; ?>

	</section>

	<?php include "inc/footer.inc.php"; ?>
</body>
</html>
