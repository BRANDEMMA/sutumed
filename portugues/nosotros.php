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
			<h2>Sobre Nós</h2>
		</div>
	</div>

	<div class="contenido-nosotros">
		<h3>SUTUMED</h3>
		<p class="subtitulo">USA</p>

		<p>
		<img class="img-nosotros1" src="img/nosotros2.jpg">
		Temos vindo a oferecer há mais de 50 anos a nossa linha de suturas cirúrgicas que satisfaçam os mais elevados padrões de qualidade (FDA 510k, CE) que contribuem para o desenvolvimento bem sucedido da cirurgia. <br> Sutumed tem presença em mais de 33 países do mundo e seu principal mercado na América Latina. No entanto a nossa preocupação com a melhoria de qualidade em cirurgia levou-nos a ter altos padrões de qualidade, a prova está em nossas certificações internacionais, como ISO 9001, ISO 13486, FDA 510k e CE. Como a nossa preocupação com a inovação em materiais de alta qualidade, tais como agulhas e linhas 302 séries de origem europeia aço cirúrgico de alta qualidade. O que acrescentar às nossas agulhas tecnologia de tratamento de U-Filo fornecer aos nossos borda de aço necessária para uma passagem atraumática suave através de tecidos e nosso processo de controle de qualidade "Um por um" pelo qual nossos suturas são submetidos individualmente a rigorosos testes de qualidade.
	
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