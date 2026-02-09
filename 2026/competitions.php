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

<section class='container hidden' id='main-content'>

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
                    <h4>BADGE COMPETITION 1: BEST HARDWARE MOD</h4>

                    <p>Let's do a new thing with the badge! We are announcing badge competitions for hardware and software. The first badge competition is "Best hardware mod for the badge." You know what to do!</p>

                    <p>The badge's source available <a
                                href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware"> in this
                            repository</a>.</p>

                    <p>The Badge 3D model and schema are available <a
                                href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware/blob/main/HARDWARE.md#badge-design-files">
                            here</a>.</p>

                    <p>Don't know what to do? Join the badge channel in <a href="https://discord.gg/S7eMF3TQCj">our Discord</a> and we will help you onwards!</p>

                </div>

                <div class='cell large-6'>
                    <h4>BADGE COMPETITION 2: BEST (MINI)APP</h4>

                    <p>For the second badge competition, we challenge you to develop a game or application for the badge.</p> 
                    <p>Your app/game can be bundled <a href="https://github.com/disobeyfi/disobey-badge-2025-game-firmware">in the game firmware</a>
                        or it can be totally standalone. The only rule is that the custom code you write has to run in the badge.</p>
             
                    <p>Wanting to start but unsure about something? Join the badge channel in <a href="https://discord.gg/S7eMF3TQCj">our Discord</a> and we'll talk stuff through with you!</p>

                </div>
				<div class='cell large-6'>
					<h4>DISOBEY CTF</h4>
					<p>In a CTF, teams compete in solving hacker-minded challenges of varying types and skill levels. More solves, more points. Most points, victory.</p>
					<br><br>
					<ul style="font-family: monospace; font-size:16px;">
                    	<li>0x0000: The maximum team size is 10 people.</li>
    					<li>0x0027: The CTF is for event participants only, unfortunately participating outside the event won't be possible. This is due to resources and the physical nature of some challenges.</li>
                        <li>0x006a: scoring method will be dynamic, i.e., "the more solves the challenge has, the less points it's worth".</i>.</li>
                        <li>0x017e: A(t least a) wired network connection (1000BASE-T) will be provided, so you might want to prepare for that.</li>
                        <li>0x02ac: The CTF starts on Friday afternoon and ends on Saturday in the evening. Details TBA.</li>
                        <li>0xff8d: The winners are announced and objects are given at the Awards Ceremony on Saturday.</li>
                    </ul>
				</div>
				
                <div class='cell large-6'>
					<h4>UNAUTHORIZED ACCESS COMPETITION</h4>

					<p>Find NotMyNick inside the venue without authorised access credentials. If you already have a badge, you will be disqualified.</p>
                    <p>The first to hack themselves into the event wins an official badge and entry to the event. And only the first one will be awarded &ndash; any later ones will be firmly but politely escorted out. </p>
                    <p>Please note that this competition may lead to physical harm, removal from the venue, and depending on techniques used, having the authorities called on you. </p>
                    <p>Don’t get caught. </p>

				</div>
				
				<div class='cell large-6'>
                    <h4>HACKER PUZZLE</h4>

                    <p>The Hacker Puzzle has been finished and all hacker tickets have now been sold! You are free to post your walkthroughs!</p>

                    <p>Read more on the <a href="https://disobey.fi/2026/HackerPuzzle"> Hacker Puzzle main page</a>.</p>

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
