<html>
<head>
    <title>Audio Web</title>
</head>
<body>
    <script>
        function play(element){
        var audio = document.getElementById(element);
        audio.play();
             }
       function onlyPlayOneIn(container) {
          container.addEventListener("play", function(event) {
          audio_elements = container.getElementsByTagName("audio")
            for(i=0; i < audio_elements.length; i++) {
              audio_element = audio_elements[i];
              if (audio_element !== event.target) {
                audio_element.pause();
              }
            }
          }, true);
        }
        document.addEventListener("DOMContentLoaded", function() {
          onlyPlayOneIn(document.body);
        });
        function pauseAllAudio() {
          var sounds = document.getElementsByTagName('audio');
          for(i=0; i<sounds.length; i++){ 
              sounds[i].pause();
          }
        }
        function stopAllAudio(){
         
        }
    </script>
    <input type="button" value="21 Guns"  onclick="play('audio1')"/>
    <audio id="audio1" src="Music/21 Guns.mp3" ></audio>

    <input type="button" value="Wake Me Up"  onclick="play('audio2')"/>
    <audio id="audio2" src="Music/Wake%20me%20up%20when%20september%20ends.mp3"></audio>
    <input id="pauseButton" type="button" value="Pause All Audio" onclick="pauseAllAudio()"/>
    <input id="stopButton" type="button" value="Stop All Audio" onclick="stopAllAudio()"/>
</body>
</html>
