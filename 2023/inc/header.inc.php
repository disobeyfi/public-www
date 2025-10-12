<div class='full-row header-row clearfix  transparent-bg' >

	<!-- GET TICKET BUTTON -->
	<!-- <a href="https://holvi.com/shop/Disobey/" class="button get-ticket hidden">
			<div class='show-for-medium'>Get your ticket now <i class="fas fa-chevron-right"></i></div>
			<div class='hide-for-medium'>Buy ticket<i class="fas fa-chevron-right"></i></div>
	</a> -->

	<div class='dimmer'></div>
	<div class='header-content'>
		<div class='ident'>
			<img src='<?php echo $baseurl; ?>img/logo.png' id='logo-subpage' class='logo show-for-medium hidden' alt="Disobey">
			<!-- <img src='img/logo.png' id='logo-main' class='logo show-for-medium hidden' alt="Disobey"> -->

			<!-- <img src='img/logo_subpage_mobile.png' id='logo-subpage-mobile' class='logo show-for-small-only' alt="Disobey"> -->
			<img src='<?php echo $baseurl; ?>img/logo_mobile_no_date.png' id='logo-subpage-mobile' class='logo show-for-small-only' alt="Disobey">
			<img src='<?php echo $baseurl; ?>img/logo_mobile_no_date.png' id='logo-mobile' class='logo show-for-small-only' alt="Disobey">

		</div>
		<script>
			if( $("body").hasClass("subpage") ){
				$("#logo-main").css("display","none")
			}else{
				$("#logo-subpage").css("display","none")
			}
		</script>
		<!--- DATE -->
		<section class="grid-x grid-padding-x grid-margin-x datetime text-center show-for-medium">
			<div class='cell large-12 large-text-right'>
				<img src='img/logo.png'>
			</div>
		</section>

		<section class="grid-x grid-padding-x grid-margin-x datetime text-center show-for-medium">
			<div class='cell large-6 large-text-right'>
				<h3><i class="far fa-clock"></i>17th and 18th February, 2023</h3>
			</div>
			<div class='cell large-6 large-text-left'>
				<h3><i class="far fa-map-marker-alt"></i> Kaapelitehdas, Helsinki Finland</h3>
			</div>
		</section>

	</div>

</div>
