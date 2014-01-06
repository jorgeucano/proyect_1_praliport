
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
<body>

Videos: 

<?php
	include ('../../conn/conection.php');
	$sql ="select * from multimedios_texto order by id desc limit 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		echo $row['nombre'].":";
		echo "<br />";
		echo '<a href="'.$row['link'].'">Link</a>';
		echo "<br />";
		if ($row['habilitado']) {
			echo "<a href='habilitar_video.php?h=false&id=".$row['id']."'>Deshabilitar </a>"; 
		} 
		else { 
			echo "<a href='habilitar_video.php?h=true&id=".$row['id']."'>Habilitar </a>"; 
		} 
		echo "<br />";
	}
?>



<h1>editor</h1>
	<form method="post" action="video_pr.php">
		Nombre: <input type="text" name="nombre" /> <br />
		Link: <input type="text" name="link" /> <br />
		<input type="submit" name="submit" value="Agregar" />
	</form>
</body>
</html>