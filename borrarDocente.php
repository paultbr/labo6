<?php
require("conexionBD.php");
$id=$_POST['dni'];
$seleccionarDocente=mysql_query("SELECT * FROM tdocente WHERE iddocente='$id';")or die(mysql_error());
$existeDocente=mysql_num_rows($seleccionarDocente);
if($existeDocente>0)
{
	mysql_query("DELETE from tdocente where iddocente = '$id';")or die(mysql_error());
	echo '<script language="javascript">alert("MENSAJE, exito al eliminar :D ");</script>';
}
else
{
	echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
}
//mysql_query("DELETE from tdocente where iddocente = '$id';")or die(mysql_error());
?>
<a href="eliminarDocente.php">Regresar</a>