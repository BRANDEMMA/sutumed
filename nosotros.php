<!DOCTYPE html>
<html lang="en">

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
		<img src="img/nosotros.jpg">
		<div class="titulo-secciones">
			<h2>Nosotros</h2>
		</div>
	</div>

	<div class="contenido-nosotros">
		<h3>SUTUMED</h3>
		<p class="subtitulo">USA</p>

		<p>
		<img class="img-nosotros1" src="img/nosotros2.jpg">
		We have been offering for more than 50 years our line of surgical sutures meeting the highest quality standards (FDA 510k, CE) that contribute to the successful development of surgery. <br>Sutumed has presence in over 33 countries worldwide and its main market in Latin America. However our concern for quality improvement in surgery has led us to have high quality standards, the proof is in our international certifications such as ISO 9001, ISO 13486, FDA 510k and CE. As our concern for innovation in high-quality materials such as needles and threads 302 series of European origin high quality surgical steel.
	
		<!-- <img class="img-nosotros2" src="img/nosotros3.jpg"> -->

		What adding to our treatment technology needles U-Filo providing our steel edge necessary for a smooth atraumatic passage through tissues and our process quality control "One by one" by which our sutures are subjected individually to rigorous quality tests.
		
		</p>

	</div>
<div class="clear"></div>
	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>