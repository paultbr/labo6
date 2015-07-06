<?php
require("conexionBD.php");
$password=$_POST['password'];
$id=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
$seleccionarAdministrador=mysql_query("SELECT * FROM tadministrador WHERE idadministrador='$id';")or die(mysql_error());
$existe=mysql_num_rows($seleccionarAdministrador);
if($existe>0)
{
	mysql_query("UPDATE tadministrador Set nombres='$realname',apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail' where idadministrador='$id';")or die(mysql_error());
	echo '<script language="javascript">alert("MENSAJE, Actualizacion exitosa :D ");</script>';
}
else
{
	echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
}
//mysql_query("DELETE from tdocente where iddocente = '$id';")or die(mysql_error());
?>
<a href="editarAdministrador.php">Regresar</a>