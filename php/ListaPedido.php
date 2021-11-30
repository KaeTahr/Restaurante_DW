<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');

    $sql = "SELECT Id, Fecha, Nombre, Numero, Mail, Pedido, Aclaraciones FROM pedidos ORDER BY FECHA DESC";
    $resultado = consultaBD($sql);
    if ($resultado == FALSE) {
        echo "Error";
    } else {
        while($row = mysqli_fetch_array($resultado)) {
            $id = $row['Id'];
            $Fecha = $row['Fecha'];
            $Nombre = $row['Nombre'];
            $Numero = $row['Numero'];
            $Mail = $row['Mail'];
            $Pedido = $row['Pedido'];
            $Aclaraciones = $row['Aclaraciones'];
            echo "<tr><td>$id</td><td>$Fecha</td><td>$Nombre</td><td>$Numero</td><td>$Mail</td><td>$Pedido</td><td>$Aclaraciones</td></tr>";
        }
    }
?>