<?php
$password=$_POST['password'];
$idapoderado=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];

require("conexionBD.php");
$check=mysql_query("SELECT *
                            FROM tapoderado 
                            WHERE idapoderado='$idapoderado';
                        ");
$existe=mysql_num_rows($check);
if($existe>0)
{
    echo '<script language="javascript">alert("MENSAJE: Usuario existente como apoderado.");</script> ';
}
else
{
    $usuarios_validos=mysql_query("SELECT T2.idusuario1 as idusuario
                                        FROM (SELECT tusuario.idusuario as idusuario1, tapoderado.idusuario as idusuario2
                                                FROM tusuario LEFT outer JOIN tapoderado 
                                                ON tusuario.idusuario = tapoderado.idusuario 
                                                WHERE tusuario.tipo_usuario = 'APODERADO') as T2
                                        WHERE T2.idusuario2 IS NULL
                                    ;")or die(mysql_error());
    $existe_usuario=mysql_num_rows($usuarios_validos);
    if ($existe_usuario>0) {//si existe algun usuario que pueda asociarse con el administrador, obtenemos su id y agregamos nuevo administrador.
        $fila=mysql_fetch_array($usuarios_validos,MYSQL_BOTH);
        $usuario = $fila["idusuario"];
        mysql_query("INSERT INTO tapoderado 
                        VALUES('$idapoderado','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail');
                    ")or die(mysql_error());
            echo '<script language="javascript">alert("MENSAJE, operacion exitosa, apoderado agregado.");</script> ';
        }
    else //NO existe usuario del tipo administrador al que asociar, se debe crear un usuario.
    {
            //crear nuevo usuario
        mysql_query("INSERT INTO tusuario 
                        VALUES(NULL,'$password','APODERADO');")or die("error aqui".mysql_error());
        $usuarios_validos=mysql_query("SELECT T2.idusuario1 as idusuario
                                            FROM (SELECT tusuario.idusuario as idusuario1, tapoderado.idusuario as idusuario2
                                                    FROM tusuario LEFT outer JOIN tapoderado 
                                                    ON tusuario.idusuario = tapoderado.idusuario 
                                                    WHERE tusuario.tipo_usuario = 'APODERADO') as T2
                                            WHERE T2.idusuario2 IS NULL
                                        ;")or die(mysql_error());
        $existe_usuario=mysql_num_rows($usuarios_validos);
        if ($existe_usuario>0) {//si existe algun usuario que pueda asociarse con el administrador, obtenemos su id y agregamos nuevo administrador.
            $fila=mysql_fetch_array($usuarios_validos,MYSQL_BOTH);
            $usuario = $fila["idusuario"];
            mysql_query("INSERT INTO tapoderado 
                            VALUES('$id','$usuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail');
                        ")or die(mysql_error());
                echo '<script language="javascript">alert("MENSAJE: Operacion exitosa, apoderado y usuario agregados.");</script> ';

        }


    }
        
}
?>
<a href="editarApoderado.php">Regresar</a>