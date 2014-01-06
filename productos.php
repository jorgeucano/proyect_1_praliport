<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Pralipor</title>
		<meta charset="utf-8"/>
		<meta name="description" content="Pralipor" />
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="author" type="text/plain" href="humans.txt" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- [if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
		<script type="text/javascript" src="../engine1/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="../engine1/style.css" media="screen" />
	</head>
	<body>
		<header>
			<div class="header_button">
				<img src="http://praliport.com/website/imagenes/facebook-01.png" width="35" height="35" />
				<img src="http://praliport.com/website/imagenes/twitter-01.png" width="35" height="35" />
			</div>
			<a href="index.php"><h1><img src="http://praliport.com/website/imagenes/Logotiop.png" title="Pralipor" /></h1></a>
			<nav>
				<ul>
					<a href="multimedios.php" ><li class="li_menu">Multimedios </li></a>
					<a href="nosotros.php"><li class="li_menu"> Nosotros </li></a>
					<a href="productos.php"><li class="li_menu">Productos </li></a>
					<a href="contacto.php"><li class="li_menu"> Contacto </li></a>
				</ul>
			</nav>
		</header>
		<hr id="producto_hr">
		<?php
			include ('conn/conection.php');
			$sql = "select * from producto";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)){
				$titulo = $row['titulo'];
				$texto = $row['texto'];
			}
		?>
		<section>
			<article id="producto" >
				<p><? echo $titulo; ?></p>
				<br />
				<p><? echo $texto; ?></p>
			</article>
		</section>

		<?
			$sql ="select * from productos where habilitado = true";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)){
		?>
		<section id="contenedor">
			<p id="producto_titulo"><? echo $row['titulo']; ?></p>
			<hr id="producto_hr">
			<section id="productos_contenedor_left">
				<section >
					<? echo $row['texto']; ?>
				</section>
			</section>
			<section id="productos_contenedor_derecha">
				<picture>
					<img src="<? echo $row['url']; ?>" />
				</picture>
			</section>
		</section>
		<?
			}
		?>

	</body>
</html>