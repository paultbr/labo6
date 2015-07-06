<?php
require("conexionBD.php");
$id=$_POST['dni'];
$seleccionarRegistro=mysql_query("SELECT * FROM tapoderado WHERE idapoderado='$id';")or die(mysql_error());
$existe=mysql_num_rows($seleccionarRegistro);
if($existe>0)
{
	mysql_query("DELETE from tapoderado where idapoderado = '$id';")or die(mysql_error());
	echo '<script language="javascript">alert("MENSAJE, exito al eliminar :D ");</script>';
}
else
{
	echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
}
//mysql_query("DELETE from tdocente where iddocente = '$id';")or die(mysql_error());
?>
<a href="eliminarApoderado.php">Regresar</a>