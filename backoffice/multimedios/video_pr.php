<?
	include ('../../conn/conection.php');
	$sql="insert into multimedios_video (nombre, link, habilitado) values ('".$_POST['nombre']."', '".$_POST['link']."', true)";
	if(mysql_query($sql)){
		echo "se agrego correctamente";
	}
	else{
		echo "ocurrio un error, intente nuevamente";
	}


?>

<a href="video.php">Volver </a>