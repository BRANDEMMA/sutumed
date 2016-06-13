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
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Antibacterial Polyglycolic Acid &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>

			<div class="izq-producto">
				<h4>General</h4>
				<p>&#8226; Suture fast absorption.<br>
				&#8226; Generally known under the trade name Vicryl Plus.<br>
				&#8226; Stranded strand.<br>
				&#8226; Glycolide and lactic polymer coated polyglactin 370 , calcium stearate and tryclosan.<br>
				&#8226; It is absorbed by hydrolysis 40 days.
				</p>

				<h4>Other features</h4>
				<p>&#8226; Color: violet.<br>
				&#8226; Thread size: from 5/0 to 2 USP.<br>
				&#8226; Sterilized by Ethylene Oxide.<br>
				&#8226; Boxes with 12 or 36 units.
				</p>
			</div>
			<p>Santiago de chile - CHILE</p>

			<p>Las suturas quirúrgicas se emplean para aproximar tejidos y ligar vasos sanguíneos de forma temporal, y se aplican en diversos procedimientos de acuerdo a las propiedades y características de la hebra y aguja con que han sido fabricadas. Pueden ser degradadas por enzimas (en el caso de la sutura de origen natural de Catgut) o hidrolizadas por fluidos tisulares (en el caso de las sintéticas), por lo que no es necesario retirarlas. Su proceso de degradación hace que la resistencia de estas suturas disminuya con el tiempo.</p>
		</div>

		<div class="clear"></div>
	</div>

	<div class="contenedor-nuevos">
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
	</div>

	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>