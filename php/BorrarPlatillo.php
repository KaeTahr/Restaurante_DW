<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');

    $id_platillo = $_POST['id_platillo'];
    $sql = "DELETE FROM platillos WHERE id = $id_platillo";
    if (!consultaBD($sql)) {
        echo "Error no se pudo eliminar el platillo";
    } else {
        echo "Platillo eliminado";
    }
?>