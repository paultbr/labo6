<?php
$password=$_POST['contrasena'];
$dni=$_POST['dni']
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];

$fecha_inicio=$_POST['fecha_inicio'];

require("conexionBD.php");



$checkdocente=mysql_query("SELECT * FROM tdocente WHERE iddocente='$dni'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }else{
        $usuario=$check_docente;
        mysql_query("INSERT INTO tusuario VALUES(NULL,'$usuario','$password','DOCENTE')");        
        //require("connect_db.php");
        mysql_query("INSERT INTO tdocente VALUES('$dni','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail','$fecha_inicio'')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }




?>