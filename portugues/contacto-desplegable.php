<?php
?>

	<div class="contenedor-contacto-desplegable">
		<div id="boton-contacto-desplegable">
			<p>CONTATO</p><span><i class="fa fa-comment fa-2x" aria-hidden="true"></i></span>
		</div>
		<div class="clear"></div>
		<div id="formulario">
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto2.php">
			<p>Obrigado por nos contatar. Deixe sua mensagem e enviar-lhe uma cotação. Ou ligue para<br>
			<a href="tel: +12398887805" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">USA + 1 (239) 888 7805</a><br>
			<a href="tel: +12397859814" onClick="return (navigator.userAgent.match(/Android|iPhone|iPad|iPod|Mobile/i))!=null;">USA + 1 (239) 785 9814</a>
			</p>
				<div class="centrado verde" id="ajaxsuccess">*O e-mail foi enviado com sucesso.*</div>

				<label>Nome</label><br>
				<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-nombre">*Por favor, insira seu nome*</div>

				<label>Email</label><br>
				<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-email">*Por favor introduza o seu e-mail*</div>
				<div class="error" id="err-emailvld">*O formato de e-mail é inválido*</div>

				<label>Empresa</label><br>
				<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-empresa">*Por favor, indique o nome da empresa*</div>
			
				<label>Mensagem</label><br>
				<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
				<div class="clear"></div>
				<div class="error" id="err-mensaje">*Por favor, escreva uma mensagem*</div>

				<div class="error centrado" id="err-form">*Houve um problema validar o formulário por favor, verifique!*</div>
				<div class="error centrado" id="err-timedout">*Conexão em tempo para o servidor expirou!*</div>
				<div class="error" id="err-state"></div><br>
				<button class="boton2" id="send" class="btn btn-primary boton-enviar">ENVIAR</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>
	</div>

<?php
?>