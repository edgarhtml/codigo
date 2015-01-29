<pre>
<b>Por POST</b>
<?php
print_r($_POST);
echo str_repeat("-", 50)."\n";
?>
<b>Por GET</b>
<?php
print_r($_GET);
echo str_repeat("-", 50)."\n";
?>
<b>Por REQUEST</b>
<?php
print_r($_REQUEST);
?>
<?php
file_put_contents("datos_".date("d-m-Y").".log",serialize($_REQUEST)."\n");
?>
<?php
echo"La el valor elegido es $sector.";





<br>
        
        Seleccione página
        <select name="pagina" id="pagina">
        	<option value="porno1">Porno</option>
            <option value="porno2">Porno Brutal</option>
        </select>
        <br>
        Nombre: <input type="text" name="nombre">
        <input type="hidden" name="id" value="">
        <br>