<?php
$name = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];
//Validaciones con funciones de HTML y PHP//
$htmlentities = htmlentities($name); //Validar que los datos no sea HTML sino a texto 
$addslashes = addslashes($username); //Separar con (/) en parentesis o simbolos que perjudique el dato
//EXPRESIONES REGULARES//
$onlywords = preg_replace("/\d/","",$username); //Solo permite palabras y quita los numeros
$onlynumbers = preg_replace("/\D/","",$username); //Solo permite numeros y nada de letras o palabras//
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de usuario</title>
</head>
<body>
    <p>Nombre: <?php echo"".$htmlentities ?></p>
    <p>Username: <?= $username?> </p> 
    <p>Username sin numeros: <?= $onlywords?> </p> 
    <p>Username sin letras: <?= $onlynumbers?> </p> 
    <p>Email: <?= $email ?></p>
    <p>Age: <?= $age ?></p>
    <p>Age Sanatize: <?= $sanitize_int ?> </p>
</body>
</html>