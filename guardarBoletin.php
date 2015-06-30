<?php 
$tipo=$_POST["BoletinTipo"];
$descripcion=$_POST["boletinDescripcion"];
$grado=$_POST["CbGrado"];
$seccion=$_POST["cbSeccion"];
$fecha=$_POST["boletinFecha"];

require("conexionBD.php");
//$_grabar_sql=;
mysql_query("INSERT INTO tboletin VALUES(NULL,'$tipo','$descripcion','$grado','$seccion','$fecha');") or die(mysql_error());
echo "El boletin fue guardado correctamente";
mysql_close($link);
 ?>