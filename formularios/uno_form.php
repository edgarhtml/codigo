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