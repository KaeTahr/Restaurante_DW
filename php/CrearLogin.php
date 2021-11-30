<?php
    include('ConsultaBD.php');
    session_start();
    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $sql = "SELECT username, password FROM users WHERE username = '$username' and password = '$password'";
    $resultado = consultaBD($sql);
    if ($resultado == FALSE) {
        echo "Error al conectar a la base de datos";
    } else {
        $count=mysqli_num_rows($resultado);
        if($count==1) {
            $_SESSION['login_user']= $username;
            echo "Sesion correcta";
        } else {
            echo "Sesion incorrecta";
        }
    }
?>