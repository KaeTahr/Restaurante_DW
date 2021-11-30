<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');

    $sql = "SELECT id, day, nombre, descripcion, precio, imagen_path, visible FROM platillos ORDER BY day";
    $resultado = consultaBD($sql);
    if ($resultado == FALSE) {
        echo "Error no se pudo conectar a la base de datos";
    } else {
        while($row = mysqli_fetch_array($resultado)) {
            $id = $row['id'];
            $day = $row['day'];
            if ($day == 5) {
                $day = "Viernes";
            } else {
                $day = "Sabado";
            }
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $imagen_path = $row['imagen_path'];
            $visible = $row['visible'];
            echo "<tr><td>$id</td><td>$day</td><td>$nombre</td><td>$descripcion</td><td>$precio</td><td>$imagen_path</td><td>$visible</td></tr>";
        }
    }
?>