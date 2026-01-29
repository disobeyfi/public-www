<!DOCTYPE html>
<html lang="en">

<?php
    $slug 		= "community-village-program";
    $pagename = "Community Village Program";
    include "inc/head.inc.php";
?>

<?php
// read csv file from inc/community/friday.csv and saturday.csv
// use semicolon as delimiter, skip the first line (header)
$friday_events = array_map(function($line) {
    return str_getcsv($line, ';');
}, array_slice(file('inc/cv-csvs/CV-1-Fri.csv'), 1));
$saturday_events = array_map(function($line) {
    return str_getcsv($line, ';');
}, array_slice(file('inc/cv-csvs/CV-2-Sat.csv'), 1));
$continuous_events = array_map(function($line) {
    return str_getcsv($line, ';');
}, array_slice(file('inc/cv-csvs/CV-3-Ongoing.csv'), 1));

// run all fields through htmlspecialchars to prevent XSS
function escape_event($event) {
    return array_map('htmlspecialchars', $event);
}
$friday_events = array_map('escape_event', $friday_events);
$saturday_events = array_map('escape_event', $saturday_events);
$continuous_events = array_map('escape_event', $continuous_events);

// filter out empty events (where title is empty)
$friday_events = array_filter($friday_events, function($event) {
    return !empty($event[2]);
});
$saturday_events = array_filter($saturday_events, function($event) {
    return !empty($event[2]);
});
$continuous_events = array_filter($continuous_events, function($event) {
    return !empty($event[1]);
});
?>

<body class='text-center hide-background subpage'>

    <script> var current_navi_item="program" </script>
    <?php include "inc/navigation.inc.php"; ?>
    <?php include "inc/header.inc.php";	?>

    <section class='container hidden'>

        <div class='full-row clearfix lazyload translucent' >
                <section class="grid-container cell grid-y cell location" id='workshops' >
                    <div class="cell">
                        <h1>Community Village</h1>
                    </div>
                    <div class='cell'>
                        <p>Community Village – A Place to Explore, Learn, Hack, and Hang Out.</p>
                        <p>It's where tech enthusiasts, tinkerers, and curious minds unite to dive into everything from CTFs, robots, demos, and workshops to other hands-on activities. Meet different communities and organizations, test your skills, and explore all the exciting opportunities they have to offer.</p>
                        <p>Got some downtime? Head to the Community Lounge, challenge yourself with lockpicking or just kick back on the sofas, and swap ideas (or war stories) with fellow hackers in a chill, laid-back vibe.</p>
                        <p>Whether you're here to level up your skills or just soak in the energy, the Community Village is where the action happens.</p>


                    </div>



                    <div id='community-program'>

                        <h3>Friday &ndash; Community Village</h3>
                        <div class='community-sub-nav'>
                            <a href='#community-program'>Friday</a> |
                            <a href='#saturday'>Saturday</a> |
                            <a href='#unscheduled'>Continuous</a>
                        </div>

                        <div class='program-table'>
                            <?php
                            foreach ($friday_events as $event) {
                                echo "<div class='row'>\n";
                                echo   "<div class='time'>{$event[0]}-{$event[1]}</div>
                                        <div class='title'>{$event[2]}</div>
                                        <div class='description'>
                                            <p>{$event[3]}</p>
                                            <p>{$event[4]}</p>
                                        </div>\n";
                                // it this is the last event, add the saturday anchor
                                if ($event === end($friday_events)) {
                                    echo "<a id='saturday' name='saturday'></a>\n";
                                }
                                echo "</div>\n";
                            }
                            ?>
                        </div>

                        <h3 > Saturday &ndash; Community Village</h3>
                        <div class='community-sub-nav'>
                            <a href='#community-program'>Friday</a> |
                            <a href='#saturday'>Saturday</a> |
                            <a href='#unscheduled'>Continuous</a>
                        </div>


                        <div class='program-table'>
                            <?php
                            foreach ($saturday_events as $event) {
                                echo "<div class='row'>\n";
                                echo   "<div class='time'>{$event[0]}-{$event[1]}</div>
                                        <div class='title'>{$event[2]}</div>
                                        <div class='description'>
                                            <p>{$event[3]}</p>
                                            <p>{$event[4]}</p>
                                        </div>\n";
                                // it this is the last event, add the unscheduled anchor
                                if ($event === end($saturday_events)) {
                                    echo "<a id='unscheduled' name='unscheduled'></a>\n";
                                }
                                echo "</div>\n";
                            }
                            ?>
                        </div>

                        <h3>Ongoing Continuous Program<br> at Community VIllage</h3>
                        <div class='community-sub-nav'>
                            <a href='#community-program'>Friday</a> |
                            <a href='#saturday'>Saturday</a> |
                            <a href='#unscheduled'>Continuous</a>
                        </div>


                        <div class='grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>
                            <?php
                            foreach ($continuous_events as $event) {
                                echo "<div class='cell medium-6'>\n";
                                echo   "<h4>{$event[1]} by {$event[0]}</h4>\n";
                                echo   "<p>{$event[2]}</p>\n";
                                echo "</div>\n";
                            }
                            ?>
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
