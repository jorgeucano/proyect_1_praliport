<?php

	include ('../../conn/conection.php');
	echo $habilitado;
	$sql ="update nosotros_galeria set habilitado = ".$_GET['h']." where id = ".$_GET['id'];
	if(mysql_query($sql)){
		echo "se modifico correctamente";
		echo "<br />";
		echo "<a href='galeria.php'>Volver</a>";
	}
	else{
		echo $sql;
		echo "<br />fallo<br />";
		echo $_GET['h'];
	}
?>
