<?php
    	$creandoUnaCadena = "Esto es dena de texto";
        $fragmento = substr($creandoUnaCadena, 7,5);
        	echo "La cadena original es: $creandoUnaCadena<br>";
        
         	echo "El fragmento resultante es: $fragmento<br>";
			
		
			
?>

<?php
	$cadena = "Esto es una cadena de texto.";
	//funcionamiento de ltrim($cadena): es para eliminar espacios al principio de la cadena.
	echo "El resultado es:".ltrim($cadena)."<br>";
	//funcionamiento de chop($cadena): es para eliminar espacios al final de la cadena.
	echo "El resultado es:".chop($cadena)."<br>";
	//funcionamiento de trim($cadena): es para eliminar los espacios al principio y al final.
	echo "El resultado es:". trim($cadena);
	
?>

