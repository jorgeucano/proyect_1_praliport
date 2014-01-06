<form name="formu" method="post" action="galeria_pr.php"  enctype="multipart/form-data">
	<dl>
		<dt><label>Archivos Nueva Imagen:</label></dt>
	        <!-- Esta div contendrá todos los campos file que creemos -->
	   <dd><div id="adjuntos">
	        <!-- Hay que prestar atención a esto, el nombre de este campo debe siempre terminar en []
	        como un vector, y ademas debe coincidir con el nombre que se da a los campos nuevos 
	        en el script -->
	   <input type="file" name="archivo" /><br />
	   </div></dd>
	   <dd><input type="submit" value="Enviar" id="envia" name="envia" /></dd>
    </dl>

</form>

<br />

Imagenes actual:
<table>
<?php
	include ('../../conn/conection.php');
	$sql ="select * from multimedios_galeria order by id";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$id = $row['id'];
		$url = $row['url'];
		$habilitado = $row['habilitado'];
?>
		<tr>
			<td>
				<img src="<?php echo '../../'.$url; ?>" width="300px" heigth="300px" />
			</td>
			<td>
				<? 
					if ($habilitado) {
						 echo "<a href='habilitar.php?h=false&id=".$id."'>Deshabilitar </a>"; 
					} 
					else { 
						echo "<a href='habilitar.php?h=true&id=".$id."'>Habilitar </a>"; 
					} 
				?>

<?php
	}

?>
</table>

