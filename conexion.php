<?php
$link =mysql_connect("localhost","root","") or die("No se pudo conectar");
if ($link) {
    mysql_select_db("colegiobdv0",$link) or die("No se pudo encontrar la base de datos.....!!!!!");	# code...
}
?>