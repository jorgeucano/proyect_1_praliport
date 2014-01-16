<?php
	include ('../../conn/conection.php');
	$sql ="select * from nosotros where id = 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$texto = $row['texto'];
		$titulo = $row['titulo'];
		$ingles = $row['ingles'];
		$titulo_ingles = $row['titulo_ingles'];
		$griego = $row['griego'];
		$titulo_griego = $row['titulo_griego'];;
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
		<h3> Espa&ntilde;ol:</h3>
		<input type="text" name="titulo" value="<?php echo $titulo; ?>" style="width: 300px;" />
		<textarea name="texto"><?php echo $texto; ?></textarea>
		<h3>Ingles:</h3>
		<input type="text" name="titulo_ingles" value="<?php echo $titulo_ingles; ?>" style="width: 300px;" />
		<textarea name="ingles"><?php echo $ingles; ?></textarea>
		<h3> Griego:</h3>
		<input type="text" name="titulo_griego" value="<?php echo $titulo_griego; ?>" style="width: 300px;" />
		<textarea name="griego"><?php echo $griego; ?></textarea>
		<input type="submit" name="submit" value="Modificar" />
	</form>
</body>
</html>