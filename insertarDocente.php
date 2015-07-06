<?php
$iddocente=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];
$mail=$_POST['email'];
$fecha_inicio=$_POST['fecha_inicio'];
$password=$_POST['password'];

require("conexionBD.php");
$check=mysql_query("SELECT *
                            FROM tdocente 
                            WHERE iddocente='$iddocente';
                        ");
$existe=mysql_num_rows($check);
if($existe>0)
{
    echo '<script language="javascript">alert("MENSAJE: Usuario existente como docente.");</script> ';
}
else
{
    $usuarios_validos=mysql_query("SELECT T2.idusuario1 as idusuario
                                        FROM (SELECT tusuario.idusuario as idusuario1, tdocente.idusuario as idusuario2
                                                FROM tusuario LEFT outer JOIN tdocente 
                                                ON tusuario.idusuario = tdocente.idusuario 
                                                WHERE tusuario.tipo_usuario = 'DOCENTE') as T2
                                        WHERE T2.idusuario2 IS NULL
                                    ;")or die(mysql_error());
    $existe_usuario=mysql_num_rows($usuarios_validos);
    if ($existe_usuario>0) {//si existe algun usuario que pueda asociarse con el administrador, obtenemos su id y agregamos nuevo administrador.
        $fila=mysql_fetch_array($usuarios_validos,MYSQL_BOTH);
        $usuario = $fila["idusuario"];
        mysql_query("INSERT INTO tdocente 
                        VALUES('$iddocente','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail','$fecha_inicio');
                    ")or die(mysql_error());
            echo '<script language="javascript">alert("MENSAJE, operacion exitosa, docente agregado.");</script> ';
        }
    else //NO existe usuario del tipo docente al que asociar, se debe crear un usuario.
    {
            //crear nuevo usuario
        mysql_query("INSERT INTO tusuario 
                        VALUES(NULL,'$password','DOCENTE');")or die("error aqui".mysql_error());
        $usuarios_validos=mysql_query("SELECT T2.idusuario1 as idusuario
                                            FROM (SELECT tusuario.idusuario as idusuario1, tdocente.idusuario as idusuario2
                                                    FROM tusuario LEFT outer JOIN tdocente 
                                                    ON tusuario.idusuario = tdocente.idusuario 
                                                    WHERE tusuario.tipo_usuario = 'DOCENTE') as T2
                                            WHERE T2.idusuario2 IS NULL
                                        ;")or die(mysql_error());
        $existe_usuario=mysql_num_rows($usuarios_validos);
        if ($existe_usuario>0) {//si existe algun usuario que pueda asociarse con el administrador, obtenemos su id y agregamos nuevo administrador.
            $fila=mysql_fetch_array($usuarios_validos,MYSQL_BOTH);
            $usuario = $fila["idusuario"];
            mysql_query("INSERT INTO tdocente 
                            VALUES('$iddocente','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail','$fecha_inicio');
                        ")or die(mysql_error());
                echo '<script language="javascript">alert("MENSAJE: Operacion exitosa, DOCENTE y usuario agregados.");</script> ';

        }


    }
        
}
?>
<a href="registrarDocente.php">Regresar</a>