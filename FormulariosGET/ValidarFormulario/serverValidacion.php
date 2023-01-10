<?php 
//Validación Flotante//
$is_float = filter_var("0.9",FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); //TRUE
//Validación Int//
$is_int = filter_var("hola",FILTER_VALIDATE_INT); //FALSE
//Validación de una dirección IP//
$is_ip = filter_Var("127.0.0.1",FILTER_VALIDATE_IP); //TRUE
//Validación de una dirección URL//
$is_url = filter_var("http://localhost.com", FILTER_VALIDATE_URL); //TRUE
//Validación de un correo//
$is_email = filter_var("a@correo.com", FILTER_VALIDATE_EMAIL); //
//Mensaje en el servidor en el navegador//
echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo "</pre>";
?>