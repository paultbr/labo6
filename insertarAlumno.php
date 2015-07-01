<?php
$idapoderado=$_POST['dni_apoderado'];
$dni=$_POST['dni']
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];

$fecha_ingreso=$_POST['fecha_ingreso'];

require("conexionBD.php");

$checkdocente=mysql_query("SELECT * FROM talumno WHERE idalumno='$dni'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){
        echo ' <script language="javascript">alert("Atencion, ya existe un alumno con los mismos datos registrado en la base de datos, verifique sus datos");</script> ';
    }else{
        $checkapoderado=mysql_query("SELECT * FROM tapoderado WHERE idapoderado='$idapoderado'");
        $check_apoderado=mysql_num_rows($checkapoderado);
        if($checkapoderado>0){
        mysql_query("INSERT INTO tusuario VALUES(NULL,'$usuario','$password','DOCENTE')");        
        //require("connect_db.php");
        mysql_query("INSERT INTO tdocente VALUES('$dni','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail','$fecha_inicio'')");
        //echo 'Se ha registrado con exito';
        echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
    }
        mysql_close($link);

    }




?>