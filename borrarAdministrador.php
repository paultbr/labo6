<?php

$id=$_POST['dni'];

require("conexionBD.php");



$checkdocente=mysql_query("SELECT * FROM tadministrador WHERE idadministrador='$id'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){
        
        //require("connect_db.php");
        mysql_query("DELETE from tadministrador where idadministrador = '$id'");
        
    }else{
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
        
    }




?>