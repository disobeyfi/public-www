<?php
// cat exported-schedule.json | jq 'del(.schedule.conference.days[].rooms[][] | .answers, .description)' > inc/schedule.json

$schedule_data = json_decode(file_get_contents(__DIR__ . "/schedule.json"), true)["schedule"]["conference"];

function get_timetable_data(string $roomname, int $dayindex): array
{
    global $schedule_data;
    $timetable = array();

    foreach ($schedule_data["days"] as $day) {
        if ($day["index"] != $dayindex) continue;
        foreach ($day["rooms"] as $room => $roomdata) {
            if ($room != $roomname) continue;
            foreach ($roomdata as $event) {
                $entry = array();
                $entry["time"] = $event["start"];
                $entry["header"] = $event["title"];
                $entry["name"] = join(", ", array_map(function ($a) {
                    return $a["public_name"];
                }, $event["persons"]));
                $entry["url"] = $event["slug"];
                // length
                list($hour, $minute) = explode(':', $event["duration"]);
                $entry["length"] = floor($hour * 4 + ($minute / 15));
                array_push($timetable, $entry);
            }
        }
    }
    return ($timetable);
}
?>
