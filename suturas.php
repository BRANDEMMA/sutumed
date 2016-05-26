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

	<div class="contenedor-sutura">
		<div class="img-sutura">
			<img src="img/producto-sutures.jpg">
		</div>
		<div class="caracteristicas-sutura">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Características de Nuestras Suturas &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>
			<p>Santiago de chile - CHILE</p>

			<p>Las suturas quirúrgicas se emplean para aproximar tejidos y ligar vasos sanguíneos de forma temporal, y se aplican en diversos procedimientos de acuerdo a las propiedades y características de la hebra y aguja con que han sido fabricadas. Pueden ser degradadas por enzimas (en el caso de la sutura de origen natural de Catgut) o hidrolizadas por fluidos tisulares (en el caso de las sintéticas), por lo que no es necesario retirarlas. Su proceso de degradación hace que la resistencia de estas suturas disminuya con el tiempo.</p>

			<img src="img/sutures.jpg">
			<img src="img/sutures.jpg">
		</div>

		<div class="clear"></div>
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>