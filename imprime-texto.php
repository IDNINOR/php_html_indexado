<?php
$nombre = "Ana Sofia";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiqueta PHP</title>
</head>
<body>
    
    <?php
        echo "<b>Hola Mama aprendiendo HTML al integrar PHP</b>";
        echo "<br>";
    ?>
    <?= 
        "<i>Otra forma de imprimir texto con PHP</i>"
    ?>
    <br>
    <h1>¡HOLA <?= $nombre ?>!</h1>

</body>
</html>