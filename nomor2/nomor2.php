<!DOCTYPE html>
<html>
   <body style = "text-align: center">
         <h2>Stopwatch</h2>
         <div id="stopwatch" >00:00:00:000</div><br>
         <button onclick="startStopwatch()">Start</button>
         <button onclick="resetStopwatch()">Stop</button>
         <button onclick="liststopwatch()">Flag</button>

         <br><br>
         <div id="list"></div>

   <script>
      var startTime; // to keep track of the start time
      var stopwatchInterval; // to keep track of the interval
      var elapsedPausedTime = 0; // to keep track of the elapsed time while stopped
      
      function startStopwatch() {
        if (!stopwatchInterval) {
          startTime = new Date().getTime() - elapsedPausedTime; // get the starting time by subtracting the elapsed paused time from the current time
          stopwatchInterval = setInterval(updateStopwatch, 1); // update every second
        }
      }
      
      function stopStopwatch() {
        clearInterval(stopwatchInterval); // stop the interval
        elapsedPausedTime = new Date().getTime() - startTime; // calculate elapsed paused time
        stopwatchInterval = null; // reset the interval variable
      }
      
      function resetStopwatch() {
        stopStopwatch(); // stop the interval
        elapsedPausedTime = 0; // reset the elapsed paused time variable
        document.getElementById("stopwatch").innerHTML = "00:00:00:000"; // reset the display
      }
      function liststopwatch(){
        document.getElementById("list").innerHTML += document.getElementById("stopwatch").innerHTML+"<br>"; // reset the display
      }
      
      function updateStopwatch() {
        var currentTime = new Date().getTime(); // get current time in milliseconds
        var elapsedTime = currentTime - startTime; // calculate elapsed time in milliseconds
        var milliseconds = Math.floor(elapsedTime) % 1000; // calculate milisecond
        var seconds = Math.floor(elapsedTime / 1000) % 60; // calculate seconds
        var minutes = Math.floor(elapsedTime / 1000 / 60) % 60; // calculate minutes
        var hours = Math.floor(elapsedTime / 1000 / 60 / 60); // calculate hours
        var displayTime = pad(hours) + ":" + pad(minutes) + ":" + pad(seconds) +":" + pad(milliseconds); // format display time
        document.getElementById("stopwatch").innerHTML = displayTime; // update the display
      }
      
      function pad(number) {
        // add a leading zero if the number is less than 10
        return (number < 10 ? "0" : "") + number;
      }
        
   </script>
   </body>
</html>