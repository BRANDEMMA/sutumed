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
		<img src="img/banner1.jpg">
		<div class="titulo-secciones">
			<h2>SUTURAS</h2>
		</div>
	</div>


	<!-- <div id="contenedor-slider3">
		<div id="slider3">
			<section>
				<img src="img/contacto.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider1</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
			<section>
				<img src="img/noticias.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider2</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
			<section>
				<img src="img/nosotros.jpg" alt="">
				<div class="texto-slider">
					<h2>TEXTO slider3</h2>
					<p>Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto descriptivo opcional Texto </p>
					<a href="">Botón</a>
				</div>
			</section>
		</div>
		<div id="btn-avanzar3">
			<img src="img/flecha-derecha.png">
		</div>
		<div id="btn-retroceder3">
			<img src="img/flecha-izquierda.png">
		</div>
		<script src="js/slider3.js"></script>
	</div> -->


	<!-- <div class="contenedor-sutura">
		<div class="img-sutura">
			<img src="img/producto-sutures.jpg">
		</div>
		<div class="caracteristicas-sutura">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Características de Nuestras Suturas &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>
			<p>Santiago de chile - CHILE</p>

			<p class="margen-inferior">Las suturas quirúrgicas se emplean para aproximar tejidos y ligar vasos sanguíneos de forma temporal, y se aplican en diversos procedimientos de acuerdo a las propiedades y características de la hebra y aguja con que han sido fabricadas. Pueden ser degradadas por enzimas (en el caso de la sutura de origen natural de Catgut) o hidrolizadas por fluidos tisulares (en el caso de las sintéticas), por lo que no es necesario retirarlas. Su proceso de degradación hace que la resistencia de estas suturas disminuya con el tiempo.</p>

			<img src="img/sutures.jpg">
			<img src="img/sutures.jpg">
		</div>

		<div class="clear"></div>
	</div> -->

	<?php
		include 'productos-suturas-absorbibles.php';
	?>

	<?php
		include 'productos-suturas-no-absorbibles.php';
	?>

	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>