<?php
include ('../../conn/conection.php');
    $tmp_name = $_FILES["archivo"]["tmp_name"];
    $name = $_FILES["archivo"]["name"];
     if ( move_uploaded_file($_FILES['archivo']['tmp_name'], 'galeria/'.$name) ) {
     	$imagen = 'backoffice/nosotros/galeria/'.$name;
     	echo "subio";
        echo "<br />";
        echo '<a href="galeria.php"> Volver </a>';
     	$sql ="insert into nosotros_galeria (url, habilitado) values('".$imagen."', true)" ;
     	mysql_query($sql);
     }     
     else{
     	echo "no subio";
        echo "<br />";
        echo '<a href="galeria.php"> Volver </a>';
     }   

?>