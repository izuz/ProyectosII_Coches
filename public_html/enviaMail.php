<?php

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$tema = isset($_POST['tema']) ? $_POST['tema'] : "";
$contenido = isset($_POST['mensaje']) ? $_POST['mensaje'] : "";

if ($nombre == NULL | $email == NULL | $tema == NULL | $contenido == NULL) {
    echo '<script> alert("Error al enviar el correo, revisar los campos obligatorios");</script>';
    echo '<meta http-equiv="refresh" content="0">';
    die();
}

/////// /////// /////// /////// /////// ENVIA EL EMAIL USANDO UNA CUENTA DE HOTMAIL /////// /////// /////// /////// /////// /////// /////// 

$mensaje = "Detalles del formulario de contacto:<br>"; // aquí pones el contenido del mensaje
$mensaje .= "Nombre: " . $_POST['nombre'] . "<br>";
$mensaje .= "Email:  " . $_POST['email'] . "<br> ";
$mensaje .= "Tema: " . $_POST['tema'] . "<br> ";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "<br> ";

$para = 'g.on177@hotmail.com';                         //dirección de destino
$nombreUsuarioHotmail = "gautomotorcorreo@hotmail.com";         ///Aquí pones tu dirección de email de hotmail
$passUsuarioHotmail = "1234Igaza";           ///Aquí pones tu contraseña de email de hotmail
require 'PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';


$mail->Host = "smtp.live.com";
$mail->SMTPDebug = 2;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = "smtp.live.com";
$mail->Port = 25;

$mail->Username = $nombreUsuarioHotmail;
$mail->Password = $passUsuarioHotmail;


$mail->From = 'GAutoMotor@hotmail.com';   /// email desde el que quieres que aparezca el envío. Por ejemplo, gauto@hotmail.com
$mail->FromName = 'Administrador de la web';    // el nombre que quieres que aparezca en el campo from
$mail->addAddress($para);
$mail->addReplyTo('yo@yo.com', 'hola');  //aquí pones la dirección de email al que quieres enviar los correos si le dan a responder, y el nombre del campo "para" que quieres que aparezca


$mail->WordWrap = 50;                                 // el ancho máximo de cada línea

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contacto desde el sitio web';     // título del email
$mail->Body = $mensaje;
$mail->AltBody = 'Agregar esta dirección para mostrar el email correctamente';

if (!$mail->send()) {
    echo '<script> alert("Hubo un problema al enviar el correo, vuelva a intentarlo");</script>';
}

if ($nombre !== NULL | $email !== NULL | $tema !== NULL | $contenido !== NULL) {
    echo '<script> alert("Mensaje enviado correctamente");</script>';
    echo '("<meta http-equiv="refresh" content="0">")';
    die();
}

/////// /////// /////// /////// /////// /////// /////// /////// /////// /////// /////// ////////////// /////// /////// /////// /////// /////// /////// /////// /////// /////// /////// ///////
?>