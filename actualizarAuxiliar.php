<?php
$password=$_POST['contrasena'];
$idauxiliar=$_POST['dni']
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

        mysql_query("UPDATE tauxiliar SET idauxiliar='$idauxiliar',nombres='$realname',apPaterno='$apellidop',apMAterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail' ");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);

        
    }else{
        echo ' <script language="javascript">alert("Atencion, NO existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
        
    }




?>