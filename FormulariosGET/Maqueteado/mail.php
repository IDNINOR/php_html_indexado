<?php 
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendMail($subject, $body, $email, $name, $html=false){

//Configuración inicial de nuestro servidor//
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
//Encriptación para que los datos viaje Seguro//
$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$phpmailer->Port = 465; //Seguridad para enviar correo//
$phpmailer->Username = 'idninor4@gmail.com';
$phpmailer->Password = 'zpvhproowburojnt';

//Añadiendo destinatarios//
$phpmailer->setFrom('from@example.com', 'Ejemplo'); //Se envia
$phpmailer->addAddress($email, $name); //Se recibe   

//Definiendo el contenido de mi email//
$phpmailer->isHTML($html); //Correos en HTML                                 //Set email format to HTML
$phpmailer->Subject = $subject;
$phpmailer->Body    = $body;

//Mandar el corrreo//
$phpmailer->send();

}


?>