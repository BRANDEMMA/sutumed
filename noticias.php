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
			<h2>Últimas Noticias</h2>
		</div>
	</div>

	<div class="noticias-blanco">
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
	</div>

	<div class="noticias-gris">
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
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>