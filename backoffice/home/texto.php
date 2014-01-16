<?php
	include ('../../conn/conection.php');
	$sql ="select * from home order by id desc limit 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$texto = $row['texto'];
		$ingles = $row['ingles'];
		$griego = $row['griego'];
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
<h1>editor</h1>
	<form method="post" action="texto_pr.php">
		Espa&ntilde;ol:
		<br />
		<textarea name="texto"><?php echo $texto; ?></textarea>
		Ingles:
		<br />
		<textarea name="ingles"><?php echo $ingles; ?></textarea>
		Griego:
		<br />
		<textarea name="griego"><?php echo $griego; ?></textarea>
		<br />	
		<input type="submit" name="submit" value="Modificar" />
	</form>
</body>
</html>