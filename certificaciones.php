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
		<img src="img/banner2.jpg">
		<div class="titulo-secciones">
			<h2>Certifications</h2>
		</div>
	</div>

	<div class="noticias-blanco">
		<div class="img-noticia2">
			<img src="img/expodent.jpg">
		</div>
		<div class="texto-noticia2">
			<h3>Sales  Certificate</h3>
			<!-- <p class="subtitulo">Santiago de chile - CHILE</p> -->

			<p>Our products meet the highest quality standards required globally.<br><br>

			We attached the cretificaciones of our products<br><br>

			- CE 103 EC DESING – EXAMINATION CERTIFICATE &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/itc_ec_design_examination_certificate_120191.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> <br><br>
			- CE 103 EC CERTIFICATE FOR ABSORBABLE SUTURE &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/itc_ec_certificate_120190.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> <br><br>
			- CE 103 EC CERTIFICATE FOR NON ABSORBABLE SUTURE &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/itc_ec_certificate_120192.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a><br><br>
			- CERTIFICATE TO FOREING GOVERMENT &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/certificate_foreign_government_326542016.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> <br><br>
			- FDA ABSORBABLES SUTURES &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/fda_absorbables_sutures.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a><br><br>
			- FDA CLEARED &nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="pdf/fda_clearance_letter.pdf"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> 
			</p>
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