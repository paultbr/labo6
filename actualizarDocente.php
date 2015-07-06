<?php
$password=$_POST['password'];
$dni=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
$fecha_inicio=$_POST['fecha_inicio'];
require("conexionBD.php");
$checkdocente=mysql_query("SELECT * FROM tdocente WHERE iddocente='$dni';") or die(mysql_error());
$check_docente=mysql_num_rows($checkdocente);
    if($check_docente>0){
    	mysql_query("UPDATE tdocente SET iddocente='$dni',nonmbres='$realname', apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail',fecha_inicio='$fecha_inicio';")or die(mysql_error());
        //echo 'Se ha registrado con exito';
        echo '<script language="javascript">alert("MENSAJE, Actualizacion exitosa :D ");</script>';
    }else
    {
        echo '<script language="javascript">alert("MENSAJE, No se ha encontrado al ususario.");</script> ';
    }
?>
<a href="editarAdministrador.php">Regresar</a>