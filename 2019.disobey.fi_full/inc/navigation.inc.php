<?php
	$baseurl = ( $_SERVER['SERVER_NAME'] == "ddr.fi" )? "/disobey2019/" : "";

	/*-------------------------
	 Navigation
	 -----------------------*/
	$navigation = "<section id='navigation' class='text-center hidden navigation-bar'>
	<a id='navi-frontpage'  		href='{$baseurl}./'><img src='{$baseurl}img/just_logo_pink.png' id='navigation-home-symbol' class='show-for-medium'><span class='show-for-small-only'>Home</span></a><a id='navi-about'  href='{$baseurl}about'>About</a><a id='navi-program'  href='{$baseurl}program'>Program</a><a id='navi-practical'  		href='{$baseurl}practical'>Practical</a><a id='navi-contact'  			href='{$baseurl}contact'>Contact</a><a id='navi-tickets'  href='https://holvi.com/shop/Disobey/' target='_blank' ><i class='far fa-ticket show-for-medium' aria-hidden='true'></i> Get Tickets!</a>
	</section>";

?>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
	<?php echo $navigation; ?>
</div>
<div id="hamburger" class="show-for-small-only" data-toggle="offCanvas"><i class="fas fa-bars"></i></div>

<div class='show-for-medium'>
	<?php echo $navigation; ?>
</div>

<script>
	$("#navigation a").removeClass("current")
	$("#navigation a#navi-" + current_navi_item ).addClass("current")
</script>
