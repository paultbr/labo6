<?php
$idapoderado=$_POST['dni_apoderado'];
$dni=$_POST['dni'];
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
$check=mysql_query("SELECT * FROM talumno WHERE idalumno='$dni';")or die(mysql_error());
$existe=mysql_num_rows($check);

    if($existe>0)
    {
        echo '<script language="javascript">alert("MENSAJE: El alumno con ID: $dni ya existe.");</script> ';
    }
    else{
        //se debe agregar alumno.
        //se verifica si existe el idapoderado.
        $registrosApoderado=mysql_query("SELECT * 
                                            FROM tapoderado 
                                            WHERE idapoderado='$idapoderado';"
                                        )or die(mysql_error());
        $existe_ap=mysql_num_rows($registrosApoderado);
        if($existe_ap>0)
        {
            mysql_query("INSERT INTO talumno 
                            VALUES('$dni','$realname','$apellidop','$apellidom','$direccion','$telefono','$grado','$seccion','$idapoderado','$fecha_ingreso','1');
                           ")or die(mysql_error());
            echo '<script language="javascript">alert("MENSAJE: Operacion existosa.");</script> ';
        }
        else
        {
            echo '<script language="javascript">alert("MENSAJE: El ID del apoderado no existe se debe de agregar previamente.");</script> ';
        }
    }
?>
<a href="editarApoderado.php">Regresar</a>