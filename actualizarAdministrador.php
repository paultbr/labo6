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
        mysql_query("UPDATE tadministrador Set idnombres='$realname',apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail' where idadministrador='$id'");        
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }else{
        echo ' <script language="javascript">alert("Atencion, NO existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';


        
    }




?>