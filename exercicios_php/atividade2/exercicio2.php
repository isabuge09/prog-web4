<!DOCTYPE html>
<html>
<head>
	<title>Exercicio</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
	 $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );

	 $hora = $datetime->format( 'H' );

	 //manhã
	 if ($hora>=0 && $hora<=12){
		echo "<h1>Bom dia!</h1>";
		echo "<img src='img/manha.jpg'>";
	//tarde
	 }elseif ($hora>12 && $hora<18){
		echo "<h1>Boa tarde!</h1>";
		echo "<img src='img/tarde.jpg'>";

	 //noite
	 }elseif ($hora>18 && $hora<=24){
		echo "<h1>Boa noite!</h1>";
		echo "<img src='img/noite.jpg'>";

	 }

	 //tarde

	 //noite
?>
</body>

</html>