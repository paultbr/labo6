<?php 
	class Recuperar{
		function RD(){
			require("conexion.php");
			$_grado=$_POST["grado"];
			$_seccion=$_POST["seccion"];
			$query="SELECT * FROM talumno WHERE idgrado='$_grado' AND idseccion='$_seccion'";
	          $consulta=mysql_query($query);
	          while ($datos=mysql_fetch_array($consulta)) {
	            echo "<tr><th>".$datos["idalumno"]."</th>";
	            echo "<th>".$datos["apPaterno"]."</th>";
	            echo "<th>".$datos["apMaterno"]."</th>";
	            echo "<th>".$datos["nombres"]."</th>";
	            echo "<th> <center><input name='Asistio' type='checkbox' value='A'/> </th>";
	            echo "<th> <center><input name='Tarde' type='checkbox' value='T'/> </th>";
	            echo "<th> <center><input name='Falta' type='checkbox' value='F'/> </th></center>";
	            echo "</tr>";
	          }
		}
	}

 ?>