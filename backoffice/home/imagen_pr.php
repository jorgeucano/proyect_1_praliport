<?php
include ('../../conn/conection.php');
    $tmp_name = $_FILES["archivo"]["tmp_name"];
    $name = $_FILES["archivo"]["name"];
     if ( move_uploaded_file($_FILES['archivo']['tmp_name'], 'imagen/'.$name) ) {
     	$imagen = 'backoffice/home/imagen/'.$name;
     	echo "subio";
     	$sql ="update home set imagen = '".$imagen."'";
     	mysql_query($sql);
     }     
     else{
     	echo "no subio";
     }   

?>