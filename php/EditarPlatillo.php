<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');

    $id_platillo = $_POST['id_platillo'];  
    $day = $_POST['dia'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $sql = "UPDATE platillos SET day = $day, nombre = '$nombre', descripcion = '$descripcion', precio = $precio WHERE id = $id_platillo";
    if (!consultaBD($sql)) {
        echo "Error no se pudo editar el platillo correctamente";
    } else {
        echo "Platillo editado correctamente";
    }
?>