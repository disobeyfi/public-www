<div class='full-row header-row clearfix  transparent-bg' >

<img src='<?php echo $baseurl; ?>img/pink_accent_left.png' id='pink-accent-left'> <!-- Only for frontpage -->
<img src='<?php echo $baseurl; ?>img/pink_accent_right.png' id='pink-accent-right'> <!-- Only for frontpage -->
<img src='<?php echo $baseurl; ?>img/pink_accent_right.png' id='pink-accent-right-2'> <!-- Only for frontpage -->

<?php
/*
	<!-- GET TICKET BUTTON -->
	<!-- <a href="https://holvi.com/shop/Disobey/" class="button get-ticket hidden">
			<div class='show-for-medium'>Get your ticket now <i class="fas fa-chevron-right"></i></div>
			<div class='hide-for-medium'>Buy ticket<i class="fas fa-chevron-right"></i></div>
	</a> -->
	*/
	?>

	<div class='dimmer'></div>
		<div class='header-content'>

			

			<div class='ident'>
				<img src='<?php echo $baseurl; ?>img/logo.webp' id='logo-subpage' class='logo show-for-medium hidden' alt="Disobey"> <!-- Only for subpage -->
				<img src='<?php echo $baseurl; ?>img/logo_mobile.webp' id='logo-subpage-mobile' class='logo show-for-small-only' alt="Disobey">
				<img src='<?php echo $baseurl; ?>img/logo_mobile.webp' id='logo-mobile' class='logo show-for-small-only' alt="Disobey">
			</div>

			<script>
				if( $("body").hasClass("subpage") ){
						$("#logo-main").css("display","none")
				}else{
						$("#logo-subpage").css("display","none")
						$("#logo-subpage-mobile").css("display","none")
						$("#logo-mobile").css("display","none")
				}
			</script>

			<!--- DATE -->
			<section class="grid-x grid-padding-x grid-margin-x datetime text-center show-for-medium">
				<div class='cell large-12 large-text-right' id='header-logo-section'>
					<img id="main-logo" src='img/logo.webp'> <!-- Only for frontpage -->
				</div>
			</section>
			<section class="grid-x grid-padding-x grid-margin-x datetime text-center show-for-small-only">
				<div class='cell large-12 large-text-right'id='header-logo-mobile-section'>
					<img id="main-mobile-logo" src='img/logo_mobile.webp'>
				</div>
			</section>
			<section class="grid-x grid-padding-x grid-margin-x datetime text-center">
				<div class='cell large-6 large-text-right'>
					<h3><i class="far fa-clock"></i>14th and 15th February, 2025</h3>
				</div>
				<div class='cell large-6 large-text-left'>
					<h3><i class="far fa-map-marker-alt"></i> Kaapelitehdas, Helsinki Finland</h3>
				</div>
			</section>
		</div>

	</div>
