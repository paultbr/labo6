<?php


require("conexion.php");

$username=$_POST['usuario'];
//	$username=$_POST['mail'];
$pass=$_POST['pass1'];



$sql2=mysql_query("SELECT * FROM users WHERE user='$username'");
if($f2=mysql_fetch_array($sql2)){
    if($pass==$f2['password']){
        echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';

        echo "<script>location.href='index23.php'</script>";

    }
}




$sql=mysql_query("SELECT * FROM users WHERE user='$username'");
if($f=mysql_fetch_array($sql)){
    if($pass==$f['password']){
        header("Location: index2.php");
    }else{
        echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

        echo "<script>location.href='indexx.php'</script>";
    }
}else{

    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

    echo "<script>location.href='indexx.php'</script>";

}






?>