<?php
    session_start();
    if(!empty($_SESSION['login_user'])) {
        header('Location: lista_pedidos.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../javascript/login.js"></script>
    <title>Login</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
        <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
        <img class="w3-display-right" src="../img/logo.png" alt="logo" width="60" height="60">
    </header>
    
    <nav class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off w3-top" id="myNavbar">
        <a href="../index.html" class="w3-bar-item w3-button w3-mobile">INICIO</a>
        <a href="../menu_dia.html" class="w3-bar-item w3-button w3-mobile">MENU DEL DIA</a>
        <a href="../menu_semana.html" class="w3-bar-item w3-button w3-mobile">MENU DE LA SEMANA</a>
        <a href="../crear_pedido.html" class="w3-bar-item w3-button w3-mobile">CREAR PEDIDO</a>
        <a href="login.php" class="w3-bar-item w3-button w3-mobile w3-right">LOGIN</a>
    </nav>

    <main>
        <div class="w3-container w3-padding-64 w3-sand w3-grayscale-min w3-xlarge">
        <div class="w3-content">
            <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Log In</h1>
            <div class="w3-container w3-teal w3-center" >
                <h2>Ingrese sus datos</h2>
            </div>
            <form name="login" id="login" class="w3-container w3-card-4">
                <p>
                    <label for="Username"> <strong>Username:</strong> </label>
                    <input class="w3-input w3-border" type="text" id="Username" placeholder="Username" required name="Username">
                </p>
                <p>
                    <label for="Password"> <strong>Password:</strong> </label>
                    <input class="w3-input w3-border" type="password" id="Password" placeholder="Password" required name="Password">
                </p>
                <p>
                    <button type="button" id="boton" class="w3-btn w3-padding w3-teal w3-block"> <strong>Enviar!</strong></button>
                </p>
            </form>
        </div>
        </div>
    </main>

    <footer class="w3-container w3-teal w3-black w3-center">
        <a href="https://www.facebook.com/La-Cocina-de-Allison-Thompson-102969278285943" class="fa fa-facebook w3-xxxlarge w3-padding-16"></a>
    </footer>
</body>
</html>