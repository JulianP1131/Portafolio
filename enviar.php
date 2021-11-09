<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$subject = $_POST['subject'];
$text = $_POST['text'];

$header = 'From: ' . $mail . " \r\n";
$header = "X-Mailer: PHP/" . phpversion() . " \r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message = "Su e-mail es: " . $mail . " \r\n"
$message = "El asunto del mensaje es: " . $subject . " \r\n";
$message = "Mensaje: " . $_POST['text'] . " \r\n";
$message = "Enviado el: " . date('d/m/Y', time());

$para = 'xxxxxxxxxxxxxxxxx@gmail.com';
$asunto = 'Asunto del mensaje';

mail($para, $asunto, utf8_decode($text), $header);

header("Location:index.html";)
?>