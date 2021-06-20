<html>
<head>
<title>したっけカウンター</title>
</head>
<body>
<center>
<img src="big.jpg">
<h1>１したっけ消費しました。</h1>
<?php
$tmp=(int)file_get_contents("count.txt")-1;
if ($tmp<0) {
     echo"<p>したっけが足りません。いくとに謝罪してください。</p>";
} else {
     echo "<p>残り".$tmp."したっけ使用できます。</p>";
     file_put_contents("count.txt",$tmp);
}
?>
<h2>
<?php
if ((int)file_get_contents("count.txt")==0) {
     echo"したっけがなくなりました。";
}
?>
</h2>
<a href="form.php">戻る</a>
</center>
</body>
</html>