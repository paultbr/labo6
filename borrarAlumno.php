<?php

$id=$_POST['dni']

require("conexionBD.php");



$checkdocente=mysql_query("SELECT * FROM talumno WHERE idalumno='$id'");
$check_docente=mysql_num_rows($checkdocente);

    if($check_docente>0){
        
        //require("connect_db.php");
        mysql_query("DELETE from talumno where idalumno = '$id'");
        
    }else{
        echo ' <script language="javascript">alert("Atencion, ya existe una persona con este ususario designado para un usuario, verifique sus datos");</script> ';
        
    }




?>