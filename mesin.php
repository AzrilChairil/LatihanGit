<!DOCTYPE html>

<html>
<head> <title> Azril Chairil </title>
	<style>
		body{
			font-family: Comic Sans ms;
		}

		.pudding{
			margin: 40px 1000px 40px 0px;
			padding: 40px 100px 100px 100px;
			background-color: gold;
			border-radius: 10px;
			text-align: left;
		}
	</style>
</head>
<body>
<div class="pudding">
<p> Hitung Sisa Pembagian : </p>	
<?php
	$nilai1=$_POST["angka1"];
	$nilai2=$_POST["angka2"];
	$hasil=$nilai1 % $nilai2;
	echo "<b> $nilai1 % $nilai2 = $hasil </b>";
	?>
</div>
</body>
</html>