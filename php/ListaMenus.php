<?php
    include('ConsultaBD.php');

    $sql = "SELECT id, day, nombre, descripcion, precio FROM platillos ORDER BY day";
    $resultado = consultaBD($sql);
    if ($resultado == FALSE) {
        echo "Error no se pudo conectar a la base de datos";
    } else {
        $menuData = array();
        while($row = mysqli_fetch_array($resultado)) {
            $menuData[] = $row;
            // $id = $row['id'];
            // $day = $row['day'];
            // $nombre = $row['nombre'];
            // $descripcion = $row['descripcion'];
            // $precio = number_format($row['precio'], 2, '.', '');
            // echo "$id, $day, $nombre, $descripcion, $precio";
        }
        echo json_encode($menuData);
    }
?>