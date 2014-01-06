<?php
	include ('conn/conection.php');
	$sql = "select * from nosotros where id = 1";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$quienes_titulo = $row['titulo'];
		$quienes_texto  = $row['texto'];
	}
	$sql = "select * from nosotros where id = 2";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
		$venimos_titulo = $row['titulo'];
		$venimos_texto = $row['texto'];
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
		<hr>
		<section id="contenedor">
			<section id="contenedor_left_nosotros">
				    <div id="wowslider-container1">
						<div class="ws_images">
							<ul>
								<?php
										$sql ="select * from nosotros_galeria where habilitado = true order by id";
										$result = mysql_query($sql);
										$i = 0;
										while ($row = mysql_fetch_array($result)){
											echo '<li><img src="'.$row['url'].'" alt="" title="" id="wows1_'.$i.'"/></li>';
											$i++;
										}
								?>
							</ul>
						</div>
						<a href="#" class="ws_frame"></a>
						<div class="ws_shadow"></div>
					</div>
					<script type="text/javascript" src="../engine1/wowslider.js"></script>
					<script type="text/javascript" src="../engine1/script.js"></script>
			</section>
			<section id="contenedor_derecha_nosotros">
				<section>
					<p style="color:#FFCC00;"><? echo $quienes_titulo; ?></p>
					<br />
					<p>
					<?php echo $quienes_texto; ?>
					</p>
					<br /><br />
					<p style="color:#FFCC00;"><? echo $venimos_titulo; ?></p>
					<br />
					<p>
					<? echo $venimos_texto; ?>
					</p>
				</section>
			</section>
		</section>
	</body>
</html>