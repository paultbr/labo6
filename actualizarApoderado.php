<?php
$password=$_POST['password'];
$idapoderado=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
require("conexionBD.php");
$seleccionar=mysql_query("SELECT * FROM tapoderado WHERE idapoderado='$id';")or die(mysql_error());
$existe=mysql_num_rows($seleccionar);
if($existe>0){
        mysql_query("UPDATE tapoderado SET idapoderado='$idapoderado',nombres='$realname',apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail'; ") or die(mysql_error());
        echo '<script language="javascript">alert("MENSAJE, Actualizacion exitosa :D ");</script>';
}else
{
    echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
}
?>
<a href="editarApoderado.php">Regresar</a>