<?php
$password=$_POST['contrasena'];
$idapoderado=$_POST['dni']
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];



require("conexionBD.php");



$checkdocente=mysql_query("SELECT * FROM tapoderado WHERE idapoderado='$idapoderado'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){

        mysql_query("UPDATE tapoderado SET idapoderado='$idapoderado',nombres='$realname',apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail' ");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);

        
    }else{
        echo ' <script language="javascript">alert("Atencion, NO existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }




?>