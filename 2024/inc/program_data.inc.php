<?php
include('./inc/schedule_data.php');

/*-------------------------
 Timetable data
 -----------------------*/
/*-------------------------
 Day 1
 -----------------------*/

$main_day_1 = get_timetable_data("Main Stage", 1);

/* Workshop 1 */
$w1_day_1 = get_timetable_data("Workshop", 1);

/* COMMUNITY STAGE */
$w2_day_1 = get_timetable_data("Security Theater", 1);

/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_1 = [];

/*-------------------------
 Day 2
 -----------------------*/

$main_day_2 = get_timetable_data("Main Stage", 2);

/* Workshop */
$w1_day_2 = get_timetable_data("Workshop", 2);

/* Community Stage */
$w2_day_2 = get_timetable_data("Security Theater", 2);

/* Workshop 2 - not shown only extra place for keynote stream? */
$w3_day_2 = [];
?>
