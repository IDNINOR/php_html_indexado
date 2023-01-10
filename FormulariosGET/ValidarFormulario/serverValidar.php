<?php
// if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
//     echo "Hola ".$_POST['nombre']."!";
// }else{
//     echo "No mandaste nada o envio vacio";
// }
if(isset($_POST["btnformulario"])){
    echo "Todo el formulario se envio";
}else{
    echo "No se envio todo de formulario";
}
?>