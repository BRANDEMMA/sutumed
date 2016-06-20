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
			<img src="img/mk-pg.png">
		</div>
		<div class="caracteristicas-producto">
			<h3><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Poliglecaprone &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h3>

			<div class="izq-producto">
				<h4>General<br><div class="linea1"></div></h4>
				<ul>
					<li>Sutura absorvível (poliglecaprone).</li>
					<li>Geralmente conhecido sob o nome comercial Monocryl.</li>
					<li>Fio monofilamento.</li>
					<li>Copolímero de ácido glicólico e fez épsilon-caprolactona.</li>
					<li>A absorção dessa sutura é concluído no prazo de 120 dias de serem absorvidos por hidrólise.</li>
				</ul>

				<h4>Outras características<br><div class="linea2"></div></h4>
				<ul>
					<li>Poliglecaprone está disponível em violeta e incolor.</li>
					<li>Tamanho: 5/0 a 1 USP.</li>
					<li>Esterilizados com óxido de etileno.</li>
					<li>Caixas com 12 ou 36 unidades.</li>
				</ul>
			</div>

			<div class="der-producto">
				<h4>Vantagens e Benefícios<br><div class="linea3"></div></h4>
				<ul>
					<li>Embalagem assegura a esterilidade do produto.</li>
					<li>Peel open.</li>
					<li>Agulhas siliconizados que permitem mínimo trauma tecidual.</li>
					<li>Alta resistência à tração.</li>
					<li>Filamento uniforme evita o arrasto do tecido.</li>
					<li>Maciez, flexibilidade e elasticidade que facilita o uso e concreção nós.</li>
				</ul>

				<h4>Procedimentos Recomendados<br><div class="linea4"></div></h4>
				<ul>
					<li>Tecidos moles.</li>
					<li>Ligadura.</li>
					<li>Peritônio.</li>
					<li>Vagina.</li>
					<li>Pele.</li>
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