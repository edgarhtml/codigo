<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
	define("salto", "<br>\n");
	if(isset($HTTP_POST_VARS["nombre"])){
		echo("el valor del campo\"nombre\"es:".$HTTP_POST_VARS["nombre"].salto);
	}else{
?>
        <form action="" name="f1" id="" method="post">
        Nombre:
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value"submit" name="enviar" id="enviar" />
        </form>
        
       <?php
	}
	?>
   //no quedo muy claro(explicar)
</body>
</html>
