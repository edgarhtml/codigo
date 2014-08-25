<?php

	function d(){
		return "algo";
	}
	//uso de foreach

	$ciudades = array('Madrid',
		'Barcelona','Londres',
		'New York',
		'Los Angeles',
		'Chicago');



		foreach ($ciudades as $k => $v) {
			echo("La ciudad con el indice $k tiene el nombre $v <br>");
		# code...
		}
	echo("<hr>");

	//foreach con matriz asosiativa

	$ciudades = array("md"=>"Madrid","ba"=> "Barcelona","lo"=> "Londres","ny"=> "New York","la"=> "Los Angeles","ch"=> "Chicago");


		foreach ($ciudades as $k => $v) {
			echo("La ciudad con el indice $k tiene el nombre $v . <br>");
			# code...
		}


	echo("<hr>");

	// Solo valor

		foreach ($ciudades as $v) {
			echo("La ciudad tiene el nombre $v <br>");
			# code...
		}
	
?>