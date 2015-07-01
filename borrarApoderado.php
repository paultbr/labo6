<?php

$id=$_POST['dni']

require("conexionBD.php");



$checkdocente=mysql_query("SELECT * FROM tapoderado WHERE idapoderado='$id'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){
        
        //require("connect_db.php");
        mysql_query("DELETE from tapoderado where idapoderado = '$id'");
        
    }else{
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
        
    }




?>