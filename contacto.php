<?php
$pageTitle="Contacto";
$pageDescription="Contactanos para cualquier duda, comentario o para iniciar tu proyecto";
include_once('master-header.php');
include_once("analyticstracking.php");
$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$asunto = $_REQUEST['asunto'];
$mensaje = $_REQUEST['mensaje'];
$error = 0;
$error1= 0;
$error_1="- Campo vac&iacute;o";
$error_2="- Correo no valido";
$errorNombre=false;
$errorCorreo=false;
$errorAsunto=false;
$errorMensaje=false;
if($_POST){
	if($nombre==null){
		$error=1;
		$errorNombre=true;
	}
	if($correo==null){
		$error=1;
		$errorCorreo=true;
	}
	else{
		if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
		$error1=1;
		$errorCorreo=true;
		}
	}
	if($asunto==null){
		$error=1;
		$errorAsunto=true;
	}
	if($mensaje==null){
		$error=1;
		$errorMensaje=true;
	}
	if(!$error){include_once('send-mail.php');}
	}
?>
<div class="row">
	<div class="large-10 large-centered columns text-2">	
		<div style="margin-top:30px;"><p class="t1">Cont&aacute;ctanos</p></div>
			<form name="formulario" id="formulario" method="post" action="contacto.php" >
				<fieldset>
					<legend>Mensaje</legend>
					<div class="large-8 columns space-form<?php if($errorNombre)echo'error';?>" style="margin-top:20px;">
						<label>Nombre</label>
						<input type="text" placeholder="Nombre completo" name="nombre" id="nombre" maxlength="30">	
						<script type="text/javascript">
						var nombre = new LiveValidation('nombre');
						nombre.add(Validate.Presence, {failureMessage: "Porfavor escriba su nombre"});
						</script>  
					</div>
					<div class="large-4 columns space-form<?php if($errorCorreo)echo'error';?>" style="margin-top:20px;">
						<label>Correo electronico</label>
						<input type="text" placeholder="Correo electronico" name="correo" id="correo" maxlength="30">
						<script type="text/javascript">
						var f20 = new LiveValidation('correo');
						f20.add( Validate.Presence, {failureMessage: "Escriba su e-mail!"});
						f20.add(Validate.Email, {failureMessage: "E-mail incorrecto!"} );
						</script>  
					</div>
					<div class="large-12 columns space-form<?php if($errorAsunto)echo'error';?>">
						<label>Asunto</label>
						<input type="text" placeholder="Escriba asunto" name="asunto" id="asunto">
						<script type="text/javascript">
						var f3 = new LiveValidation('asunto');
						f3.add( Validate.Presence, {failureMessage: "Porfavor escriba asunto!"});
						</script> 
					</div>
					<div class="large-12 columns space-form<?php if($errorMensaje)echo'error';?>">
						<label>Mensaje</label>
						<textarea rows="10" placeholder="Escriba su mensaje" name="mensaje" id="mensaje"></textarea>
						<script type="text/javascript">
						var f4 = new LiveValidation('mensaje');
						f4.add( Validate.Presence, {failureMessage: "Porfavor escriba un mensaje!"});
						</script> 
					</div>
					<div class="row">
						<?php if($error)echo'<div class="large-3 push-1"><label class="error">'.$error_1.'</label></div>';?>
						<?php if($error1)echo'<div class="large-3 push-1"><label class="error">'.$error_2.'</label></div>';?>
						<div class="large-2 push-9 columns">
							<input class="button prefix" type="submit" name="Submit" value="Enviar"/>
						</div>
					</div>
				</fieldset>
			</form>		
		</div>
	</div>
	<?php  
	include_once('master-footer.php');
	?>