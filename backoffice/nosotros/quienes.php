<?php
	include ('../../conn/conection.php');
	$sql ="select * from nosotros where id = 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$texto = $row['texto'];
		$titulo = $row['titulo'];
	}
?>
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
<h1>Quienes Somos</h1>
	<form action="quienes_pr.php" method="post">
		<input type="text" name="titulo" value="<?php echo $titulo; ?>" style="width: 300px;" />
		<textarea name="texto"><?php echo $texto; ?></textarea>
		<input type="submit" name="submit" value="Modificar" />
	</form>
</body>
</html>