<?php

	include ('../../conn/conection.php');
	echo $habilitado;
	$sql ="update multimedios_galeria set habilitado = ".$_GET['h']." where id = ".$_GET['id'];
	if(mysql_query($sql)){
		echo "se modifico correctamente";
	}
	else{
		echo $sql;
		echo "<br />fallo<br />";
		echo $_GET['h'];
	}
?>
