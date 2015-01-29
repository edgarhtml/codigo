<?php
	$caracter = "A";
	$valor = "97";
	
	//saber el codigo ascii de un caracter
	echo "El codigo ASCII de \$caracter es:".ord($caracter)."<br>";
	
	//saber el valor de un cararcter.
	echo "El valor de \$valor corresponde al caracter:".chr($valor)."<br>";
	
	echo "<br>";
	echo "<br>";
	
?>

<?php

	//numero de caracteres que forma una cadena
	
	$cadena = "Mi libro de PHP";
	$longitud = strlen($cadena);
	
	print "La cadena: $cadena, tiene una longitud de $longitud caracteres";
	
	echo "<br>";
	echo "<br>";
?>

<?php
	$altura = "45";
	echo "Altura: ";
	printf ("%2.2f",$altura);
	//primero es una cadena de formato y el segundo es la cadena que queremos mostrar
	echo "metros";
?>