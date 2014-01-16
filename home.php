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

<?
	include ('conn/conection.php');
	$sql ="select * from home order by id desc limit 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$texto = $row['texto'];
		$imagen = $row['imagen'];
		$ingles = $row['ingles'];
		$griego = $row['griego'];
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
		<section>
			<article>
				<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
					<div id="wowslider-container1">
						<div class="ws_images">
							<ul>
								<?php
									$sql ="select * from home_galeria where habilitado = true order by id";
									$result = mysql_query($sql);
									$i = 0;
									while ($row = mysql_fetch_array($result)){
										echo '<li><img src="'.$row['url'].'" alt="" title="" id="wows1_'.$i.'"/></li>';
										$i++;
									}
								?>
							</ul>
						</div>
						<a class="wsl" href="http://wowslider.com">HTML5 Image Rotator by WOWSlider.com v3.4</a>
						<a href="#" class="ws_frame"></a>
						<div class="ws_shadow"></div>
					</div>
					<script type="text/javascript" src="engine1/wowslider.js"></script>
					<script type="text/javascript" src="engine1/script.js"></script>
				<!-- End WOWSlider.com BODY section -->
			</article>
		</section>
		<section id="contenedor">
			<section id="contenedor_left">
				<picture>
					<img src="<? echo $imagen; ?>" width="238px" height="218px" title="arboles" />
				</picture>
			</section>
			<section id="contenedor_derecha">
				<section>
					<?
						if ($idioma == "e"){
							echo $texto;
						}
						else if ($idioma == "i"){
							echo $ingles;
						}
						else{
							echo $griego;
						}

					?>
				</section>
			</section>
		</section>
				<?php
			include ('footer.html');
		?>
	</body>
</html>