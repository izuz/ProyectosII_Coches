<?php

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : "";
$marca_modelo = isset($_POST['marca_modelo']) ? $_POST['marca_modelo'] : "";
$motorizacion = isset($_POST['motorizacion']) ? $_POST['motorizacion'] : "";
$potencia = isset($_POST['potencia']) ? $_POST['potencia'] : "";
$fecha_1ª_matriculacion = isset($_POST['fecha_1ª_matriculacion']) ? $_POST['fecha_1ª_matriculacion'] : "";
$km_actuales = isset($_POST['km_actuales']) ? $_POST['km_actuales'] : "";
$color = isset($_POST['color']) ? $_POST['color'] : "";
$extras = isset($_POST['extras']) ? $_POST['extras'] : "";
$libro_revisiones = isset($_POST['libro_revisiones']) ? $_POST['libro_revisiones'] : "";
$estado_general = isset($_POST['estado_general']) ? $_POST['estado_general'] : "";
$observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : "";



if ($nombre == NULL | $email == NULL | $telefono == NULL | $marca_modelo == NULL | $motorizacion == NULL | $potencia == NULL |
        $fecha_1ª_matriculacion == NULL | $km_actuales == NULL | $color == NULL | $extras == NULL | $libro_revisiones == NULL |
        $estado_general == NULL | $observaciones == NULL) {
    echo '<script> alert("Error al enviar el correo, revisar los campos obligatorios");</script>';
    echo '<meta http-equiv="refresh" content="0">';
    die();
}
/////// /////// /////// /////// /////// ENVIA EL EMAIL USANDO UNA CUENTA DE HOTMAIL /////// /////// /////// /////// /////// /////// /////// 

$mensaje = "Detalles del formulario de tasación:<br>"; // aquí pones el contenido del mensaje
$mensaje .= "Nombre: " . $nombre . " <br>";
$mensaje .= "Email:  " . $email . " <br> ";
$mensaje .= "Telefono: " . $telefono . "  <br> ";
$mensaje .= "Marca y modelo: " . $marca_modelo . " <br> ";
$mensaje .= "Motorizacion: " . $motorizacion . " <br> ";
$mensaje .= "Potencia: " . $potencia . " <br> ";
$mensaje .= "Fecha 1ª matriculacion: " . $fecha_1ª_matriculacion . " <br> ";
$mensaje .= "Km actuales: " . $km_actuales . " <br> ";
$mensaje .= "Color: " . $color . " <br> ";
$mensaje .= "Extras: " . $extras . " <br> ";
$mensaje .= "Libro revisiones: " . $libro_revisiones . " <br> ";
$mensaje .= "Estado general: " . $estado_general . " <br> ";
$mensaje .= "Observaciones: " . $observaciones . " <br> ";


$para = 'gauto@gmotor2015.net';                         //dirección de destino
$nombreUsuarioHotmail = "gautomotorcorreo@hotmail.com";  //gauto@gmotor2015.net       ///Aquí pones tu dirección de email de hotmail
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

$mail->Subject = "Tasación vehículo " . $marca_modelo . "";     // título del email
$mail->Body = $mensaje;
$mail->AltBody = 'Agregar esta dirección para mostrar el email correctamente';

if (!$mail->send()) {
    echo '<script> alert("Hubo un problema al enviar el correo, vuelva a intentarlo");</script>';
}

if ($nombre !== NULL | $email !== NULL | $telefono !== NULL | $marca_modelo !== NULL | $motorizacion !== NULL | $potencia !== NULL |
        $fecha_1ª_matriculacion !== NULL | $km_actuales !== NULL | $color !== NULL | $extras !== NULL | $libro_revisiones !== NULL |
        $estado_general !== NULL) {
    echo '<script> alert("Mensaje enviado correctamente");</script>';
    echo '("<meta http-equiv="refresh" content="0">")';
    die();
}

/////// /////// /////// /////// /////// /////// /////// /////// /////// /////// /////// ////////////// /////// /////// /////// /////// /////// /////// /////// /////// /////// /////// ///////
?>