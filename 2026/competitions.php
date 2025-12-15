<!DOCTYPE html>
<html lang="en">

<?php
$slug = "competitions";
$pagename = "Competitions";
include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage'>

<script> var current_navi_item = "competitions" </script>
<?php include "inc/navigation.inc.php"; ?>
<?php include "inc/header.inc.php"; ?>

<section class='container hidden'>

    <div class='full-row clearfix lazyload translucent competitions' data-src='img/lockbox.jpg'
         style='background-image:url( "" );'>
        <section class="grid-container cell grid-y cell location" id='workshops'>
            <div class="cell">
                <h1>Competitions</h1>
            </div>
            <div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>

                <div class='cell large-12 text-center'>
                    <p>As always, Disobey has a bunch of competitions for you to hack your way through.
                        Find some of those below &ndash; and the rest at the event! The competitions are only active
                        during the event!
                    </p>
                </div>

                <div class='cell large-6'>
                    <h4>BADGE COMPETITIONS!</h4>

                    <p>Let's do a new thing with the badge! The badge's source available in <a
                                href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware"> in this
                            repository</a>.</p>

                    <p>The Badge 3D model and schema are available <a
                                href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware/blob/main/HARDWARE.md#badge-design-files">
                            here</a>.</p>

                    <p>Don't know what to do? Get to our Discord and in the badge channel and we will help you
                        onwards!</p>

                    <p>The 1st competition is "Best hardware mod for the badge." You know what to do!</p>

                    <p>The 2nd competition will be announced later, but will be software related!</p>

                </div>

            </div>
        </section>
    </div>

    <div class='full-row clearfix divider'>&nbsp;</div>

    <?php include "inc/contact.inc.php"; ?>

    <?php include "inc/footer.inc.php"; ?>
</section>
</body>
</html>
