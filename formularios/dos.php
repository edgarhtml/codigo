<html>
	<head>
		<meta charset="utf-8">
		<title>Éste formulario está hecho por edgar</title>
	</head>
	<body>
		<center>
			<h1>Resuelve este formulario</h1>
			<br>
			<br>
			<br>
				
			<form name="new_formulario" id="new_formulario"  action="dos_form.php" method="post">
				Sube tu foto:
                <form action="dos_form.php" method="post" name="gfichero" id="gfichero" enctype="multipart/form-data">
        
        		<input type="file" name="fichero" id="fichero">
        
       			 <br>
        
       			
        
       			 
                 <hr>
				Teclee su nombre:
				
				<input type="text" name="nombre" id="nombre">
				
				<hr>

				¿Es usted solter@?
				<input type="radio" name="soltero" id="soltero" value="si">
				<input type="radio" name="soltero" id="soltero" value="no">
				<hr>
				Seleccione su edad:
				<br>
				de 0 a 20 años:


				<input name="edad" type="radio" value="0 a 20 años">
				
				<br>
				de 21 a 40 años:
			
				<input name="edad" type="radio" value="21 a 40 años">
				<br>
				
				mas de 40 años:
				
				<input name="edad" type="radio" value="mas de 40 años ">
				<hr>
				Escribe tu fecha de nacimiento:
				<input name="fecha" type="date" id="fecha" value="fecha de nacimiento">
				<hr>
				<input name="datoOculto" type="hideen" id="datoOculto" value="Este dato es oculto">
				<hr>
				Escribe una contraseña:
				<input name="contraseña" type="password" id="contraseña" value="">
				<hr>
                
				
					 <input type="submit" value="ENVIAR" name="ok">
				

			 </form> 

		</form>
	</body>
</html>