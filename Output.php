<!DOCTYPE html>
<html>
<head>
<title>QR Generator</title>
</head>
<body>
<h1>QR Genrator</h1>
  <img src="https://chart.googleapis.com/chart?cht=qr&chs=150x150&choe=UTF-8&chld=H&chl=<?php echo (int)$_POST['url']; ?>">
<form action="/output.php">
<textarea name="url">
URL
</textarea>
</br>
<input type="submit" />
</form>
  </body>
</html>
