<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("program_data.inc.php");

/*-------------------------
 Timetable output class
 -----------------------*/
class TimeTable{
	public $range = NULL;
	public $time_label_slots = NULL;

	function output( $main_day_1, $w1_day_1, $w2_day_1, $w3_day_1, $day_string, $range_start){

			date_default_timezone_set("Europe/London");
			$this->range 						= range(strtotime( $range_start ),strtotime("23:45"),15*60);
			$this->time_label_slots = array_fill( 0, count( $this->range ),"" );

			$output =  $this->getColumn( $main_day_1, 	4, "Terminal Stage", 		"main", "Terminal", $day_string );
			$output .= $this->getColumn( $w2_day_1, 	3, "Security Theater", 	"cs", 	"Theater", $day_string );
			$output .= $this->getColumn( $w1_day_1, 	3, "Security Forum", 		"ws", 	"Forum", $day_string );
			/*$output .= $this->getColumn( $w3_day_1, 	2, "Workshop 2", "w3", "WS2", $day_string );*/ /* Workshop 2 - not shown only extra place for keynote stream? */

			$time_label_column = $this->getTimeLabelsColumn();

			return "<div id='timetable-day-1' class='grid-x'>{$time_label_column}{$output}{$time_label_column}</div>";
	}
	/*-------------------------
	 Time Labels
	 -----------------------*/
	function getTimeLabelsColumn(){
		$output = "";
		foreach( $this->time_label_slots as $key => $time_string ){
			$class = ( empty($time_string) )? "" : "has-time-label";
			$output .= "<div class='time-label-slot {$class}'>{$time_string}</div>";
		}
		return "<div class='timetable-column cell small-1 time-column'><div class='column-header'>TIME</div>{$output}</div>";
	}
	/*-------------------------
	 Get Single Column
	 -----------------------*/
	function getColumn( $data, $foundation_width, $column_header, $column_class, $column_shorthand, $day_string ){

		$output = "";
		$skip = 0;

		foreach($this->range as $index => $time){

				//Skip by previous slot program length
				if( $skip > 0 ){ $skip--; continue; }

				//Get slot data
				$slot = $this->getSlotData( $time, $data );
				if( empty($slot) ){ $output .= "<div class='empty'></div>"; continue; }

				// Do slot markup
				$slot_classes = ( empty($slot['classes']) )? "" : $slot['classes'];
				$time_string = date("H:i",$time);
				$link_start = ( empty($slot['url']) )? "" :"<a href='profile/{$slot['url']}'>";
				$link_end = ( empty($slot['url']) )? "" : "</a>";

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
				$this->time_label_slots[ $index ] = $time_string;
				$skip = $slot['length']-1;
		}

		return "<div class='timetable-column cell medium-{$foundation_width} {$column_class}'><div class='column-header'><span>{$column_header}</span></div>{$output}</div>";

	}
	/*-------------------------
	 Get single Slot
	 -----------------------*/
	function getSlotData( $time, $data ){
		foreach ( $data as $key => $value) {
			if( $time == strtotime($value['time']) ){
				return $value;
			}
		}
		return false;
	}

}


?>
<div class='schedule-list-container schedule-details text-center' >
	<h4 class="text-center" id="top">Friday 14th</h4>
	<!-- <div id='venue-map' class='medium-text-right text-center'><a href='practical.php'>See Venue map</a></div> -->
	<?php
			$timetable = new TimeTable();
			echo $timetable->output( $main_day_1, $w1_day_1, $w2_day_1, $w3_day_1, "Fri", "11:30" );
	?>
</div>

<!-- Program day 1 -->


<!-- Program day 2 -->
<div class='schedule-list-container schedule-details text-center' >
	<h4 class="text-center">Saturday 15th</h4>
	<?php
			echo $timetable->output( $main_day_2, $w1_day_2, $w2_day_2, $w3_day_2, "Sat", "10:00" );
	?>
</div>

<script>
$("td.time").each( function(){
	$(this).html(  $(this).html().replace("-","<span class='hide-for-small-only'> - </span><span class='show-for-small-only'><br></span>") )
})
</script>
