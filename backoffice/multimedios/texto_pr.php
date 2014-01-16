<?php
	include ('../../conn/conection.php');
	$sql ="update multimedios_texto set texto = '".$_POST['texto']."' , ingles = '".$_POST['ingles']."', griego = '".$_POST['griego']."'";
	if(mysql_query($sql)){
		echo "se modifico correctamente.";
	}
	else{
		echo "ocurrio un error";
	}

?>
<a href="../index.php">Volver</a>