<!DOCTYPE HTML>

<html lang="pl">

<head>
	<meta charset="utf-8" />

	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Podsumowanie zamówienia</title> 
	<meta name="description" content="Wyśmienite pączki są naszą specjalnością." />
	<meta name="keywords" content="" />
	
</head>
<body>
	<?php
		$paczkow = $_POST['paczkow'];
		$grzebieni = $_POST['grzebieni'];
		
		echo "<h2>$paczkow $grzebieni</h2>"
	
	?>
	

</body>
</html>