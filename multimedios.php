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
	                    		include ('conn/conection.php');
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
				<?php
					$sql ="select * from multimedios_texto order by id  limit 1";
					$result = mysql_query($sql);
					while ($row = mysql_fetch_array($result)){
						echo $row['texto'];
					}
				?>
			</p>
			<br />
			<?php
					$sql ="select * from multimedios_video where habilitado = true order by id  limit 3";
					$result = mysql_query($sql);
					while ($row = mysql_fetch_array($result)){
			?>
					<picture id="video">
						<a href="<?php echo $row['link']; ?>" target=_black ><img style="width:242px; height:222px;" src="images/video.jpg" title="arboles" /></a>
					</picture>
			<?
					}
				?>
		</section>
	</body>
</html>