<?php

$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['mail2'];
$usuario=$_POST['usuario'];
$pass= $_POST['pass'];
$rpass=$_POST['rpass'];
$categor=$_POST['categoria'];

require("connect_bd.php");
$checkeusuario=mysql_query("SELECT * FROM users WHERE user='$usuario'");
$check_usuario=mysql_num_rows($checkeusuario);
if($pass==$rpass){
    if($check_usuario>0){
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }else{

        //require("connect_db.php");
        mysql_query("INSERT INTO users VALUES('','$usuario','$pass','$realname','$apellidop','$apellidom','$mail','$categor')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }

}else{
    echo 'Las contraseñas son incorrectas';
}


?>