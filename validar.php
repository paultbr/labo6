<?php


require("conexionBD.php");

$username=$_POST['usuario'];
//  $username=$_POST['mail'];
$pass=$_POST['pass1'];


$sql1=mysql_query("SELECT * FROM tusuario INNER JOIN tadministrador ON tusuario.idusuario = tadministrador.idusuario");
/*AUXILIAR*/
 $sql2=mysql_query("SELECT * FROM tusuario INNER JOIN tauxiliar ON tusuario.idusuario = tauxiliar.idusuario");
 /*APODERADO*/
 $sql3=mysql_query("SELECT * FROM tusuario INNER JOIN tapoderado ON tusuario.idusuario = tapoderado.idusuario");
 /*DOCENTE*/
 $sql4=mysql_query("SELECT * FROM tusuario INNER JOIN tdocente ON tusuario.idusuario = tdocente.idusuario");
 /*------*/
 $f1=mysql_fetch_array($sql1);
 $f2=mysql_fetch_array($sql2);
 $f3=mysql_fetch_array($sql3);
 $f4=mysql_fetch_array($sql4);

 /*CONSULTAS*/
    if($username==$f1['idadministrador']){
            if($pass==$f1['password']){
                echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                echo "<script>location.href='indexadministrador.php'</script>";
            }
    }
    else{
        if ($username==$f2['idauxiliar']) {
            if ($pass==$f2['password']) {
                echo '<script>alert("BIENVENIDO AUXILIAR")</script> ';
                echo "<script>location.href='indexauxiliar.php'</script>";
            }
        }
        else{
            if ($username==$f3['idapoderado']) {
                if ($pass==$f3['password']) {
                    echo '<script>alert("BIENVENIDO PADRE DE FAMILIA")</script> ';
                    echo "<script>location.href='indexapoderado.php'</script>";
                }
            }
            else{
                if ($username==$f4['iddocente']) {
                    if ($pass==$f4['password']) {
                        echo '<script>alert("BIENVENIDO DOCENTE")</script> ';
                        echo "<script>location.href='indexdocente.php'</script>";
                    }
                }
                else
                {

                    echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
                    echo "<script>location.href='index.php'</script>";
                }
            }

        }
    } 

?>