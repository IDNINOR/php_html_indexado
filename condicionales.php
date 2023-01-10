<?php
$se_hablo_de_bruno = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <!--Esto no se debe hacer -->
    <?php
        if($se_hablo_de_bruno){
            echo "<p>Hola Mundo se hablo de Bruno </p>";
        }
        else{
            echo "<p>No se hablo de Bruno</p>";
        }
    ?>

    <!--Esto es aceptable -->
   <?php
   if($se_hablo_de_bruno){
   ?>  
   <b>Hola Mundo se hablo de Bruno </b>
   <?php
   } else{?> 
   <b>No se hablo de Bruno</b>
   <?php
   }
   ?>
    <br>
    <!--Esto es la mejor forma de hacerlo-->
    <?php if($se_hablo_de_bruno): ?>
        <i>Hola Mundo se hablo de Bruno </i>
   <?php else: ?>
        <i>Hola Mundo se hablo de Bruno </i>
   <?php endif; ?>     

</body>
</html>