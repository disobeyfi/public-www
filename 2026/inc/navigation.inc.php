<?php
$baseurl = ($_SERVER['SERVER_NAME'] == "ddr.fi") ? "/disobey_2026/" : "/2026/";
$suffix = ($_SERVER['SERVER_NAME'] == "ddr.fi") ? ".php" : "";

/*-------------------------
 Navigation
 -----------------------*/
$navigation = "<section class='text-center hidden navigation-bar'>
	<a data-nav='frontpage'    href='{$baseurl}./'><img src='{$baseurl}img/just_logo.png' id='navigation-home-symbol' class='show-for-large custom'><span class='hide-for-large custom'>Home</span></a>
	<a data-nav='about'        href='{$baseurl}about{$suffix}'>About</a>
	<a data-nav='program'      href='{$baseurl}program{$suffix}'>Program</a>
	<a data-nav='competitions'  href='{$baseurl}competitions{$suffix}'>Competitions</a>
	<a data-nav='practical'  href='{$baseurl}practical{$suffix}'>Practical</a>
	<a data-nav='hackerpuzzle' href='{$baseurl}HackerPuzzle{$suffix}'>Hacker Puzzle</a>
	<a data-nav='tickets'      href='{$baseurl}tickets{$suffix}'><i class='far fa-ticket show-for-medium' aria-hidden='true'></i> Get Tickets!</a>
	</section>";
/*

<a id='navi-venue'  href='{$baseurl}venue{$suffix}'>Venue</a>
<a id='navi-contact'  			href='{$baseurl}contact{$suffix}'>Contact</a>
*/

?>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
    <?php echo $navigation; ?>
</div>

<div class='hide-for-large custom'>
    <div id="hamburger" data-toggle="offCanvas"><a href='#'><i class="fas fa-bars"></i></a></div>
</div>

<div class='show-for-large custom'>
    <?php echo $navigation; ?>
</div>

<script>
  $(document).ready(function () {
    $(".navigation-bar a").removeClass("current")
    $(".navigation-bar a[data-nav='" + current_navi_item + "']").addClass("current")
  });
</script>
