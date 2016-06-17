<!DOCTYPE html>
<html lang="es">

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

	<div id="contenedor-slider">
		<div id="slider">
			<section>
				<img src="img/slider1.jpg" alt="">
				<div class="texto-slider">
					<h2>RESISTENCIA A LA TRACCIÓN</h2>
					<p>Excelente resistencia de la sutura en el engaste de la aguja con el hilo de acuerdo a la USP.</p>
					<!-- <a href="">Botón</a> -->
				</div>
			</section>
			<section>
				<img src="img/slider2.jpg" alt="">
				<div class="texto-slider">
					<h2>AGUJAS SILICONADAS</h2>
					<p>Permite un pase fácil a través de los tejidos.</p>
					<!-- <a href="">Botón</a> -->
				</div>
			</section>
			<section>
				<img src="img/slider3.jpg" alt="">
				<div class="texto-slider">
					<img class="logos-white" src="img/ufilo-white2.png">
					<p>U-FILO TECHNOLOGY - Proporciona un comportamiento adecuado de la aguja causando mínima reacción tisular.</p>
					<!-- <a href="">Botón</a> -->
				</div>
			</section>
			<section>
				<img src="img/slider4.jpg" alt="">
				<div class="texto-slider">
					<h2>CONTROL DE CALIDAD</h2>
					<p>Realizado de manera individual que garantiza los requisitos de los cirujanos.</p>
					<!-- <a href="">Botón</a> -->
				</div>
			</section>
		</div>
		<div id="btn-avanzar">
			<img src="img/flecha-derecha.png">
		</div>
		<div id="btn-retroceder">
			<img src="img/flecha-izquierda.png">
		</div>
		<script src="js/slider.js"></script>
	</div>

	<!-- <div class="contenedor-caracteristicas">
		<h2><i class="fa fa-caret-right" aria-hidden="true"></i>&nbsp;&nbsp; Features of our Sutures &nbsp;&nbsp;<i class="fa fa-caret-left" aria-hidden="true"></i></h2>
		<div class="caracteristicas margen">
			<img class="img1" src="img/resistencia.gif">
			<h4>GREATER TENSILE STRENGTH</h4>
			<p>Greater resistance of the suture in the needle – thread union (we increased the demand for testing according to USP by 30%).</p>
		</div>
		<div class="caracteristicas margen">
			<img class="img2" src="img/agujas.gif">
			<h4>SILICONIZED NEEDLES</h4>
			<p>Sutures with siliconized needles, with lower resistance to traction.</p>
		</div>
		<div class="caracteristicas margen">
			<img class="img3" src="img/u-filo.gif">
			<h4>U-FILO TECHNOLOGY</h4>
			<p>Provides appropriate behavior causing minimal tissue reaction.</p>
		</div>
		<div class="caracteristicas">
			<img class="img4" src="img/calidad.gif">
			<h4>ONE BY ONE QUALITY CONTROL</h4>
			<p>All our sutures are tested, one by one, in order to guarantee its quality.</p>
		</div>

		<div class="clear"></div>
	</div> -->


	<div class="contenedor-azul2">
		<h2>NUESTRAS SUTURAS</h2>
		<div class="contenido-mas-vendidas">
			<a href="polyglycolic-acid.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-ap.png"></div>
				<h3>Acido Poliglicólico (PGA)</h3>
				<p>Polyglycolic acid (PGA) is a synthetic suture, ABSORBABLE, Sterile, Multifilament, which meets all requirements established by the USP. Equivalent with Vicryl, Safil, Polysorb, Dexon in surgical material.</p>
			</div></a>

			<a href="polydioxanone.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-pd.png"></div>
				<h3>Polidioxanona</h3>
				<p>Polydioxanone suture is a synthetic, ABSORBABLE, monofilament that meets the requirements of the USP, except the diameter that is governed by the parameters of the British Pharmacopoeia. Its component is the Polydioxanone Polymer. Equivalent with PDSII, Mono-Plus in surgical material.</p>
			</div></a>

			<a href="polyglecaprone.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-pg.png"></div>
				<h3>Poliglecaprone</h3>
				<p>Polyglecaprone is a synthetic suture, ABSORBABLE, sterile, monofilament made of polymer e-Caprolactone and polymer Glycolide (PGCL), meets the requirements of the USP except the diameter which is ruled by the British Pharmacopoeia. Equivalent with Monocryl in surgical material.</p>
			</div></a>

			<a href="polypropylene.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-pp.png"></div>
				<h3>Polipropileno</h3>
				<p>The Polypropylene, Non-ABSORBABLE suture, monofilament, whose main component is the isobathic crystalline stereoisomer of polypropylene, a synthetic linear polyolefin. Equivalent with Prolene, Premilene, Surgipro in surgical material.</p>
			</div></a>

			<a href="nylon.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-nm.png"></div>
				<h3>POLYESTER</h3>
				<p>Polyester Non-ABSORBABLE suture of synthetic origin, braided multifilament and Teflon pad multifilament, which meets the USP requirements.Equivalent with Ethbon, Drografil, Ti-Cron, Surgidac in surgical material.</p>
			</div></a>

			<a href="black-braided-silk.php"><div class="mas-vendidas">
				<div class="fondo-gris"><img src="img/mk-st.png"></div>
				<h3>Seda Negra Trenzada</h3>
				<p>Black Braided Silk is a suture of natural origin, multifilament that meets the USP requirements. It is composed of an organic protein called fibroin. Equivalent with Mersilk, Silkam, Sofsilk in surgical material.</p>
			</div></a>

			<div class="clear"></div>
		</div>
	</div>

<!--
	<div class="contenedor-gris">
		<div class="resumen-nosotros">
			<img src="img/resumen-nosotros.jpg">
			<h4>ABOUT US</h4>
			<p>We have been offering for more than 50 years our line of surgical sutures meeting the highest quality standards (FDA 510k, CE) that contribute to the successful development of surgery. <br>Sutumed has presence in over 33 countries worldwide and its main market in Latin America. However our concern for quality improvement in surgery has led us to have high quality standards, the proof is in our international certifications such as ISO 9001, ISO 13486, FDA 510k and CE. As our concern for innovation in high-quality materials such as needles and threads 302 series of European origin high quality surgical steel.</p>
		</div>

		<div class="slider-info">
			<div id="contenedor-slider-info">
				<div id="slider-info">
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
					<section>
						<div class="articulos-info espaciado-articulo-info">
							<img src="img/articulo-info-slider2.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>

						<div class="articulos-info">
							<img src="img/articulo-info-slider.jpg" alt="">
							<div class="texto-articulo">
								<h4>MAYOR RESISTENCIA A LA TRACCION</h4>
								<p>Vital Sutures, leading company in the market of surgical sutures and medical devices for 55 years…</p>
								<a class="btn-noticias" href=""><span><i class="fa fa-thumb-tack" aria-hidden="true"></i></span> Ver más</a>
							</div>
						</div>
						<div class="clear"></div>
					</section>
				</div>
			</div>
			<div id="btn-avanzar2">
				<img src="img/flecha-derecha-azul.png">
			</div>
			<div id="btn-retroceder2">
				<img src="img/flecha-izquierda-azul.png">
			</div>
			<script src="js/slider2.js"></script>
		</div>
-->
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