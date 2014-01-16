<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../ejemploTinyMCE_2.js"></script>
<style>
textarea { width: 500px; height: 300px;}
</style>
</head>
<body onload="cargarTinyMCE();">
<h1>Nuevo Producto</h1>
	<form action="productos_pr.php" method="post"  enctype="multipart/form-data">
		<h3>Espa&ntilde;ol</h3>
		Titulo: <input type="text" name="titulo"  style="width: 300px;" />
		<br />
		Texto: <textarea name="texto"></textarea>
		<h3>Ingles</h3>
		Titulo: <input type="text" name="titulo_ingles"  style="width: 300px;" />
		<br />
		Texto: <textarea name="ingles"></textarea>
		<h3>Griego</h3>
		Titulo: <input type="text" name="titulo_griego"  style="width: 300px;" />
		<br />
		Texto: <textarea name="griego"></textarea>
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

Productos actuales:
<table>
<?php
	include ('../../conn/conection.php');
	$sql ="select * from productos order by id";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$id = $row['id'];
		$url = $row['url'];
		$habilitado = $row['habilitado'];
		$titulo = $row['titulo'];
		$texto = $row['texto'];
?>
		<tr>
			<td><? echo $titulo ; ?></td>
			<td><? echo $texto ; ?></td>
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

</body>
</html>