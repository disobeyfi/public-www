<?php
	$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey_2026/" : "/2026/";
	$suffix = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? ".php" : "";

	/*-------------------------
	 Navigation
	 -----------------------*/
	$navigation = "<section id='navigation' class='text-center hidden navigation-bar'>
	<a id='navi-frontpage'    href='{$baseurl}./'><img src='{$baseurl}img/just_logo.png' id='navigation-home-symbol' class='show-for-large'><span class='hide-for-large'>Home</span></a>
	<a id='navi-hackerpuzzle' href='{$baseurl}HackerPuzzle{$suffix}'>Hacker Puzzle</a>
	<a id='navi-program'      href='{$baseurl}program{$suffix}'>Program</a>
	<a id='navi-tickets'      href='{$baseurl}tickets{$suffix}'><i class='far fa-ticket show-for-medium' aria-hidden='true'></i> Get Tickets!</a>
	<a id='navi-competitions'  href='{$baseurl}competitions{$suffix}'>Competitions</a>
	<a id='navi-cfc'          href='{$baseurl}ctfchallenge{$suffix}'>Call for challenges</a>
	<a id='navi-practical'  href='{$baseurl}practical{$suffix}'>Practical</a>
	<a id='navi-about'        href='{$baseurl}about{$suffix}'>About</a>
	</section>";
	/*

	<a id='navi-venue'  href='{$baseurl}venue{$suffix}'>Venue</a>
	<a id='navi-contact'  			href='{$baseurl}contact{$suffix}'>Contact</a>
	*/

?>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
	<?php echo $navigation; ?>
</div>
<div id="hamburger"  class="hide-for-large" data-toggle="offCanvas"><a href='#'><i class="fas fa-bars"></i></a></div>

<div class='show-for-large'>
	<?php echo $navigation; ?>
</div>

<script>
	$("#navigation a").removeClass("current")
	$("#navigation a#navi-" + current_navi_item ).addClass("current")
</script>
