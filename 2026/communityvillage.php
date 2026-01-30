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
    return str_getcsv($line, ';', '"', '');
}, array_slice(file(__DIR__ . '/inc/cv-csvs/CV-1-Fri.csv'), 1));
$saturday_events = array_map(function($line) {
    return str_getcsv($line, ';', '"', '');
}, array_slice(file(__DIR__ . '/inc/cv-csvs/CV-2-Sat.csv'), 1));
$continuous_events = array_map(function($line) {
    return str_getcsv($line, ';', '"', '');
}, array_slice(file(__DIR__ . '/inc/cv-csvs/CV-3-Ongoing.csv'), 1));

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

    <script> var current_navi_item="community-village" </script>
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
                            <a href='#saturday'>Saturday</a> |
                            <a href='#unscheduled'>Continuous</a> |
                            <a href='#villagers'>Meet the Villagers</a>
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

                        <h3> Saturday &ndash; Community Village</h3>
                        <div class='community-sub-nav'>
                            <a href='#community-program'>Friday</a> |
                            <a href='#unscheduled'>Continuous</a> |
                            <a href='#villagers'>Meet the Villagers</a>
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
                            <a href='#villagers'>Meet the Villagers</a>
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
                <section class="grid-container cell grid-y cell location" id='workshops'>
                    <div class="cell">
                        <h3 id="villagers">Meet the Villagers</h3>
                            <div class='community-sub-nav'>
                                <a href='#community-program'>Friday</a> |
                                <a href='#saturday'>Saturday</a> |
                                <a href='#unscheduled'>Continuous</a>
                            </div>
                    </div>
                    <div class='cell text-left grid-container grid-x grid-padding-x grid-margin-x grid-padding-y grid-margin-y'>
        
                        <div class='cell large-12 text-center'>
                            <p>As always, our Community Village is composed by a community of wonderful organizations and associations. Meet them below (in alphabetical order).</p>
                        </div>
        
                        <div class='cell large-6'>
                            <h4>Cyber Club Kotka</h4>
                            <p>Cyber Club Kotka, officially known as Kotkan Kyberturvallisuusinsinööriopiskelijat ry, is the student association for cybersecurity students at XAMK. Our goal is to help students find friends and get to know each other at the very beginning of their studies, support networking within the cybersecurity field, and offer members shared activities and events related to cybersecurity as well as activities beyond the field.</p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Hacklab</h4>
                            <p>Do you need tools, place or community to make physical things? Local Hacklab might be your solution. At Disobey we have small electronics workbenches, some 3D printing and all kinds of projects our members have made. Visit us at <a href="https://hacklab.fi/index_en.html">https://hacklab.fi/index_en.html</a> </p>
                        </div>
                            <div class='cell large-6'>
                            <h4>Halko - Hacklab Kuopio ry</h4>
                            <p>Halko - Hacklab Kuopio ry is a non-profit communal workspace / makerspace in Kuopio, Finland. We provide spaces, equipment and community for many kinds of projects involving both tech and art. Everyone 18+ is welcome to come visit us on our twice per week open days and check out the premises and meet people. Experience is not required, Halko is a great space to get inspiration, learn new stuff, work on projects and have fun. Visit us at <a href="https://halko.fi/en">https://halko.fi/en</a> </p>
                        </div>
                            <div class='cell large-6'>
                            <h4>HelSec Ry</h4>
                            <p>Cybersecurity group by the community, for the community. Founded in 2018, a non-profit organization HelSec currently organizes regular meetups, where security professionals, enthusiasts and other like-minded people can meet and network in the Helsinki region. Visit us at <a href="https://helsec.fi/">https://helsec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>H-T8 Hacking Club</h4>
                            <p>H‑T8 is a student‑driven hacking club created by students, for students. Our mission is to open the doors to the exciting world of cybersecurity and help newcomers take their first steps as ethical hackers. We organize excursions, CTF competitions and student events where members can learn practical skills and network. Whether you’re an absolute beginner or already exploring advanced topics, H‑T8 offers a supportive community where curiosity and experimentation are encouraged.</p>

                            <p>For many, we are the first real connection to cybersecurity, and we take pride in making that introduction fun, inclusive, and inspiring. We offer content for all skill levels, from basic introductions to advanced activities. Our experienced members also form a competitive CTF team that participates in contests throughout the year. If you’re a student or someone who enjoys supporting students in this field, come join us and be part of the H‑T8 community! Visit us at <a href="https://rbin.dev/H-T8/">https://rbin.dev/H-T8/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>KuoSec ry</h4>
                            <p>KuoSec ry is part of the CitySec family. It is an infosec community located at Kuopio, Finland. Our purpose is to organize meetups and get-togethers focused on training and networking. Anyone interested in the Infosec field is welcome to join us, meet likeminded people and hopefully learn something new. Visit us at <a href="https://kuosec.fi/">https://kuosec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>KymiSec ry</h4>
                            <p>KymiSec ry is part of the CitySec family. We are an information security community based in the Kymenlaakso region of Finland. Our goal is to organize infosec-related meetups and events focused on learning and networking. KymiSec works in cooperation with Cyber Club Kotka (CCK). Anyone interested in information security and cybersecurity is welcome to join us, meet like-minded people, and develop their skills. Visit us at <a href="https://www.kymisec.fi/">https://www.kymisec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>LahtiSec</h4>
                            <p>Lahti Cyber Security Society (LahtiSec) is the CitySec chapter in Lahti, Finland. We host meetups three times a year, grow the local security community, and make cyber security easier to approach whether you’re a pro, a student, or just curious. Visit our Community Village stand to meet the crew, hear what's going on (including KyberLahti 2026), and catch a little “Business City” energy! Visit us at <a href="https://lahtisec.fi/">https://lahtisec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Lockpicking Village</h4>
                            <p>Four experienced/professional lockpickers teaching and showing how locks and lockpicking works. We aim to introduce the basics of physical security to everyone, so that together the security concious minds would improve total security.</p>
                        </div>
                        <div class='cell large-6'>
                            <h4>PoroSec</h4>
                            <p>The InfoSec Community of Northern Finland. The Information Security community from the northern part of Finland (mainly Rovaniemi) welcomes anyone interested in information security or eager to learn something new. We organize meetups and events for infosec enthusiasts. Visit us at <a href="https://porosec.fi/">https://porosec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Robot Uprising ry</h4>
                            <p>Robot Uprising is a volunteer-led community that shares a common love for robots and making cool stuff happen. We organize hands-on robotics events combining gaming, storytelling, and tech challenges. Visit us at <a href="https://robotuprising.fi/">https://robotuprising.fi/</a></p>
                        </div>
                        <div class='cell large-6'>
                            <h4>SaimaaSec</h4>
                            <p>Information security community from Lappeenranta. We organise meetups and community events on a regular basis. We welcome anyone interested in information security, whether you are a student, professional or just curious about infosec. Visit us at <a href="https://saimaasec.fi/">https://saimaasec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Skrolli</h4>
                            <p>At the Skrolli booth you can try out older and more unique home computers that you may recognize from the pages of the magazines. You can also let us know if you'd be interested in an international edition of Skrolli and of course subscribe Skrolli for 2026 or purchase older issues. Join the conversation on Skrolli’s reader channels (Discord, Matrix, IRC) at <a href="skrolli.fi/lukijakanavat/">skrolli.fi/lukijakanavat/</a></p>
                        </div>
                        <div class='cell large-6'>
                            <h4>SRAL / Radio amateurs</h4>
                            <p>Amateur radio is where curiosity meets communication — visit the SRAL booth to discover how radio enthusiasts build DIY gear, explore signals, and connect with the world in surprising ways. Visit us at <a href="https://www.sral.fi/en/">https://www.sral.fi/en/</a></p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Testausserveri</h4>
                            <p>Testausserveri is an open community for young and young minded people interested in programming, ethical hacking and tech in general. This Disobey you can try your hardest with our CTF challenges and come meet us along with some guest stars from the Finnish European Cybersecurity Competition team. <a href="https://testausserveri.fi/">https://testausserveri.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>TurkuSec</h4>
                            <p>Mother of CitySecs. TurkuSec ry is a nonprofit organization of information security professionals, practitioners and enthusiasts. Visit us on DisObey Community Village to chat about citysecs, cyber stuff and life in general, try LLM hacking challenges, and some ad-hoc challenges. Visit us at <a href="https://turkusec.fi/">https://turkusec.fi/</a> </p>
                        </div>
                        <div class='cell large-6'>
                            <h4>Women4Cyber Finland</h4>
                            <p>Women4Cyber Finland is a non profit association dedicated to advancing women’s careers in cybersecurity, thus increasing diversity and equalizing the existing gender imbalance. As Finland’s official chapter within a European network of over 30 chapters, we promote equal opportunities, raise awareness, and strengthen the national cyber talent pool. We contribute to public dialogue, host networking and learning events, and provide support and up to date insights in close cooperation with our partners. Visit us at <a href="https://www.women4cyberfinland.com/">https://www.women4cyberfinland.com/</a> </p>
                       </div>
                    </section>
                </div>

        <div class='full-row clearfix divider'>&nbsp;</div>
        <?php include "inc/contact.inc.php"; ?>


        <?php include "inc/footer.inc.php"; ?>
    </section>
</body>
</html>
