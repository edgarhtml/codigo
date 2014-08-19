<?php

	//uso de foreach

	$ciudades = array("Madrid","Barcelona","Londres","New York","Los Angeles","Chicago");
		foreach ($ciudades as $key => $value) {
		echo("La ciudad con el indice $key tiene el nombre $value"."<br>");
		# code...
		}
	echo("<br>");

	//foreach con matriz asosiativa

	$ciudades = array("md"=>"Madrid","ba"=> "Barcelona","lo"=> "Londres","ny"=> "New York","la"=> "Los Angeles","ch"=> "Chicago");
		foreach ($ciudades as $key => $value) {
			echo("La ciudad con el indice $key tiene el nombre $value . <br>");
			# code...
		}

	
?>