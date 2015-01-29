<?php
	print "<u>TABLA DE GASTO DE COMBUSTIBLE</u><br>";
	$formato = "%'_7d * %'_3d = %'_3d<br>";
	echo "L/diarios - Dias - Total<br>";
	for ($dia=1;$dia<=15;$dia++){
		printf($formato, 17, $dia, $dia*17);
	}

?>