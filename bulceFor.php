<?php

	//bucle viendo su funcion.

	for ($varCon=10; $varCon >=1; $varCon --) {
		echo ($varCon."<br>");
	}

	echo("<br>");

	//matriz con un bucle.

	$amigos = array("Pedro","Juan","Oscar","Sonia","Daniela");
	$elemntos = count($amigos);
	for ($i=0; $i < $elemntos; $i++) { 
		echo ($amigos[$i]."<br>");	
	}

	echo("<br>");

	//simulador del recorrido de un edificio donde hay 6 pisos y en cada piso hay 5 viviendas.

	for ($piso=1; $piso <= 6; $piso++) { 
		for ($puerta=1; $puerta <= 5; $puerta++) { 
			echo("Piso: $piso - Puerta: $puerta.<br>");
		}
		
	}

	echo("<br>");
	//uso de wile

	$ciudades = array("Madrid","Barcelona","Londres","NY","Los Angeles","Chicago");
	$ciudad = "";
	$indice = 0;
	
	while ($ciudad!="Londres") {
		$ciudad = $ciudades[$indice];
		echo ($ciudad."<br>");
		$indice++;
	 
	 } 
	 echo ("Final de la ejecucion");
?>