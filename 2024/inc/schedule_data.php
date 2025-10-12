<?php
// include('./profiles/filenames.php');
// cat schedule.json | jq 'del(.schedule.conference.days[].rooms[][].answers)' > schedule_without_answers.json

$schedule_data = json_decode(file_get_contents("./inc/schedule.json"), true)["schedule"]["conference"];

function get_timetable_data($roomname, $dayindex) {
    print("<!-- fetching data for ".$roomname.", day ".$dayindex." -->\n");
    global $filenames, $schedule_data;
    $timetable = array();

    foreach ($schedule_data["days"] as $day) {
        // print_r($day);
        // print_r($day["index"]);
        // print_r($day["rooms"], $dayindex);
        if ($day["index"] != $dayindex) continue;
        // print_r($day["rooms"]);
        foreach ($day["rooms"] as $room => $roomdata) {
            // print($room);
            // print_r($roomdata);
            if ($room != $roomname) continue;
            foreach ($roomdata as $event) {
                $entry = array();
                $entry["time"] = $event["start"];
                $entry["header"] = $event["title"];
                $entry["name"] = join(", ", array_map(function($a) { return $a["public_name"]; }, $event["persons"]));
                $entry["url"] = $event["slug"];
                // length
                list($hour, $minute) = explode(':', $event["duration"]);
                $entry["length"] = floor($hour*4 + ($minute / 15));
                array_push($timetable, $entry);
            }
        }
    }
    return($timetable);
}

// test code below

// $main_day_1 = get_timetable_data("Main stage", 1);
// print_r($main_day_1);

// $main_day_1 = [
//     ['id' => 106, 'time'=>'11:30', 'length'=>'2', 'header'=>'Doors open & registration', 'name'=>'', 'url' => '', "guid" => "41f9d291-a87f-5d92-b540-123f4976c6a5"],
//     ['id' => 108, 'time'=>'12:30', 'length'=>'2', 'header'=>'Opening', 'name'=>'NotMyNick', 'url' => '', "guid" => "36e8e127-c41a-5504-9609-1ab119a7f276"],
//     ['id' => 31, 'time'=>'13:00', 'length'=>'4', 'classes'=>'keynote', 'header'=>'KEYNOTE', 'name'=>'Antti Kurittu', 'url' => 'keynote_kurittu' ],
//     ['id' => 34, 'time'=>'14:15', 'length'=>'4', 'header'=>'Losing My Mental Health in Cyber Security', 'name'=>'Juho "Whois" Jauhiainen', 'url' => 'losing_my_mental_health_in_cyber_security' ],
//     ['id' => 45, 'time'=>'15:30', 'length'=>'2', 'header'=>'Drug Traders on the Dark Web', 'name'=>'J. Tuomas Harviainen', 'url' => 'drug_traders_on_the_dark_web' ],

//     ['id' => 75, 'time'=>'17:00', 'length'=>'4', 'header'=>'Need for network visibility in the age of modern EDR', 'name'=>'Ville Vainikka, Henri Aalto', 'url' => 'need_for_network_visibility' ],
//     ['id' => 89, 'time'=>'18:15', 'length'=>'2', 'header'=>'I am a weapon of the mind', 'name'=>'Pyry Åvist', 'url' => 'i_am_a_weapon_of_the_mind' ],
//     ['id' => 28, 'time'=>'19:00', 'length'=>'3', 'header'=>'Locked Sky Boats (simplified)', 'name'=>'Benjamin Nagel' , 'url' => 'locked_sky_boats'],
//     ['id' => 38, 'time'=>'20:00', 'length'=>'4', 'header'=>'Building cybersecurity in maritime world, a story of SVAN', 'name'=>'Karo Vallittu', 'url' => 'building_cybersecurity_in_maritime_world' ],
//     ['id' => 88, 'time'=>'21:15', 'length'=>'4', 'header'=>'Vulnerability handling for the masses', 'name'=>'Jussi Eronen', 'url' => 'vulnerability_handling_for_the_masses' ],

//     ['id' => 112, 'time'=>'23:00', 'length'=>'2', 'header'=>'DOORS CLOSE 23:00', 'name'=>'', 'url' => '', "guid" => "e9f9ebfa-d12b-5499-bfd7-7c440b07054c"]
// ];
// print_r($main_day_1);
?>