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
			<h2>SUTURES</h2>
		</div>
	</div>

	<div class="contenedor-producto">
		<div class="img-producto">
			<img src="img/producto-sutures.jpg">
		</div>
		<div class="caracteristicas-producto">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Polyglycolic Acid &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>

			<div class="izq-producto">
				<h4>General<br><div class="linea1"></div></h4>
				<p>&#8226; Absorbable suture (polyglactyn 910).<br>
				&#8226; Generally known under the trade name Vicryl.<br>
				&#8226; Strand braided, monofilament.<br>
				&#8226; Lactide copolymer suture and glycolic coated polyglactin 370 and calcium stearate.<br>
				&#8226; The absorption of this suture is complete within 70 days being absorbed by hydrolysis.
				</p>

				<h4>Other features<br><div class="linea2"></div></h4>
				<p>&#8226; Polyglycolic Acid thread in violet color.<br>
				&#8226; Thread size: from 10/0 to 1 USP.<br>
				&#8226; Sterilized by Ethylene Oxide.<br>
				&#8226; Boxes per 12 or 36 units.
				</p>
			</div>

			<div class="der-producto">
				<h4>Advantages and Benefits<br><div class="linea3"></div></h4>
				<p>&#8226; Packaging ensures product sterility.<br>
				&#8226; Peel open.<br>
				&#8226; Siliconized needles allowing a minimum tissue trauma<br>
				&#8226; High tensile strength.<br>
				&#8226; Uniform strand preventing tissue drag.<br>
				&#8226; Softness, flexibility and elasticity that facilitates the use and concretion knots.
				</p>

				<h4>Recommended procedures<br><div class="linea4"></div></h4>
				<p>&#8226; Suture soft tissue.<br>
				&#8226; General surgery.<br>
				&#8226; Ophthalmic.
				</p>
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