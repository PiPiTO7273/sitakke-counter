<html>
<head>
<title>したっけカウンター</title>
</head>
<body>
<center>
<img src="img.jpg">
<h1>いくとのしたっけカウンター</h1>
<p>いくとの口癖である「したっけ」を真似できる回数を記録するものである。</p>
<a href="count.php">したっけ</a>
<p>残り<?php
echo file_get_contents("count.txt");
?>したっけ</p>
</center>
</body>
</html>