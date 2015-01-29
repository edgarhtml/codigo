<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
		$valor=123456789.987654321;
		echo (number_format($valor));
	
		echo"<br>";
		
		$valor=123456789.987654321;
		echo (number_format($valor, 2, "." , ","));
	?>
    
</body>
</html>