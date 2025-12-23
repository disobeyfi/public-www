<!DOCTYPE html>
<html lang="en">

<?php
$slug = "tickets";
$pagename = "Tickets";
include "inc/head.inc.php";
?>
<body class='text-center hide-background subpage subpage-tickets'>

<script> var current_navi_item = "tickets" </script>
<?php include "inc/navigation.inc.php"; ?>
<?php include "inc/header.inc.php"; ?>

<script>
  $(".header-row").append($("#tickets-page-get-ticket"))
</script>

<section class='container hidden'>

    <div class='full-row clearfix lazyload translucent'>

        <section class='text-left grid-container grid-x grid-padding-x grid-padding-y grid-margin-y'>

            <div class='cell large-12 flex-column text-center medium-text-left sideline'>

                <h4>TICKET SALES RAFFLE</h4>

                <p>UPDATE: The ticket raffle winners have been contacted, and they have until Dec 29th to buy their tickets. After that, remaining tickets are raffled to new winners!</p>
              
                <p>Yes, tickets were sold out in record time. But do not worry! We have a bunch of standard tickets we
                    will be selling via a raffle - so this will not be a speed contest.</p>

                <p>Just enter your contact information via the form below to enter the raffle. The raffle is open until
                    December 15th 23:59 Finn time (UTC+2 now that it is winter time), and winners will be notified
                    personally on (or by) December 21st 2025. Winners will have 1 week to buy their ticket – after that,
                    they are freed to the next lucky winners.</p>

                <p>Tickets bought via purchase rights won in the raffle cost 49€ – the same as a standard user ticket.
                    One raffle entry is for the purchase right for one ticket.</p>

                <p><b>Note that the tickets do not include the electronic badge as default; it is an optional add-on
                        that can be bought separately when buying the tickets - as long as there are badges left to
                        sell. See more below. </b></p>

 
            </div>

            <div class='cell large-6 flex-column text-center medium-text-left sideline'>

                <h4>CORPORATE TICKETS</h4>

                <p>The Disobey corporate ticket for the 2026 event. Corporate tickets are aimed for corporations and
                    organizations, and they help us keep regular ticket prices low.</p>

                <p>One corporate ticket costs 350€.</p>

                <p><b>Note that the tickets do not include the electronic badge as default; it is an optional add-on
                        that can be bought separately when buying the tickets. See more below. </b></p>

                <p>
                    <a class='buy-ticket-button inactive' href="https://tickets.disobey.fi" target='_blank'>SOLD OUT</a>
                </p>

            </div>

            <div class='cell large-6 flex-column text-center medium-text-left sideline'>

                <h4>STANDARD TICKETS</h4>

                <p>A standard Disobey ticket grants two day entrance to the event on Feb 13-14th 2026.</p>

                <p>One standard ticket costs 49€. You can buy max 3 tickets at a time.</p>

                <p><b>Note that the tickets do not include the electronic badge as default; it is an optional add-on
                        that can be bought separately when buying the tickets. See more below. </b></p>
                <p>
                    <!-- button placeholder keep class buy-ticket-button remove inactive -->
                    <a class='buy-ticket-button inactive' href="https://tickets.disobey.fi" target='_blank'>SOLD OUT</a>
                </p>
            </div>

        </section><!-- Grid end -->

    </div><!-- row end -->

    <div class='full-row clearfix divider'>&nbsp;</div>

    <div class='full-row clearfix lazyload translucent'>
        <section class="grid-container cell grid-y cell location" id='puzzle'>
            <div class="cell">
                <h1 class="red">Electronic Badge</h1>
            </div>
            <div class='cell'>
                <p>The electronic badge is a physical tool with which you can access the badge challenge and games at
                    Disobey. Purchasing it is optional, but if you enjoy badge challenges, you will want to consider it!
                    If you want to check the designs for some previous years, you will find them here: <a
                            href="https://badge.team/docs/badges/disobey-2020/">2020 Badge.team</a>, <a
                            href="https://badge.team/docs/badges/disobey-2019/">2019 Badge.team</a>, <a
                            href="https://github.com/disobeyfi/badge-2019">2019 GitHub</a>, <a
                            href="https://github.com/disobeyfi/badge-2018">2018 GitHub</a>, <a
                            href="https://github.com/disobeyfi/badge-2017">2017 GitHub</a>.</p>

                <p>Important: Please note that you can only buy badges when buying your tickets. You cannot buy them
                    afterwards or at the event - only when buying your ticket.</p>
            </div>
        </section>
    </div><!-- row end -->

    <div class='full-row clearfix divider'>&nbsp;</div>
    <?php include "inc/contact.inc.php"; ?>

</section>

<?php include "inc/footer.inc.php"; ?>

</body>
</html>
