<?php 
$tipo=$_POST["BoletinTipo"];
$descripcion=$_POST["boletinDescripcion"];
$grado=$_POST["CbGrado"];
$seccion=$_POST["cbSeccion"];
$fecha=$_POST["boletinFecha"];

require("conexion.php");
//$_grabar_sql=;
mysql_query("INSERT INTO tboletin VALUES(NULL,'$tipo','$descripcion','$grado','$seccion','$fecha');") or die(mysql_error());
echo "guardado con exito";
mysql_close($link);
 ?>