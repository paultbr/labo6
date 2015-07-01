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
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }else{
        $checkapoderado=mysql_query("SELECT * FROM tapoderado");
        $usuario=mysql_num_rows($checkdocente);
        mysql_query("INSERT INTO tusuario VALUES(NULL,'$usuario','$password','APODERADO')");        

        //require("connect_db.php");
        mysql_query("INSERT INTO tapoderado VALUES('$idapoderado','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }




?>