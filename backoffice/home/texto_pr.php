<?php
	include ('../../conn/conection.php');
	$sql ="update home set texto = '".$_POST['texto']."'";
	if(mysql_query($sql)){
		echo "se modifico correctamente.";
	}
	else{
		echo "ocurrio un error";
	}

?>