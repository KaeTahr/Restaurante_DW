<?php
include('php/ConsultaBD.php');

    $id = $_GET['id']; // get id through query string
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/general.css">
    <script src="javascript/AdminPlatillos.js"></script>
    <title>Lista de Platillos</title>
</head>
<body>
    <header class="w3-display-container w3-black w3-teal w3-responsive" style="height: 120px;">
            <h1 class="w3-display-middle">Cocina de Allison Thompson</h1>
            <img class="w3-display-right" src="img/logo.png" alt="logo" width="60" height="60">
    </header>
    <nav class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off w3-top" id="myNavbar">
        <a href="portal-home.html" class="w3-bar-item w3-button w3-mobile">INICIO</a>
    </nav>
    <main class="w3-sand w3-padding-64">
    </main>
    <form name="crearPlatillo" id="crearPlatillo" enctype="multipart/form-data" action=<?php echo "\"php/edit_platillo.php?id=$id;\"" ?> class="form-container" method="post" autocomplete="off">
    <?php
        $data = mysqli_fetch_array(consultaBD("SELECT * FROM platillos WHERE id = '$id'"));
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $ingredientes = $data['ingredientes'];
        $imagen = $data['imagen_path'];
    ?>
            <h1>Editando Platillo</h1>

            <label for="nombre"><b>Nombre</b></label>
            <input type="text" name="nombre" value = <?php echo $nombre ?> required>

            <label for="descripcion"><b>Descripción</b></label>
            <input type="text" name="descripcion" value = <?php echo $descripcion ?> required>

            <label for="ingredientes"><b>Ingredientes</b></label>
            <input type="text" name="ingredientes" value = <?php echo $ingredientes ?> required>

            <label for="imagen"><b>Imagen (opcional) </b></label>
            <input type="file" name="imagen">

            <button type="submit" class="btn">Actualizar Platillo</button>
        </form>
</body>
</html>
