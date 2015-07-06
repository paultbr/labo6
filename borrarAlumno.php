<?php
require("conexionBD.php");
$id=$_POST['dni'];
$seleccionarAlumno=mysql_query("SELECT * FROM talumno WHERE idalumno='$id';")or die(mysql_error());
$existe=mysql_num_rows($seleccionarAlumno);
if($existe>0)
{
	mysql_query("DELETE from talumno where idalumno = '$id';")or die(mysql_error());
	echo '<script language="javascript">alert("MENSAJE, exito al eliminar :D ");</script>';
}
else
{
	echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
}
//mysql_query("DELETE from tdocente where iddocente = '$id';")or die(mysql_error());
?>
<a href="eliminarAlumno.php">Regresar</a>