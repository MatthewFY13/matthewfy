<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Mensaje enviado por: " . $name . "\r\n";
$message .= "Su e-mail es: " . $email . "\r\n";
$message .= "Mensaje: " . $_POST['message'] . "\r\n";
$message .= "Mensaje enviado el: " . date('d/m/Y', time());

$destino = 'student@matthewfy.site';
$asunto = 'Asunto del mensaje';

mail($destino, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>