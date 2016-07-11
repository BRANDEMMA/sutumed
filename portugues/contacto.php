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
		<img src="img/contacto.jpg">
		<div class="titulo-secciones">
			<h2>Contato</h2>
		</div>
	</div>

	<div class="mapa">
		<iframe src="https://www.google.com/maps/d/embed?mid=1lxWXOJgogNNgmiIR7eU0ZI8QSUU" width="640" height="480"></iframe>
	</div>

	<div class="contenedor-datos-contacto">
		<div class="datos-contacto">
			<i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
			<p>Tem alguma pergunta?<br><a href="mailto:info@sutumed.us">info@sutumed.us</a></p>
		</div>

		<div class="datos-contacto">
			<i class="fa fa-comment fa-2x" aria-hidden="true"></i>
			<p>
			Ligue-nos<br>
			<a href="tel: +12398887805" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">USA + 1 (239) 888 7805</a><br>
			<a href="tel: +12397859814" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">USA + 1 (239) 785 9814</a><br>
			<a href="tel: +12395908484" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">USA + 1 (239) 590 8484</a>
			</p>
		</div>		

		<div class="clear"></div>
	</div>

	<div class="contenedor-formulario">
		<div class="izquierda-formulario">
			<div class="texto-formulario">
				<h3>Endereço USA</h3>
				<p>Sutumed Corp<br>
				9280 College Pkwy, Unit #5<br>
				Fort Myers, FL 33919</p>

				<div class="redes-formulario">
					<a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="derecha-formulario">
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto.php">
				<div class="centrado" id="ajaxsuccess">*O e-mail foi enviado com sucesso.*</div>

				<div class="campos-formulario">
					<label>NOME</label><br>
					<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-nombre">*Por favor, insira seu nome*</div><br>
				</div>

				<div class="campos-formulario">
					<label>EMAIL</label><br>
					<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-email">*Por favor introduza o seu e-mail*</div>
				    <div class="error" id="err-emailvld">*O formato de e-mail é inválido*</div><br>
			    </div>

				<div class="campos-formulario">
					<label>TELEFONE</label><br>
					<input name="telefono" id="telefono" type="tel" onfocus="if(this.value == 'Teléfono') this.value='';" onblur="if(this.value == '') this.value='';">
					<div class="clear"></div>
					<div class="error" id="err-telefono">*Por favor, digite seu número de telefone*</div><br>
				</div>

				<div class="clear"></div>

				<div class="mensaje-formulario">
				<label>MENSAGEM</label><br>
					<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
					<div class="clear"></div>
					<div class="error" id="err-mensaje">*Por favor, escreva uma mensagem*</div><br>
				</div>

				<div class="clear"></div>

				<div class="error centrado" id="err-form">*Houve um problema validar o formulário por favor, verifique!*</div>
				<div class="error centrado" id="err-timedout">*Conexão em tempo para o servidor expirou!*</div>
				<div class="error" id="err-state"></div><br>
				<button class="boton" id="send" class="btn btn-primary boton-enviar">ENVIAR</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>

		<div class="clear"></div>
	</div>

	<?php
		include 'pie-pagina.php';
	?>
</body>

</html>