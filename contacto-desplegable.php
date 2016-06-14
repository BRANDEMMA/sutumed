<?php
?>

	<div class="contenedor-contacto-desplegable">
		<div id="boton-contacto-desplegable">
			<p>CONTACT</p><span><i class="fa fa-comment fa-2x" aria-hidden="true"></i></span>
		</div>
		<div class="clear"></div>
		<div id="formulario">
			<form class="form-main" name="ajax-form" id="ajax-form" method="POST" action="php/mensaje-contacto2.php">
			<p>We are glad to be able to attend. Send us your questions and gladly requirements or one of our operators will contact you!</p>
				<div class="centrado verde" id="ajaxsuccess">*The Email has been sent successfully.*</div>

				<label>Name</label><br>
				<input name="nombre" id="nombre" type="text" onfocus="if(this.value == 'Nombre') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-nombre">*Please enter your name*</div>

				<label>Email</label><br>
				<input name="email" id="email" type="email" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-email">*Please enter your email*</div>
				<div class="error" id="err-emailvld">*The E-mail format is invalid*</div>

				<label>Company</label><br>
				<input name="empresa" id="empresa" type="text" onfocus="if(this.value == 'Empresa') this.value='';" onblur="if(this.value == '') this.value='';">
				<div class="clear"></div>
				<div class="error" id="err-empresa">*Please enter your business name*</div>
			
				<label>Message</label><br>
				<textarea name="mensaje" id="mensaje" COLS=20 ROWS=4 onfocus="if(this.value == 'Mensaje') this.value='';" onblur="if(this.value == '') this.value='';"></textarea>
				<div class="clear"></div>
				<div class="error" id="err-mensaje">*Please, write a message*</div>

				<div class="error centrado" id="err-form">*There was a problem validating the form please check!*</div>
				<div class="error centrado" id="err-timedout">*Time connection to the server has expired!*</div>
				<div class="error" id="err-state"></div><br>
				<button class="boton2" id="send" class="btn btn-primary boton-enviar">SUBMIT</button>

				<div class="clear"></div>
			</form>
			<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>  	
		  	<script type="text/javascript" src="js/functions.js"></script>
		</div>
	</div>

<?php
?>