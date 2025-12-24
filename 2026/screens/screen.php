<!DOCTYPE html>
<html lang="en">
  <?php
    $is_portrait = isset($_GET['portrait']) && $_GET['portrait'] === 'true';
  ?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disobey 2026 - Stage Schedule</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <style>
      html {
          background: #741010ff;
          background-image: url('MainStage_Red.jpg');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
          color: white;
          width: 100%;
          height: 100%;
      }
      body {
          width: 100vw;
          height: 100vh;
          margin: 0;
          display: flex;
          flex-direction: column;
      }
      #app {
          display: flex;
          flex-direction: column;
          flex: 1;
      }
      .logo {
          display: block;
          margin-left: auto;
          margin-right: auto;
          padding-bottom: 1vh;
          height: 18vh;
          width: auto;
      }
      .stagename {
          text-align: center;
          font-size: 8vh;
          margin-top: 0;
          margin-bottom: 0;
          text-transform: uppercase;
      }
      .schedule {
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          gap: 8px;
          margin-top: 10px;
          font-size: 2.8vh;
          flex: 1;
      }
      .schedule-item {
          padding: 10px;
          display: flex;
          flex-direction: row;
          width: 50%;
          background: rgba(0,0,0,0.35);
          border-radius: 6px;
      }
      .time {
          width: 15%;
          font-weight: bold;
          text-align: left;
      }
      .title {
          flex: 1 1 auto;
          font-size: 1.2em;
          text-align: left;
          font-weight: bold;
          width: inherit;
          font-family: Georgia, serif;
      }
      .schedule-item.past .time,
      .schedule-item.past .title {
          color: #a0a0a0;
      }
      .schedule-item.current {
          background: rgba(50, 50, 50, 0.85);
          border: 2px solid rgba(255,255,255,0.4);
          box-shadow: 0 0 15px rgba(255,255,255,0.3);
          width: 55%;
      }
      .schedule-item.current .title {
          font-weight: bold;
      }

      /* Portrait Mode - Screen Size Agnostic */
      body.portrait {
          background-image: url('portrait_bg.png');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          display: flex;
          flex-direction: column;
          align-items: center;
          transform: rotate(-90deg);
          transform-origin: center center;
          width: 100vh;
          height: 100vw;
          position: absolute;
          top: 50%;
          left: 50%;
          margin-left: -50vh;
          margin-top: -50vw;
          overflow: hidden;
      }

      body.portrait .logo {
          height: 14vh;
          padding-bottom: 0.5vh;
          margin-bottom: 0;
          padding-top: 20vh;
      }

      body.portrait #app {
          margin-top: 0;
          padding-top: 0;
          display: flex;
          flex-direction: column;
          align-items: center;
          width: 100%;
          flex: 1;
      }

      body.portrait .stagename {
          font-size: 7vh;
          margin: 0 0 1vh 0;
          padding-top: 2vh;
          padding-bottom: 2vh;
      }

      body.portrait .schedule {
          flex: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
          gap: 1vh;
          margin-top: 0;
          font-size: 2.2vh;
          overflow-y: auto;
      }

      body.portrait .schedule-item {
          width: 80%;
          padding: 1.5vh 2vw;
          flex-direction: row;
          gap: 0.5vh;
      }

      body.portrait .time {
          font-size: 0.9em;
          margin-bottom: 0.5vh;
      }

      body.portrait .title {
          width: 100%;
          font-size: 1.1em;
      }

      body.portrait .schedule-item.current {
          width: 85%;
          border-width: 3px;
      }
    </style>
  </head>
  <body<?php if ($is_portrait) echo ' class="portrait"'; ?>>
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
    <img src="logo.webp" alt="Disobey Logo" width="100%" class="logo"/>
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
