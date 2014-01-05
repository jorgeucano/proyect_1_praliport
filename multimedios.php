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
					<li> Multimedios </li>
					<li> Nosotros </li>
					<li> Productos </li>
					<li> Contacto </li>
				</ul>
			</nav>
		</header>
		<hr>
		<section>
			<article>
				<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
					<div id="wowslider-container1">
					<div class="ws_images"><ul>
	                    <?php
									$sql ="select * from multimedios_galeria where habilitado = true order by id";
									$result = mysql_query($sql);
									$i = 0;
									while ($row = mysql_fetch_array($result)){
										echo '<li><img src="'.$row['url'].'" alt="" title="" id="wows1_'.$i.'"/></li>';
										$i++;
									}
								?>
	                    </ul>
	               	</div>
	                <script type="text/javascript" src="../engine1/wowslider.js"></script>
                    <script type="text/javascript" src="../engine1/script.js"></script>
				<!-- End WOWSlider.com BODY section -->
			</article>
		</section>
		<section id="contenedor_multimedios">
			<p>
				En esta parte podras encontrar partes del proceso del producto que distribuimos y fabricamos.
			</p>
			<br />
			<picture id="video">
				<img src="http://praliport.com/website/imagenes/arbole.jpg" title="arboles" />
			</picture>
			<picture id="video">
				<img src="http://praliport.com/website/imagenes/arbole.jpg" title="arboles" />
			</picture>
			<picture id="video">
				<img src="http://praliport.com/website/imagenes/arbole.jpg" title="arboles" />
			</picture>
		</section>
	</body>
</html>