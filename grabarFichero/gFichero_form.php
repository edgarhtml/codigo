<?php
	//comprobando formato del archivo subido.
	if($_FILES["fichero"]["type"]!=image/pjpeg){
		die("El fichero no tiene el formato adecuado.");
	}
	//Comprobando que tenga un peso adecuado.
	if($_FILES["fichero"]["size"] > 200000){
		die("El fichero no tiene el tamaño adecuado.");
	}
	//Comprobando que no hayan errores.
	if($_FILES["fichero"]["error"]!= 0){
		die("Se ha producido un error.");
	}
	//Se intenta grabar y se comprueba si se garaba bien.
	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino = "ficherosSubidos/fotoDelUsuario.jpg";
	if (move_uploaded_file ($archivoRecibido, $destino)) {
		echo "Fichero grabado";
	}else{
		echo "El fichero no se ha podido grabar";
	}
	
?>