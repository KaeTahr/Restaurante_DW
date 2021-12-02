<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }
    include('ConsultaBD.php');
    $id = $_GET['id']; // get id through query string
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/general.css">
    <script src="../javascript/AdminPlatillos.js"></script>
    <title>Editar Platillo</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
            <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
            <img class="w3-display-right" src="img/logo.png" alt="logo" width="60" height="60">
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
                <h2>Editando Platillo!</h2>
            </div>
            <form name="crearPlatillo" id="crearPlatillo" class="w3-container w3-card-4" enctype="multipart/form-data" action=<?php echo "\"edit_platillo.php?id=$id;\"" ?> class="form-container" method="post" autocomplete="off">
                <?php
                    $data = mysqli_fetch_array(consultaBD("SELECT * FROM platillos WHERE id = '$id'"));
                    $dia = $data['day'];
                    $nombre = $data['nombre'];
                    $descripcion = $data['descripcion'];
                    $precio = $data['precio'];
                    $visible = $data['visible'];
                    $imagen = $data['imagen_path'];
                ?>
                <p>
                    <select class="w3-select" name="dia" required>
                        <option value="" disabled>Escoge el dia</option>
                        <option value="5" <?php if($dia == 5) { echo "selected";} ?>>Viernes</option>
                        <option value="6" <?php if($dia == 6) { echo "selected";} ?>>Sabado</option>
                    </select>
                </p>
                <p>
                    <label for="nombre"> <strong>Nombre:</strong> </label>
                    <input class="w3-input w3-border" type="text" id="nombre" value ='<?php echo $nombre ?>' required name="nombre" >
                </p>
                <p>
                    <label for="descripcion"> <strong>Descripcion:</strong> </label>
                    <input class="w3-input w3-border" type="text" id="descripcion" value ='<?php echo $descripcion ?>' required name="descripcion">
                </p>
                <p>
                    <label for="precio"> <strong>Precio:</strong> </label>
                    <input class="w3-input w3-border" type="number" id="precio" value = '<?php echo     $precio ?>' required name="precio">
                </p>
                <p>
                    <select class="w3-select" name="visible" required>
                        <option value="" disabled selected>Es visible?</option>
                        <option value="1"<?php if($visible == 1) { echo "selected";} ?>>Si</option>
                        <option value="0"<?php if($visible == 0) { echo "selected";} ?>>No</option>
                    </select>
                </p>
                <p>
                    <label for="imagen"> <strong>Imagen (opcional):</strong> </label>
                    <input class="w3-input w3-border" type="file" id="imagen" name="imagen">
                </p>
                <p>
                    <button type="submit" class="w3-btn w3-padding w3-teal w3-block">Actualizar Platillo</button>
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
