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
		<img src="img/nosotros.jpg">
		<div class="titulo-secciones">
			<h2>Nosotros</h2>
		</div>
	</div>

	<div class="contenido-nosotros">
		<h3>SUTUMED</h3>
		<p class="subtitulo">Santiago de chile - CHILE</p>

		<p>
		<img class="img-nosotros1" src="img/nosotros2.jpg">
		En Vital Sutures somos especialistas en la producción y comercialización de Dispositivos Médicos. Venimos ofreciendo desde hace 10 años nuestra línea de suturas quirúrgicas cumpliendo con los más altos estándares de calidad, satisfaciendo los requerimientos del profesional médico y contribuyendo al éxito de todo tipo de procedimientos quirúrgicos. Actualmente Vital Sutures tiene presencia en 27 países del Mundo, en todos los continentes, gracias al cumplimiento de nuestro compromiso de garantizar la excelencia en la calidad de nuestros productos. Como pilar de esta premisa contamos con las certificaciones internacionales CE 1023, de la Comunidad Europea, y FDA, de los Estados Unidos. Nuestras suturas favorecen a una mejor cicatrización de las heridas al unir los bordes o extremos de la misma, reduciendo la tensión de la herida, el tiempo de cicatrización y el riesgo de infección. En resumen, podemos destacar los siguientes beneficios para los usuarios de Vital Sutures:<br><br>
		<img class="img-nosotros2" src="img/nosotros3.jpg">
		Corte suave y menor reacción tisular a través de los tejidos gracias a nuestro proceso “U-Filo”, que proporciona agujas siliconadas que mantienen el filo y con un máximo nivel de concordancia en el engaste.<br>
		Elevado nivel fuerza de tensil en todas nuestras suturas, ya que son sometidas a rigurosos controles de calidad a través de nuestro proceso “One by One”.<br>
		La seguridad de estar utilizando productos avalados con Certificaciones Internacionales de los más exigentes mercados del Mundo.<br>
		Nuestra cartera de productos se ve complementada por nuestras mallas de polipropileno para tratamiento de hernias y urología, entre otras posibles aplicaciones. Tanto las mallas como las suturas se encuentran disponibles en una amplia variedad de medidas y combinaciones.
		<div class="clear"></div>
		</p>

	</div>

	<?php
		include 'contacto-desplegable.php';
	?>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>