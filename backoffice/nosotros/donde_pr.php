<?php
	include ('../../conn/conection.php');
	$sql ="update nosotros set texto = '".$_POST['texto']."' , titulo = '".$_POST['titulo']."' ,
				ingles = '".$_POST['ingles']."' , titulo_ingles = '".$_POST['titulo_ingles']."' ,
				griego = '".$_POST['griego']."' , titulo_griego = '".$_POST['titulo_griego']."' 
	where id = 2";
	if(mysql_query($sql)){
		echo "se modifico correctamente.";
	}
	else{
		echo "ocurrio un error";
	}

?>
<a href="../index.php">Volver</a>