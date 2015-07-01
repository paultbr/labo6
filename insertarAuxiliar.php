<?php
$password=$_POST['password'];
$idauxiliar=$_POST['dni'];
$realname=$_POST['realname'];
$apellidop=$_POST['apellidop'];
$apellidom=$_POST['apellidom'];
$mail=$_POST['email'];
$direccion=$_POST['direccion'];
$telefono= $_POST['telefono'];



require("conexionBD.php");

$checkauxiliar=mysql_query("SELECT * FROM tauxiliar WHERE idauxiliar='$idauxiliar'");
$check_auxiliar=mysql_num_rows($checkauxiliar);

    if($check_auxiliar>0){
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
    }
    else
    {
        //agregar nuevo usuario
        mysql_query("INSERT INTO tusuario(password,tipo_usuario) VALUES('$password','AUXILIAR');")or die(mysql_error());        
        //obtener el maximo valor de id usuario
        $query="SELECT max(idusuario) as nroidusuario FROM tusuario ";
        $consulta=mysql_query($query);
        $datos=mysql_fetch_array($consulta);
        $idusuario= "<tr><th>".$datos['nroidusuario']."</th>";
        //echo "$idusuario";
        //Agregar un nuevo auxiliar
        
//        mysql_query("INSERT INTO tauxiliar VALUES('$idauxiliar','$idusuario','$realname','$apellidop','$apellidom','$direccion','$telefono','$mail');")or die(mysql_error());
        //echo 'Se ha registrado con exito';
        //echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
        mysql_close($link);
    }




?>