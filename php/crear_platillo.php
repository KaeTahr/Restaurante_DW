<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="../javascript/AdminPlatillos.js"></script>
    <title>Crear platillo</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
            <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
            <img class="w3-display-right" src="../img/logo.png" alt="logo" width="60" height="60">
    </header>
    <nav class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off w3-top" id="myNavbar">
        <a href="lista_pedidos.php" class="w3-bar-item w3-button w3-mobile">LISTA DE PEDIDOS</a>
        <a href="modificar_platillos.php" class="w3-bar-item w3-button w3-mobile">MODIFICAR PLATILLO</a>
        <a href="crear_platillo.php" class="w3-bar-item w3-button w3-mobile">CREAR PLATILLO</a>
        <a href="logout.php" class="w3-bar-item w3-button w3-mobile w3-right">LOGOUT</a>
    </nav>
    <main>
        <div class="w3-container w3-padding-64 w3-sand w3-grayscale-min w3-xlarge">
        <div class="w3-content">
            <div class="w3-container w3-teal w3-center" >
                <h2>Platillo Nuevo!</h2>
            </div>
            <form name="crearPlatillo" id="crearPlatillo" class="w3-container w3-card-4" enctype="multipart/form-data" action="CrearPlatillo.php" class="form-container" method="post" autocomplete="off">
                <p>
                    <select class="w3-select" name="dia" required>
                        <option value="" disabled selected>Escoge el dia</option>
                        <option value="5">Viernes</option>
                        <option value="6">Sabado</option>
                    </select>
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
                    <select class="w3-select" name="visible" required>
                        <option value="" disabled selected>Es visible?</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>
                    </select>
                </p>
                <p>
                    <label for="imagen"> <strong>Imagen:</strong> </label>
                    <input class="w3-input w3-border" type="file" id="imagen" required name="imagen">
                </p>
                <p>
                    <button type="submit" class="w3-btn w3-padding w3-teal w3-block">Crear Platillo</button>
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