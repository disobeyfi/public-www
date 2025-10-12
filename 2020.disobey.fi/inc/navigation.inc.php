<?php
	$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey_2020/" : "/2020/";

	/*-------------------------
	 Navigation
	 -----------------------*/
	$navigation = "<section id='navigation' class='text-center hidden navigation-bar'>
	<a id='navi-frontpage'  		href='{$baseurl}./'><img src='{$baseurl}img/just_logo_pink.png' id='navigation-home-symbol' class='show-for-large'><span class='hide-for-large'>Home</span></a>
	<a id='navi-about'  href='{$baseurl}about'>About</a>
	<a id='navi-program'  href='{$baseurl}program'>Program</a>
	<a id='navi-practical'  		href='{$baseurl}practical'>Practical</a>
	<!--<a id='navi-tickets'  		href='{$baseurl}tickets'>Tickets</a> -->
	<a id='navi-contact'  			href='{$baseurl}contact'>Contact</a>

	 <a id='navi-tickets'  href='{$baseurl}tickets'><i class='far fa-ticket show-for-medium' aria-hidden='true'></i> Get Tickets!</a>
	</section>";

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
