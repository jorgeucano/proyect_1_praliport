<?php
	include ('../../conn/conection.php');
	$sql ="update nosotros set texto = '".$_POST['texto']."' , titulo = '".$_POST['titulo']."' where id = 1";
	if(mysql_query($sql)){
		echo "se modifico correctamente.";
	}
	else{
		echo "ocurrio un error";
	}

?>
<a href="../index.php">Volver</a>