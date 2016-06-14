<!DOCTYPE html>
<html>

<head>

	<html lang="es">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<title>SUTUMED</title>
	<meta name="author" content="Brandemma" />
	<meta name="description" content="" />
<!--================== 	ENLACE HOJA DE ESTILOS (INICIA)  =====================-->

	<link rel="stylesheet" type="text/css" href="css/estilos.css">

<!--================== 	ENLACE HOJA DE ESTILOS (TERMINA)  =====================-->

<!--================== 	ENLACE ICONO (INICIA)  =====================-->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!--================== 	ENLACE ICONO (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#boton-contacto-desplegable').click('click', function(){
				$('#formulario').slideToggle('slow', function () {

				});
			});
		});
	</script>

<!--================== 	SCRIPT PARA LLAMAR A DIV OCULTO (TERMINA)  =====================-->

</head>

<body>
	<header>
		<?php
			include 'menu.php';
		?>
	</header>

	<div class="contenedor-titulo-secciones">
		<img src="img/noticias.jpg">
		<div class="titulo-secciones">
			<h2>Expodent 2016</h2>
		</div>
	</div>

	<div class="noticias-blanco">
		<div class="img-noticia2">
			<img src="img/expodent.jpg">
		</div>
		<div class="texto-noticia">
			<h3>Expodent mayo</h3>
			<p class="subtitulo">Santiago de chile - CHILE</p>

			<p>In Vital Sutures we are specialists in producing and marketing Medical Devices. Since 10 years ago, we offer our line of surgical sutures meeting the highest quality standards, and satisfying the healthcare professionals’ requirements and contributing to the success of all type of surgical procedures. Currently, Vital Sutures is present in 27 countries around the world, all the continents, thanks to complying with our commitment to guarantee the excellent quality of our products. Our cornerstones of this premise are our international certifications CE 1023, from the European Community, and FDA, from United States. Our sutures benefit to a better wound cicatrization while bringing together the borders or ends of the same, reducing the wound tension, the cicatrization time and the risk for infection. To sum up, the following benefits for our Vital Sutures clients are highlighted:<br>
			Soft cut and less tissue reaction through the tissues thanks to our “U-Filo” process, which provides edged silicone needles and a maximum level of compliance with the crimping.<br>
			High tensile stress level in all our sutures because they are submitted to strict quality controls through our “One by One” process.<br>
			Guarantee to use products supported by International Certifications of the most demanding markets in the world.<br>
			Our product portfolio is complemented by our polypropylene meshes for hernia and urology treatments, among other possible applications. Both meshes and sutures are available in a wide variety of sizes and combinations.</p>
		</div>

		<div class="clear"></div>
	</div>

	<!-- <div class="noticias-gris">
		<div class="img-noticia">
			<img src="img/articulos-noticias.jpg">
		</div>
		<div class="texto-noticia">
			<h3>Expodent mayo</h3>
			<p class="subtitulo">Santiago de chile - CHILE</p>

			<p>Vital Sutures, empresa líder en el mercado de suturas quirúrgicas y dispositivos médicos desde hace 55 años, tiene el agrado de informarles sobre su participación en la reconocida feria EXPODENT 2016. El evento se llevó a cabo del 13 al 14 de mayo en Santiago de Chile, y contará con la participación de reconocidas empresas del rubro dental.</p>

			<p class="detalles">
				<i class="fa fa-check negro" aria-hidden="true"></i>&nbsp;&nbsp; 30 March 2016<br><br>
				<i class="fa fa-star negro" aria-hidden="true"></i>&nbsp;&nbsp; 8;00 A 6;00<br><br>
				<i class="fa fa-check negro" aria-hidden="true"></i>&nbsp;&nbsp; Vacantes Limitadas
			</p>

			<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Loremp ipsum</a>
		</div>

		<div class="clear"></div>
	</div> -->

	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>