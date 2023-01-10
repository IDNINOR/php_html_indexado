<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <form action="serverInput.php" method="POST" enctype="multipart/form-data">
        <!-- Input simple -->
        <!-- <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> -->

        <!-- Input Arreglos -->
        <!-- <label>Personas:</label>
        <input type = "text" name="personas[]">
        <input type = "text" name="personas[]">
        <input type = "text" name="personas[]"> -->

        <!-- Input arreglos asociativos -->
        <!-- <label>Nombre de la persona</label>
        <input type="text" name=persona[nombre]>
        <label>Correo de la persona</label>
        <input type="email" name=persona[correo]>
        <label>Edad de la persona</label>
        <input type="number" name=persona[telefono]> -->

        <!-- Input Checkbox -->
        <!-- <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Clickeado">
        <input type="checkbox" name="list3"> -->

        <!-- Input Radio -->
        <!-- <label for="mexico">Mexico</label>
        <input type="radio" name="pais" value="Mexico" id="mexico">
        <label for="colombia">Colombia</label>
        <input type="radio" name="pais" value="Colombia" id="colombia">
        <label for="peru">Peru</label>
        <input type="radio" name="pais" value="Peru" id="peru"> -->

        <!-- Input de multiples archivos -->
        <label for="galeria">Carga tus imagenes</label>
        <input type="file" multiple name="galeria[]" id="galeria">

        <button type="submit">Mandar Formulario</button>
    </form>
</body>
</html>