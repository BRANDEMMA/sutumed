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
		<p class="subtitulo">Estados Unidos</p>

		<p>
		<img class="img-nosotros1" src="img/nosotros2.jpg">
		Desde hace más de 50 años venimos comercializando nuestra línea de suturas quirúrgicas satisfaciendo los más altos estándares de calidad (FDA, CE 510k) que contribuyen al desarrollo exitoso de la cirugía.<br>
		Sutumed tiene presencia en más de 33 países de todo el mundo siendo su principal mercado América Latina. Sin embargo, nuestra preocupación por la mejora de la calidad en la cirugía nos ha llevado a tener altos estándares de calidad, la prueba está en nuestras certificaciones internacionales como ISO 9001, ISO 13486, FDA 510k y CE. Es gracias a nuestro anhelo por la innovación constante de nuestro producto que ahora utilizamos materiales de alta calidad, tales como agujas de serie 302 e hilos de alta calidad de origen europeo. Añadiendo a nuestras agujas nuestra tecnología U-Filo dando un mejor beneficio en la aguja necesaria para un pasaje no traumático a través de los tejidos y nuestro proceso de control de calidad "One by one" por el cual nuestros suturas son sometidas individualmente a rigurosas pruebas de calidad.

	
		<!-- <img class="img-nosotros2" src="img/nosotros3.jpg"> -->		
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