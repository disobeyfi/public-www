<?php
// Include centralized config (provides $baseurl, $suffix, IS_PRODUCTION)
include_once __DIR__ . '/config.php';
?>

<!-- Skip to main content link for keyboard accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<?php
/*-------------------------
 Navigation
 -----------------------*/
$navigation = "<section class='text-center hidden navigation-bar'>
	<a data-nav='frontpage'    href='{$baseurl}./'><img src='{$baseurl}img/just_logo.png' id='navigation-home-symbol' class='show-for-large custom'><span class='hide-for-large custom'>Home</span></a>
	<a data-nav='about'        href='{$baseurl}about{$suffix}'>About</a>
	<a data-nav='program'      href='{$baseurl}program{$suffix}'>Program</a>
	<a data-nav='community-village'	href='{$baseurl}communityvillage{$suffix}'>Community Village</a>
	<a data-nav='competitions'  href='{$baseurl}competitions{$suffix}'>Competitions</a>
	<a data-nav='venue'  href='{$baseurl}venue{$suffix}'>Venue</a>
	<a data-nav='practical'  href='{$baseurl}practical{$suffix}'>Practical</a>
	<a data-nav='tickets'      href='{$baseurl}tickets{$suffix}'><i class='far fa-ticket show-for-medium' aria-hidden='true'></i> Get Tickets!</a>
	</section>";
/*

<a id='navi-venue'  href='{$baseurl}venue{$suffix}'>Venue</a>
<a id='navi-contact'  			href='{$baseurl}contact{$suffix}'>Contact</a>
*/

?>

<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
    <button class="close-button" aria-label="Close menu" type="button" data-close>
        <span aria-hidden="true">&times;</span> Close
    </button>
    <?php echo $navigation; ?>
</div>

<div class='hide-for-large custom'>
    <button id="hamburger"
            data-toggle="offCanvas"
            aria-label="Open navigation menu"
            aria-expanded="false"
            aria-controls="offCanvas">
        <i class="fas fa-bars" aria-hidden="true"></i>
    </button>
</div>

<div class='show-for-large custom'>
    <?php echo $navigation; ?>
</div>

<script>
  $(document).ready(function () {
    $(".navigation-bar a").removeClass("current")
    $(".navigation-bar a[data-nav='" + current_navi_item + "']").addClass("current")

    // Toggle aria-expanded for accessibility
    $('#hamburger').on('click', function() {
      var expanded = $(this).attr('aria-expanded') === 'true';
      $(this).attr('aria-expanded', !expanded);
      $(this).attr('aria-label', expanded ? 'Open navigation menu' : 'Close navigation menu');
    });

    // Also update when Foundation closes the off-canvas
    $(document).on('closed.zf.offCanvas', function() {
      $('#hamburger').attr('aria-expanded', 'false');
      $('#hamburger').attr('aria-label', 'Open navigation menu');
    });
  });
</script>
