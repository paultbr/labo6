<?php
$password=$_POST['password'];
$idauxiliar=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
require("conexionBD.php");
$checkauxiliar=mysql_query("SELECT * FROM tauxiliar WHERE idauxiliar='$idauxiliar'");
$check_auxiliar=mysql_num_rows($checkauxiliar);
    if($check_auxiliar>0){
        mysql_query("UPDATE tauxiliar SET idauxiliar='$idauxiliar',nombres='$realname',apPaterno='$apellidop',apMAterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail'; ")or die(mysql_error());
        echo '<script language="javascript">alert("MENSAJE, Actualizacion exitosa :D ");</script>';
    }else{
        echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
    }
?>
<a href="editarAdministrador.php">Regresar</a>