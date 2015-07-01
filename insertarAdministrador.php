<?php
$password=$_POST['contrasena'];
$id=$_POST['dni']
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];



require("conexionBD.php");

$checktabla=mysql_query("SELECT * FROM tadministrador WHERE idadministrador='$id'");
$check_nroElementos=mysql_num_rows($checktabla);

    if($check_nroElementos>0){
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }else{
        $usuario=$check_nroElementos;
        mysql_query("INSERT INTO tusuario VALUES(NULL,'$usuario','$password','ADMINISTRADOR')");        

        //require("connect_db.php");
        mysql_query("INSERT INTO tadministrador VALUES('$id','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }




?>