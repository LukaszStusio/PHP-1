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
		
/* multiple echo commands can be closed in that way as below,
but must be without space or tab (must touch the wall) and "enter" after it */

//and this the second way of adding a comment (single-line)

#and here's another	one

echo<<<END

		<h2>Podsumowanie zamówienia</h2>
		<table border="1" cellpadding="10" cellspacing="0"></table>
		
END;
	
	?>
	

</body>
</html>