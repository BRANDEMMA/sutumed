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
		<img src="img/banner1.jpg">
		<div class="titulo-secciones">
			<h2>SUTURAS</h2>
		</div>
	</div>

	<div class="contenedor-producto">
		<div class="img-producto">
			<img src="img/mk-nm.png">
		</div>
		<div class="caracteristicas-producto">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Nylon &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>

			<div class="izq-producto">
				<h4>General<br><div class="linea1"></div></h4>
				<ul>
					<li>Sutura de nylon no absorbible.</li>
					<li>Generalmente conocido bajo el nombre comercial ETHILON.</li>
					<li>Hilo monofilamento.</li>
					<li>Sutura hecha de polímeros de cadena larga alifáticos Nylon.</li>
					<li>No se absorbe, se encapsula gradualmente por tejido.</li>
				</ul>

				<h4>Otras características<br><div class="linea2"></div></h4>
				<ul>
					<li>De color negro.</li>
					<li>Tamaño de la rosca: de 11/0 a 2/0 de la USP.</li>
					<li>Esterilizados con óxido de etileno.</li>
					<li>Cajas con 12 o 36 unidades.</li>
				</ul>
			</div>

			<div class="der-producto">
				<h4>Ventajas y Beneficios<br><div class="linea3"></div></h4>
				<ul>
					<li>Packaging asegura la esterilidad del producto.</li>
					<li>Peel open.</li>
					<li>Agujas siliconados que permiten un mínimo trauma del tejido.</li>
					<li>Alta resistencia a la tracción.</li>
					<li>Filamento uniforme prevenir arrastre de tejido.</li>
					<li>Suavidad, flexibilidad y elasticidad que facilita el uso y concreción nudos.</li>
				</ul>

				<h4>Procedimientos recomendados<br><div class="linea4"></div></h4>
				<ul>
					<li>Se utiliza para la aproximación de tejidos y ligaduras.</li>
					<li>Cirugía Cardiovascular.</li>
					<li>Cirugía oftálmica.</li>
					<li>Neurocirugía.</li>
					<li>Cierre con la piel.</li>
					<li>Microcirugía.</li>
					<li>Consideración otras cirujano.</li>
				</ul>
			</div>

			<div class="clear"></div>
		</div>

		<div class="clear"></div>
	</div>


	<?php
		include 'productos-suturas-absorbibles.php';
	?>

	<?php
		include 'productos-suturas-no-absorbibles.php';
	?>

	<!-- <div class="contenedor-nuevos">
		<h3>NUEVOS PRODUCTOS</h3>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>
		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
		</div>

		<div class="nuevos-productos">
			<a href=""><img src="img/producto-sutures.jpg"></a>
			<a href=""><h4>Expodent abril</h4>
			<p>Santiago de chile - CHILE</p></a>
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