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

<!--================== 	SCRIPT PARA SLIDER (INICIA)  =====================-->

	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!--================== 	SCRIPT PARA SLIDER (TERMINA)  =====================-->

<!--================== 	SCRIPT PARA MOSTRAR Y OCULTAR UN DIV (INICIA)  =====================-->

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

	<div id="contenedor-slider">
		<div id="slider">
			<section>
				<img src="img/slider1.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider1</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
			<section>
				<img src="img/slider1.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider2</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
			<section>
				<img src="img/slider1.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider3</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
		</div>
		<div id="btn-avanzar">
			<img src="img/flecha-derecha.png">
		</div>
		<div id="btn-retroceder">
			<img src="img/flecha-izquierda.png">
		</div>
		<script src="js/slider.js"></script>
	</div>

	<div class="contenedor-caracteristicas">
		<h2><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Características de Nuestras Suturas &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h2>
		<div class="caracteristicas margen">
			<img class="img1" src="img/resistencia.gif">
			<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
			<p>Mayor resitencia de la sutura en la union hilo aguja (Aumentamos 30% la exigencia de las pruebas segun USP).</p>
		</div>
		<div class="caracteristicas margen">
			<img class="img2" src="img/agujas.gif">
			<h4>AGUJAS SILICONIZADAS</h4>
			<p>Suturas con agujas siliconizadas con menor resistencia a la traccion.</p>
		</div>
		<div class="caracteristicas margen">
			<img class="img3" src="img/u-filo.gif">
			<h4>TECNOLOGIA U-FILOvv</h4>
			<p>Proporciona un comportamiento adecuado provocando una reaccion minima del tejido.</p>
		</div>
		<div class="caracteristicas">
			<img class="img4" src="img/calidad.gif">
			<h4>CONTROL DE CALIDAD ONE BY ONE</h4>
			<p>Todas nuestras suturas son probadas, una a una, a fin de garantizar la excelencia de su calidad.</p>
		</div>

		<div class="clear"></div>
	</div>

	<div class="contenedor-gris">
		<div class="resumen-nosotros">
			<img src="img/resumen-nosotros.jpg">
			<h4>NOSOTROS</h4>
			<p>En Vital Sutures somos especialistas en la producción y comercialización de Dispositivos Médicos. Venimos ofreciendo desde hace 10 años nuestra línea de suturas quirúrgicas cumpliendo con los más altos estándares de calidad, satisfaciendo los requerimientos del profesional médico y contribuyendo al éxito de todo tipo de procedimientos quirúrgicos. Actualmente Vital Sutures tiene presencia en 27 países del Mundo, en todos los continentes, gracias al cumplimiento de nuestro compromiso de garantizar la excelencia en la calidad de nuestros productos. Como pilar de esta premisa contamos con las certificaciones internacionales CE 1023, de la Comunidad Europea, y FDA, de los Estados Unidos.</p>
		</div>

		<div class="slider-info">
			<div id="contenedor-slider-info">
				<div id="slider-info">
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
				</div>
			</div>
			<div id="btn-avanzar2">
				<img src="img/flecha-derecha-azul.png">
			</div>
			<div id="btn-retroceder2">
				<img src="img/flecha-izquierda-azul.png">
			</div>
			<script src="js/slider2.js"></script>
		</div>

		<div class="clear"></div>
	</div>

	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>