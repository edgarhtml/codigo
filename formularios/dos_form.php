<?php
	$archivoRecibido = $_FILES["fichero"]["tmp_name"];
	$destino = "Fotos de usuarios/fotoDelUsuario1.jpg";
	move_uploaded_file ($archivoRecibido, $destino);
	echo "Fichero grabado"
?>
<?php
	echo "El nombre de usuario es:  $_POST[nombre]<br>";
	echo "¿El usuario es solter@?: $_POST[soltero] <br>";
	echo "El rango de edad de usuario es: ".$_POST['edad']." <br>";
	echo "La fecha de nacimiento es: $fecha <br>";
	echo "El dato oculto escrito es: $_POST[datoOculto] <br>";
	echo "La contrasena es: $_POST[contraseña]<br>";

?>