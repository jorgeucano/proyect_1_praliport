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
		<section>
		</section>
		<section id="contenedor">
			<section id="contacto_contenedor_left">
<form action="contactar.php" method="post">
        <table width="392" height="556">
          <tbody><tr>
            <td width="77" height="47" align="right"><a style="color:#FFF">
            	<? 
					if ($idioma == "e"){
						echo "Nombre";
					}
					else if ($idioma == "i"){
						echo "Name";
					}
					else{
						echo "όνομα";
					}
				?>

            </a></td>
            <td width="217"><input name="nombre" type="text" required="required" style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px;" value="  " size="36px">
              *</td>
          </tr>
          <tr>
            <td height="39" align="right"><a style="color:#FFF">
            	<? 
					if ($idioma == "e"){
						echo "Email";
					}
					else if ($idioma == "i"){
						echo "Email";
					}
					else{
						echo "Email";
					}
				?>

            </a></td>
            <td><input name="email" type="text" required="required" style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px;" value="  " size="36px">
              *</td>
          </tr>
          <tr>
            <td height="44" align="right" valign="middle"><a style="color:#FFF">
            <? 
					if ($idioma == "e"){
						echo "Telefono";
					}
					else if ($idioma == "i"){
						echo "Phone";
					}
					else{
						echo "τηλέφωνο";
					}
				?>
			</a></td>
            <td><input name="asunto" type="text" style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px;" value="  " size="36px">
              *</td>
          </tr>
           <tr>
            <td height="44" align="right"><a style="color:#FFF">
             <? 
					if ($idioma == "e"){
						echo "Localidad";
					}
					else if ($idioma == "i"){
						echo "Locality";
					}
					else{
						echo "τοποθεσία";
					}
				?>	


             </a></td>
            <td><input name="localidad" type="text" style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px;" value="  " size="36px">
              *</td>
          </tr>
          <tr>
            <td height="210" align="right"><a style="color:#FFF">
            	<? 
					if ($idioma == "e"){
						echo "Descripcion";
					}
					else if ($idioma == "i"){
						echo "Description";
					}
					else{
						echo "περιγραφή";
					}
				?>	

            </a></td>
            <td><textarea name="mensaje" cols="30px" rows="12" required="required" value="   " style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px;">  </textarea></td>
          </tr>
<tr><td height="67">&nbsp;</td>
            <td align="center" valign="top"><input style="
 -moz-border-radius: 15px 15px 15px 15px;
 -webkit-border-radius: 15px 15px 15px 15px;
 behavior:url(border.htc);
 border-radius: 15px 15px 15px 15px; width:50px;" type="submit" value="<? 
	if ($idioma == "e"){
		echo "Enviar";
	}
	else if ($idioma == "i"){
		echo "Send";
	}
	else{
		echo "Αποστολή";
	}
?>"></td>
          </tr>
          <tr><td height="83"></td>
            <td><div align="center"></div></td>
          </tr>
          <tr>
          </tr>
        </tbody></table>
      </form>
			</section>
			<section id="contacto_contenedor_derecha">
				<section>
					<? 
						if ($idioma == "e"){
							echo "Contacto";
						}
						else if ($idioma == "i"){
							echo "Contact";
						}
						else{
							echo "επαφή";
						}
					?>
					<br />
					<? 
						if ($idioma == "e"){
							echo "Si queres contactarte con nosotros para cualquier tipo de consulta o pedido puede realizarlo completando el formulario a continuacion o bien enviando email o comunicandose telefonicamente a los siguientes datos.";
						}
						else if ($idioma == "i"){
							echo "If you want to contact us for any inquiry or order you can do so by completing the form below or by sending email or by telephoning the following data.";
						}
						else{
							echo "Αν θέλετε να επικοινωνήσετε μαζί μας για οποιαδήποτε ερώτηση ή παραγγελία μπορείτε να το κάνετε συμπληρώνοντας την παρακάτω φόρμα ή στέλνοντας e-mail ή τηλεφωνώντας τα ακόλουθα δεδομένα.";
						}
					?>
					<br />
					<? 
						if ($idioma == "e"){
							echo "Informacion";
						}
						else if ($idioma == "i"){
							echo "Information";
						}
						else{
							echo "πληροφορίες";
						}
					?>
<br />
					<? 
						if ($idioma == "e"){
							echo "Tel";
						}
						else if ($idioma == "i"){
							echo "Phone";
						}
						else{
							echo "τηλέφωνο";
						}
					?>. (05411] 4635.5986i
<br />
					Email. info@praliport.com.ar
<br />
					<? 
						if ($idioma == "e"){
							echo "Ventas";
						}
						else if ($idioma == "i"){
							echo "Sales";
						}
						else{
							echo "πωλήσεις";
						}
					?>
<br />
					<? 
						if ($idioma == "e"){
							echo "Tel";
						}
						else if ($idioma == "i"){
							echo "Phone";
						}
						else{
							echo "τηλέφωνο";
						}
					?>. (05411) 4987.7895
<br />
					Email. ventas@praliport.com.ar
				</section>
			</section>
		</section>
		<?php
			include ('footer.html');
		?>
	</body>
</html>