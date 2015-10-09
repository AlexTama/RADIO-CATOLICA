<?php 
//Incluimos todos los archivos necesarios
require_once 'captcha/ReCaptcha.php';
require_once 'captcha/RequestMethod.php';
require_once 'captcha/RequestParameters.php';
require_once 'captcha/Response.php';
require_once 'captcha/RequestMethod/Post.php';
require_once 'captcha/RequestMethod/Socket.php';
require_once 'captcha/RequestMethod/SocketPost.php';

/*******************************************/
/* CLAVES PARA LA VALIDACIÓN DEL RECAPTCHA */
/*******************************************/ 

$clave_del_sitio = "6LcKRQ4TAAAAAJTEa41-Ic9EUL4Ow5UNsO5dwqDw";
$clave_secreta = "6LcKRQ4TAAAAAF894JEPH_zmv2oGpQVrwiofJuvR";

/*******************************************/
/* DATOS DEL USUARIO */
/* NO DEVUELVE ERRORES SI NO DE HACE EL LLAMADO A LA FUNCIÓN */
/*******************************************/

@$_asunto	= $_POST['asunto'];
@$_nombre 	= $_POST['nombre'];
@$_correo 	= $_POST['email'];
@$_mensaje	= $_POST['mensaje'];

/*******************************************/
/* DATOS PAR EL DESTINATARIO */
/*******************************************/

$asunto 	= $_asunto;
$cabeceras 	= "From: ".$nombre." - ".$correo;
$mail_to 	= "alextamayop@gmail.com";
$mensaje 	= $_mensaje;

/*******************************************/
/* VALIDACIÓN DEL RECAPTCHA EVITANDO EL SPAM */
/*******************************************/
 
if($_POST['accion'] == 'enviar'){
    $recaptcha = new ReCaptcha($clave_secreta);
    $respuesta = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if($respuesta->isSuccess()){
        echo 'El formulario ha sido validado';
    }else{
        echo 'Se ha devuelto el siguiente error:';
        foreach ($respuesta->getErrorCodes() as $error_code) {
            echo '<tt>' . $error_code . '</tt> ';
        }
    }
}

/*******************************************/
/* ENVÍO DEL FORMULARIO */
/*******************************************/

if (@mail($mail_to, $asunto, $mensaje, $cabeceras)) {
	include('gracias.php');
}

/*******************************************/
/* MANEJO DE ERRORES */
/*******************************************/

else{
	error_log("!No se pudo enviar el mensaje, intentelo nuevamente");
}

 ?>