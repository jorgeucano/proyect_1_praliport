<?php
	include ('../../conn/conection.php');
	$sql ="select * from home order by id";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$imagen = $row['imagen'];
	}

?>
Imagen actual:
<br />
<img src="<?php echo '../../'.$imagen; ?>" alt="imagen actual" />
<br />
<form name="formu" method="post" action="imagen_pr.php"  enctype="multipart/form-data">
	<dl>
		<dt><label>Archivos a Subir:</label></dt>
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