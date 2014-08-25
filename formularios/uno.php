<html>
<head>
<meta charset="utf-8">
	<title>Formulario en PHP</title>
    <?php
		# como si viniera de base de datos
		$ID = "54354353";
	?>
</head>
<body>
	<form name="un_formulario" id="un_formulario"  action="uno_form.php?sitio=DF&id_get=<?=$ID?>" method="post">
    
    	Sector <select name="sector" id="sector">
        	<option value="0">Eletrcicistas</option>
            <option value="1">Plomeros</option>
            <option value="2">Transportistas</option>
            <option value="3">Aseguradores</option>
            <option value="4">Programadores</option>
        </select><br>
        
        Seleccione página
        <select name="pagina" id="pagina">
        	<option value="porno1">Porno</option>
            <option value="porno2">Porno Brutal</option>
        </select>
        <br>
        Nombre: <input type="text" name="nombre">
        <input type="hidden" name="id" value="<?php echo $ID; ?>">
        <br>
        <input type="submit" value="enviar" name="ok" id="ok">
    </form>
</body>
</html>