<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');

    $day = $_POST['dia'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $sql = "INSERT INTO platillos (day, nombre, descripcion, precio, imagen_path, visible) VALUES ($day, '$nombre', '$descripcion', $precio, 'NULL', 1)";
    if (!consultaBD($sql)) {
        echo "Error no se pudo crear el platillo correctamente";
    } else {
        echo "Platillo creado correctamente";
    }
?>