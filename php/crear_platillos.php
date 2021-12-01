<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
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
    <script src="../javascript/CrearPlatillo.js"></script>
    <title>Crear Platillo</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
        <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
        <img class="w3-display-right" src="../img/logo.png" alt="logo" width="60" height="60">
    </header>
    
    <nav class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off w3-top" id="myNavbar">
        <a href="lista_pedidos.php" class="w3-bar-item w3-button w3-mobile">LISTA DE PEDIDOS</a>
        <a href="ver_platillos.php" class="w3-bar-item w3-button w3-mobile">LISTA PLATILLOS</a>
        <a href="crear_platillos.php" class="w3-bar-item w3-button w3-mobile">CREAR PLATILLO</a>
        <a href="editar_platillo.php" class="w3-bar-item w3-button w3-mobile">EDITAR PLATILLO</a>
        <a href="borrar_platillo.php" class="w3-bar-item w3-button w3-mobile">ELIMINAR PLATILLO</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-right">LOGOUT</a>
    </nav>

    <main>
        <div class="w3-container w3-padding-64 w3-sand w3-grayscale-min w3-xlarge">
        <div class="w3-content">
            <div class="w3-container w3-teal w3-center" >
                <h2>Crear Platillo</h2>
            </div>
            <form name="crearPlatillo" id="crearPlatillo" class="w3-container w3-card-4">
                <p class="w3-container w3-center">
                    <input class="w3-radio" type="radio" name="dia" value="5" checked>
                    <label>Viernes</label>

                    <input class="w3-radio w3-margin-left" type="radio" name="dia" value="6">
                    <label>Sabado</label>
                </p>
                <p>
                    <label for="nombre"> <strong>Nombre:</strong> </label>
                    <input class="w3-input w3-border" type="text" id="nombre" placeholder="nombre" required name="nombre">
                </p>
                <p>
                    <label for="descripcion"> <strong>Descripcion:</strong> </label>
                    <input class="w3-input w3-border" type="text" id="descripcion" placeholder="descripcion" required name="descripcion">
                </p>
                <p>
                    <label for="precio"> <strong>Precio:</strong> </label>
                    <input class="w3-input w3-border" type="number" id="precio" placeholder="$100.00" required name="precio">
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
