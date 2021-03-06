<?
	$idioma = "e";
	$index = "";
	if($_GET['i'] == "eu"){
		$idioma = "i";
		$index = "?i=eu";
	}
	else if ($_GET['i'] == "gr"){
		$idioma = "g";
		$index = "?i=gr";
	}


?>

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
		<script type="text/javascript" src="engine1/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="engine1/style.css" media="screen" />
	</head>
	<body>
		<header>
			<div class="header_button">
				<img src="imagenes/facebook-01.png" width="35" height="35" />
				<img src="imagenes/twitter-01.png" width="35" height="35" />
				<a href="home.php?i=gr"><img src="imagenes/grecia.png" width="35" height="35" /></a>
				<a href="home.php?i=eu"><img src="imagenes/ingles-01.png" width="35" height="35" /></a>
				<a href="home.php"><img src="imagenes/esp.png" width="35" height="35" /></a>
			</div>
			<a href="home.php<? echo $index; ?>"><h1><img src="imagenes/Logotiop.png" title="Pralipor" /></h1></a>
			<nav>
				<ul>
					<?
						if ($idioma == "e"){
					?>
						<a href="multimedios.php" ><li class="li_menu">Multimedios </li></a>
						<a href="nosotros.php"><li class="li_menu"> Nosotros </li></a>
						<a href="productos.php"><li class="li_menu">Productos </li></a>
						<a href="contacto.php"><li class="li_menu"> Contacto </li></a>
					<?
						}
						else if ($idioma == "i"){
					?>
						<a href="multimedios.php?i=eu" ><li class="li_menu">Multimedia </li></a>
						<a href="nosotros.php?i=eu"><li class="li_menu"> About us </li></a>
						<a href="productos.php?i=eu"><li class="li_menu">Product </li></a>
						<a href="contacto.php?i=eu"><li class="li_menu"> Contact </li></a>
					<?
						}
						else{
					?>
						<a href="multimedios.php?i=gr" ><li class="li_menu"> Πολυμέσα </li></a>
						<a href="nosotros.php?i=gr"><li class="li_menu"> Σχετικά με εμάς </li></a>
						<a href="productos.php?i=gr"><li class="li_menu"> προϊόν </li></a>
						<a href="contacto.php?i=gr"><li class="li_menu"> επαφή </li></a>
					<?
						}

					?>
					
				</ul>
			</nav>
		</header>
		<hr>
		<?php
			include ('conn/conection.php');
			$sql = "select * from producto";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)){
				$titulo = $row['titulo'];
				$texto = $row['texto'];
				$titulo_ingles = $row['titulo_ingles'];
				$texto_ingles  = $row['ingles'];
				$titulo_griego = $row['titulo_griego'];
				$texto_griego  = $row['griego'];
			}
		?>
		<section>
			<article id="producto" >
				<p>
					<? 
						if ($idioma == "e"){
							echo $titulo;
						}
						else if ($idioma == "i"){
							echo $titulo_ingles;
						}
						else{
							echo $titulo_griego;
						}
 					?>


				</p>
				<br />
				<p>
					<? 
						if ($idioma == "e"){
							echo $texto;
						}
						else if ($idioma == "i"){
							echo $texto_ingles;
						}
						else{
							echo $texto_griego;
						}
 					?>

				</p>
			</article>
		</section>

		<?
			$sql ="select * from productos where habilitado = true";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_array($result)){
		?>
		<section id="contenedor">
			<p id="producto_titulo">
				<? 
					if ($idioma == "e"){
						echo $row['titulo'];
					}
					else if ($idioma == "i"){
						echo $row['titulo_ingles'];
					}
					else{
						echo $row['titulo_griego'];
					}
				?>
			</p>
			<hr style="margin-left: 14%;">
			<section id="productos_contenedor_left">
				<section >
					<? 
						if ($idioma == "e"){
							echo $row['texto'];
						}
						else if ($idioma == "i"){
							echo $row['texto_ingles'];
						}
						else{
							echo $row['texto_griego'];
						}
 					?>
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
		<?php
			include ('footer.html');
		?>
	</body>
</html>