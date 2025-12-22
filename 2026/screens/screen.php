<!DOCTYPE html>
<html lang="en">
  <?php include "../inc/schedule_data.php"; ?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disobey 2026 - Stage Schedule</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
      html {
          background: #741010ff;
          background-image: url('MainStage_Red.jpg');
          background-size: contain;
          background-repeat: no-repeat;
          color: white;
      }
      .logo {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
      }
      .stagename {
          text-align: center;
          font-size: 2em;
          margin-top: 0;
      }
      .schedule {
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 8px;
          margin-top: 10px;
      }
      .schedule-item {
          padding: 10px;
          display: flex;
          flex-direction: row;
          width: min(900px, 85%);
          background: rgba(0,0,0,0.12);
          border-radius: 6px;
          align-items: center;
      }
      .time {
          width: 140px;
          flex: 0 0 140px;
          font-weight: bold;
          text-align: left;
      }
      .title {
          flex: 1 1 auto;
          font-size: 1.2em;
          text-align: left;
      }
      .schedule-item.past .time,
      .schedule-item.past .title {
          color: #a0a0a0;
      }
      .schedule-item.current {
          background: rgba(255,255,255,0.15);
          border: 2px solid rgba(255,255,255,0.4);
          box-shadow: 0 0 15px rgba(255,255,255,0.3);
      }
      .schedule-item.current .title {
          font-weight: bold;
      }
    </style>
  </head>
  <body>
    <?php
      switch ($_GET['stage']) {
          case 'terminal':
              $stage_name = "Terminal Stage";
              break;
          case 'forum':
              $stage_name = "Security Forum";
              break;
          case 'theater':
              $stage_name = "Security Theater";
              break;
          default:
              exit;
      }
      ?>
    <img src="../img/logo.webp" alt="Disobey Logo" width="100%" class="logo"/>
    <div id="app">
      <h1 class='stagename'>{{ room }}</h1>
      <div class="schedule">
        <div class="schedule-item" v-for="item in schedule_data" :key="item.time" :class="{ past: isItemPast(item), current: isItemCurrent(item) }">
          <div class="time">{{ item.time }}</div>
          <div class="title">{{ item.header }}</div>
        </div>
      </div>
    </div>
    <?php
    ?>
    <script>
      const { createApp, ref, onMounted } = Vue;

      createApp({
        setup() {
          const room = ref("<?php echo htmlspecialchars($stage_name); ?>");
          const schedule_data = ref([]);
          const currentTime = ref(new Date());

          function update_data() {
            // Any update logic can go here
            console.log("Updating schedule data...");
            fetch('https://disobey.fi/2026/inc/schedule.json')
              .then(response => response.json())
              .then(data => {
                // 2026-02-13 and before is day 1, 2026-02-14 and after is day 2
                let currentDate = new Date();
                let cutoffDate = new Date('2026-02-14T00:00:00+02:00');
                let dayIndex = (currentDate < cutoffDate) ? 1 : 2;
                // console.log("fetching data for", room.value, ", day ", dayIndex);
                let timetable = [];
                let conference_data = data["schedule"]["conference"];
                conference_data["days"].forEach(day => {
                  // console.log("Checking", day)
                  if (day["index"] != dayIndex) return;
                  for (const [roomName, roomData] of Object.entries(day["rooms"])) {
                    // console.log(roomName, roomData)
                    if (roomName != room.value) continue;
                    // console.log("We got so far")
                    roomData.forEach(event => {
                      // console.log(event)
                      let entry = {};
                      entry["time"] = event["start"];
                      entry["header"] = event["title"];
                      entry["duration"] = event["duration"];
                      // console.log(entry)
                      timetable.push(entry);
                    });
                  };
                });
                // console.log("Timetable:", timetable);
                if (timetable.length > 0) {
                  schedule_data.value = timetable;
                }
                // console.log("Schedule data:", schedule_data.value)
              })
          }

          function isItemPast(item) {
            if (!item || !item.time || !item.duration) {
              return false;
            }

            // Use currentTime.value to make this reactive
            const now = currentTime.value;

            // Parse the start time (format: "HH:MM")
            const [hours, minutes] = item.time.split(':').map(Number);
            const itemStartTime = new Date();
            itemStartTime.setHours(hours, minutes, 0, 0);

            // Parse duration (format: "HH:MM")
            const [durationHours, durationMinutes] = item.duration.split(':').map(Number);
            const durationMs = (durationHours * 60 + durationMinutes) * 60 * 1000;

            // Calculate end time
            const itemEndTime = new Date(itemStartTime.getTime() + durationMs);

            // Item is past if current time is after the end time
            return now >= itemEndTime;
          }

          function isItemCurrent(item) {
            if (!item || !item.time || !item.duration) {
              return false;
            }

            // Use currentTime.value to make this reactive
            const now = currentTime.value;

            // Parse the start time (format: "HH:MM")
            const [hours, minutes] = item.time.split(':').map(Number);
            const itemStartTime = new Date();
            itemStartTime.setHours(hours, minutes, 0, 0);

            // Parse duration (format: "HH:MM")
            const [durationHours, durationMinutes] = item.duration.split(':').map(Number);
            const durationMs = (durationHours * 60 + durationMinutes) * 60 * 1000;

            // Calculate end time
            const itemEndTime = new Date(itemStartTime.getTime() + durationMs);

            // Item is current if now is between start and end time
            return now >= itemStartTime && now < itemEndTime;
          }

          onMounted(() => {
            console.log("Starting, fetching schedule data...");
            update_data();
            // Update schedule data every 5 minutes
            setInterval(update_data, 5 * 60 * 1000);
            // Update current time every minute to refresh past/current status
            setInterval(() => {
              currentTime.value = new Date();
            }, 60 * 1000);
          });

          return {
            room,
            schedule_data,
            isItemPast,
            isItemCurrent
          };
        }
      }).mount('#app');
    </script>
  </body>
</html>
