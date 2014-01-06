<?php
include ('../../conn/conection.php');
    $tmp_name = $_FILES["archivo"]["tmp_name"];
    $name = $_FILES["archivo"]["name"];
     if ( move_uploaded_file($_FILES['archivo']['tmp_name'], 'productos/'.$name) ) {
     	$imagen = 'backoffice/productos/productos/'.$name;
     	echo "subio";
        echo "<br />";
        echo '<a href="galeria.php"> Volver </a>';
     	$sql ="insert into productos (url, habilitado, titulo, texto) values('".$imagen."', true,'".$_POST['titulo']."','".$_POST['texto']."')" ;
     	mysql_query($sql);
     }     
     else{
     	echo "no subio";
        echo "<br />";
        echo '<a href="productos.php"> Volver </a>';
     }   

?>