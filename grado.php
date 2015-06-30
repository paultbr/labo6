<?php require ("conexionBD.php");?>
	<?//php mysql_select_db($baseDatos);?>
	<?php 
		$sql="SELECT * from tcarga_academica where idgrado=".$_GET['id'];
		$res=mysql_query($sql);
	?>

Seccion:
<select name="Seccion" style="border:solid 1px #ff0000;">
	<option value="">-----seccion----</option>	
	<?php while ($fila=mysql_fetch_array($res)){ ?>
	<option value="<?php echo $fila['idseccion']?>"><?php echo $fila['idseccion']?></option>
<?php }?>
</select>