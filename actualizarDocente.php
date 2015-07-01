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
    	mysql_query("UPDATE tdocente SET iddocente='$dni',nonmbres='$realname', apPaterno='$apellidop',apMaterno='$apellidom',direccion='$direccion',telefono='$telefono',correo='$mail',fecha_inicio='$fecha_inicio'");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
        
    }else{
        //"Update $tabla_db1 Set nombre='$nombre',email='$email',fecha='$fecha' where id='$id'";
        echo ' <script language="javascript">alert("Atencion, NO existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }




?>