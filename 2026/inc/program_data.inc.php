<?php
include('./inc/schedule_data.php');

/*-------------------------
 Timetable data
 -----------------------*/
/*-------------------------
 Day 1
 -----------------------*/

$main_day_1 = get_timetable_data("Terminal Stage", 1);

$doors_open_1 = array(
    "time" => "11:30",
    "header" => "Doors open and registration",
    "name" => "",
    "url" => "",
    "length" => 2,
);
array_push($main_day_1, $doors_open_1);

/* Workshop 1 */
$w1_day_1 = get_timetable_data("Security Forum", 1);

/* COMMUNITY STAGE */
$w2_day_1 = get_timetable_data("Security Theater", 1);

/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_1 = [];

/*-------------------------
 Day 2
 -----------------------*/

$main_day_2 = get_timetable_data("Terminal Stage", 2);
$doors_open_2 = array(
    "time" => "10:00",
    "header" => "Doors open and registration",
    "name" => "",
    "url" => "",
    "length" => 2,
);
array_push($main_day_2, $doors_open_2);

/* Workshop */
$w1_day_2 = get_timetable_data("Security Forum", 2);

/* Community Stage */
$w2_day_2 = get_timetable_data("Security Theater", 2);

/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_2 = [];
?>
