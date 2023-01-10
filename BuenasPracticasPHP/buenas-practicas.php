<?php 
    $tabla_del_9 = [];

    for($i=1; $i<=10; $i++){
        $resultado = 9*$i;
        $texto = "9 x $i : $resultado";
        array_push($tabla_del_9, $texto);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buenas practicas PHP</title>
</head>
<body>
    <!--Se debe de hacer porque es muy adecuado-->
    <h1>Tabla de Multiplicar del 9 (^*^)</h1>
    <ul>
        <?php foreach($tabla_del_9 as $resultado): ?>
            <li><?=$resultado?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>