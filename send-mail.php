<?php
//$pageTitle="Mensaje Enviado";
//$pageDescription="esto es una pagina de prueba";
//include_once('master-header.php');
//error_reporting(E_ALL);
//if(!isset($error))
   
if(!$error){
	error_reporting(E_STRICT);
	date_default_timezone_set('America/Toronto');
	require_once('php/class.phpmailer.php');
	//include("php/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
	$mail             = new PHPMailer();
	$body             = file_get_contents('contenido.html');
	$body             = eregi_replace("[\]",'',$body);
	//$body   = $_POST['mensaje'];
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "localhost"; // SMTP server
	$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "uriel.554@gmail.com";  // GMAIL username
	$mail->Password   = "cocodrilo1";            // GMAIL password
	$mail->SetFrom('uriel.554@gmail.com', 'Infiwork - '.$_POST['nombre']);
	$mail->AddReplyTo("infiworkventas@gmail.com","First Last" );
	$mail->Subject    = $_POST['asunto'];//$nombre;
	$mail->AltBody    = "Uriel Cebreros!"; // optional, comment out and test
	$mail->MsgHTML($_POST['mensaje']."<br>Correo Electronico: ".$_POST['correo']);
	//$mail->MsgHTML($body);
	$address = "infiworkventas@gmail.com";
	$mail->AddAddress($address, "Infiwork");
	//$mail->AddAttachment("images/phpmailer.gif");      // attachment
	//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	if(!$mail->Send()) {
	  echo "<script language='javascript'>window.location='fail-mail.php'</script>"; 
	} else {
	  echo "<script language='javascript'>window.location='succes-mail.php'</script>"; 
	}
}
else
 echo "<script language='javascript'>window.location='index.php'</script>";
?>
<?php  
	//include_once('master-footer.php');
?>