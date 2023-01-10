<?php
/*
echo "<pre>";
var_dump($_FILES);
echo "</pre>";
*/

$image=$_FILES["image"]["name"];
$imageB = $_FILES["image"]["tmp_name"];
$ruta_a_subir = "images/$image";

move_uploaded_file($imageB, $ruta_a_subir);
echo $image;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?=$ruta_a_subir ?>" alt="<?=$imageB ?>">
</body>
</html>