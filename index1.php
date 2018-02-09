<?php
$dir = 'C:\Music';
$filenames = scandir($dir);
$no_of_files = count($filenames);
?>
<html>
<head>
  <title>AudioWeb</title>
</head>
<body>
  <div style = 'text-align:center'>
    <button onclick="play()">Play</button>
    <button onclick="pause()">Pause</button>
    <button onclick="stop()">Stop</button>
  </div>
  <div style = 'text-align:center'>
    <?php
        for($i=2;$i<$no_of_files;$i++){
          ?>
          <audio controls>
              <source src="<?php echo $filenames[$i];?>" type="audio/mpeg">
              Your browser does not support the audio tag.
          </audio>
          <?php echo $filenames[$i];?><br/><br/>
          <?php
        }
     ?>
  </div>
</body>
</html>
