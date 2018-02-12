<?php
$dir = 'Music';
$filenames = scandir($dir);
$no_of_files = count($filenames);
?>
<html>
<head>
  <title>AudioWeb</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
              audio_element.currentTime=0;
              }
            }
          }, true);
       }
       document.addEventListener("DOMContentLoaded", function() {
         onlyPlayOneIn(document.body);
       });
       function universalPlay(){
         var flag = 0;
         var audio = document.getElementsByTagName('audio');
         for(i=0;i<audio.length;i++){
           if(audio[i].currentTime > 0 && audio[i].paused){
             audio[i].play();
             flag = 1;
             break;
           }
         }
           if(flag == 0){
               audio[0].play();
           }
       }
       function pauseAllAudio() {
         var sounds = document.getElementsByTagName('audio');
         for(i=0; i<sounds.length; i++){
             sounds[i].pause();
         }
       }
       function stopAllAudio(){
         var audio = document.getElementsByTagName('audio');
         for(i=0;i<audio.length;i++){
           audio[i].pause();
           audio[i].currentTime = 0;
         }
       }
  </script>
</head>
<body>
  <h2 style = 'text-align:center'> Audio Web</h2>
  <div style = 'text-align:center'>
    <a href="#" class="btn btn-info btn-lg" onclick="universalPlay()">
          <span class="glyphicon glyphicon-play"></span> Play
    </a>
    <a href="#" class="btn btn-info btn-lg" onclick="pauseAllAudio()">
          <span class="glyphicon glyphicon-play"></span> Pause
    </a>
    <a href="#" class="btn btn-info btn-lg" onclick="stopAllAudio()">
          <span class="glyphicon glyphicon-play"></span> Stop
    </a><br><br>
  </div>
  <div style = 'text-align:center' class = "row">
    <?php
        for($i=2,$n=1;$i<$no_of_files;$i++,$n++){
          ?>
      
          <a href="#" class="btn btn-primary " onclick="play('<?php echo $filenames[$i];?>')"><span class="glyphicon glyphicon-music"></span> <?php echo '#'.$n.' '.trim($filenames[$i],".mp3");?></a>
      
          <audio id="<?php echo $filenames[$i];?>" src="<?php echo $dir.'\\'.$filenames[$i];?>" ></audio>

          <?php
        }
     ?>
  </div>
</body>
</html>
