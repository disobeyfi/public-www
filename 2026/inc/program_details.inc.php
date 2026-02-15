<?php

// Note: Error reporting is configured in inc/config.php

include("program_data.inc.php");

/*-------------------------
 Timetable output class
 -----------------------*/

class TimeTable
{
    public array $range = [];
    public array $time_label_slots = [];

    /*-------------------------
     Calculate end time from data
     -----------------------*/
    function calculateEndTime(array $data_arrays): string {
        $latest_end = 0;

        foreach ($data_arrays as $data) {
            foreach ($data as $event) {
                $end = strtotime($event['time']) + ($event['length'] * 15 * 60);
                $latest_end = max($latest_end, $end);
            }
        }

        return date("H:i", ceil($latest_end / (15 * 60)) * (15 * 60));
    }

    function output(array $main_day_1, array $w1_day_1, array $w2_day_1, array $w3_day_1, string $day_string, string $range_start): string
    {

        date_default_timezone_set("Europe/Helsinki");

        $range_end = $this->calculateEndTime([$main_day_1, $w1_day_1, $w2_day_1, $w3_day_1]);
        $this->range = range(strtotime($range_start), strtotime($range_end), 15 * 60);
        $this->time_label_slots = array_fill(0, count($this->range), "");

        $output = $this->getColumn($main_day_1, 4, "Terminal Stage", "main", "Terminal", $day_string);
        $output .= $this->getColumn($w2_day_1, 3, "Security Theater", "cs", "Theater", $day_string);
        $output .= $this->getColumn($w1_day_1, 3, "Security Forum", "ws", "Forum", $day_string);
        /*$output .= $this->getColumn( $w3_day_1, 	2, "Workshop 2", "w3", "WS2", $day_string );*/ /* Workshop 2 - not shown only extra place for keynote stream? */

        $time_label_column = $this->getTimeLabelsColumn();

        return "<div id='timetable-day-1' class='grid-x'>{$time_label_column}{$output}{$time_label_column}</div>";
    }

    /*-------------------------
     Time Labels
     -----------------------*/
    function getTimeLabelsColumn(): string
    {
        $output = "";
        foreach ($this->time_label_slots as $key => $time_string) {
            $class = (empty($time_string)) ? "" : "has-time-label";
            $output .= "<div class='time-label-slot {$class}'>{$time_string}</div>";
        }
        return "<div class='timetable-column cell small-1 time-column'><div class='column-header'>TIME</div>{$output}</div>";
    }

    /*-------------------------
     Get Single Column
     -----------------------*/
    function getColumn(array $data, int $foundation_width, string $column_header, string $column_class, string $column_shorthand, string $day_string): string
    {

        $output = "";
        $skip = 0;

        foreach ($this->range as $index => $time) {

            //Skip by previous slot program length
            if ($skip > 0) {
                $skip--;
                continue;
            }

            //Get slot data
            $slot = $this->getSlotData($time, $data);
            if (empty($slot)) {
                $output .= "<div class='empty'></div>";
                continue;
            }

            // Do slot markup
            $slot_classes = (empty($slot['classes'])) ? "" : $slot['classes'];
            $time_string = date("H:i", $time);
            $link_start = (empty($slot['url'])) ? "" : "<a href='profile/{$slot['url']}'>";
            $link_end = (empty($slot['url'])) ? "" : "</a>";

            $output .= "{$link_start}<div class='height-{$slot['length']} has-content timetable-cell {$slot_classes}'>
					<div class='mobile-date'>
						<div class='mobile-day-label'>{$day_string}</div>
						{$time_string}<br>
						{$column_shorthand}
					</div>
					<div class='cell-header'>
						<h2>{$slot['header']}</h2>
						<span>{$slot['name']}</span>
					</div>
				</div>{$link_end}";

            //Add time where program starts and amount of skipped slots
            $this->time_label_slots[$index] = $time_string;
            $skip = $slot['length'] - 1;
        }

        return "<div class='timetable-column cell medium-{$foundation_width} {$column_class}'><div class='column-header'><span>{$column_header}</span></div>{$output}</div>";

    }

    /*-------------------------
     Get single Slot
     -----------------------*/
    function getSlotData(int $time, array $data): array|false
    {
        foreach ($data as $key => $value) {
            if ($time == strtotime($value['time'])) {
                return $value;
            }
        }
        return false;
    }

}


?>

<nav class='program-tabs' id='program-tabs'>
    <a href='#friday' class='active'>Friday</a>
    <a href='#saturday'>Saturday</a>
</nav>

<div id='friday' class='schedule-list-container schedule-details text-center program-section'>
    <h4 class="text-center">Friday 13th</h4>
    <?php
    $timetable = new TimeTable();
    echo $timetable->output($main_day_1, $w1_day_1, $w2_day_1, $w3_day_1, "Fri", "11:30");
    ?>
</div>

<div id='saturday' class='schedule-list-container schedule-details text-center program-section'>
    <h4 class="text-center">Saturday 14th</h4>
    <?php
    echo $timetable->output($main_day_2, $w1_day_2, $w2_day_2, $w3_day_2, "Sat", "10:00");
    ?>
</div>

<script>
  $("td.time").each(function () {
    $(this).html($(this).html().replace("-", "<span class='hide-for-small-only'> - </span><span class='show-for-small-only'><br></span>"))
  })
</script>

<script>
(function() {
    const tabs = document.querySelectorAll('.program-tabs a');
    const sections = ['friday', 'saturday'];

    function updateActiveTab() {
        const scrollPos = window.scrollY + 150;

        let current = sections[0];
        for (const id of sections) {
            const section = document.getElementById(id);
            if (section && section.offsetTop <= scrollPos) {
                current = id;
            }
        }

        tabs.forEach(tab => {
            tab.classList.toggle('active', tab.getAttribute('href') === '#' + current);
        });
    }

    window.addEventListener('scroll', updateActiveTab);
    updateActiveTab();
})();
</script>
