<!DOCTYPE html>
<html lang="en">

<?php
$slug = "ctfchallenge";
$pagename = "ctfchallenge";
include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

<script> var current_navi_item = "cfc" </script>
<?php include "inc/navigation.inc.php"; ?>
<?php include "inc/header.inc.php"; ?>

<section class='container hidden' id='main-content'>

    <div class='full-row clearfix lazyload translucent competitions' data-src='<?php echo $baseurl; ?>img/lockbox.jpg'
         style='background-image:url( "" );'>
        <section class="grid-container cell grid-y cell location" id='workshops'>
            <div class="cell">
                <h1>CTF Call for challenges</h1>
            </div>
            <div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

                <div class='cell large-12 text-center'>
                    <p>Are you a puzzle crafter, exploit artist, or protocol wizard? Do you have a knack for creating
                        mind-bending challenges that push hackers to their limits? We're inviting <b>up to 10 challenge
                            creators</b> to join the <b>Disobey CTF Challenge Team</b>! If selected, you'll help shape
                        the competition by submitting <b>2-3 original challenges</b>.
                    <p>In return, you'll receive:</p>
                    <p>
                    <div>- Free entry to the event</div>
                    <div>- Some swag</div>
                    <div>- Eternal glory (or at least some serious bragging rights)</div>
                    </p>

                    <p>To apply, send a short application to <i>games@disobey.fi</i> describing what kind of challenges
                        you'd like to create (e.g., web, crypto, reverse engineering, forensics, etc.) and any relevant
                        experience or ideas you're excited to explore. </p>

                    <p>Applying is considered a commitment to submit 2-3 challenges. If your challenges are accepted,
                        you're in! </p>

                    <p>More detailed instructions will be provided to the selected challenge team.</p>

                </div>

            </div>
        </section>
    </div>

    <div class='full-row clearfix divider'>&nbsp;</div>

    <?php include "inc/contact.inc.php"; ?>

</section>


<?php include "inc/footer.inc.php"; ?>
</body>
</html>
