<?php

    include('ConsultaBD.php');

    $nombre = $_POST['Nombre'];
    $numero = $_POST['Numero'];
    $email = $_POST['Email'];
    $orden = $_POST['Orden'];
    $aclaraciones = $_POST['Aclaraciones'];

    $sql = "INSERT INTO pedidos (Nombre,Numero,Mail,Pedido,Aclaraciones) values('$nombre', $numero, '$email', '$orden', '$aclaraciones')";
    if (!consultaBD($sql)) {
        echo "Error llamar al restaurante";
    } else {
        echo "Pedido realizado correctamente";
    }
?>