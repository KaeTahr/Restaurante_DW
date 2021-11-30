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
        <div class="w3-container w3-center w3-padding-16 w3-sand">
            <h1 class="w3-jumbo">Lista de Platillos</h1>
        </div>
        <div class="w3-responsive w3-padding-64">
            <table class="w3-table w3-bordered w3-xlarge w3-hoverable w3-centered w3-sand">
                <thead>
                    <tr class="w3-black"> 
                        <th style= "display: none;">id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Ingredientes</th>
                        <th>Imagen</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="TableContentPlatillos">
                    <?php
                    include("php/ConsultaBD.php");

                    $consulta = "SELECT * FROM platillos;";
                    $resultado = consultaBD($consulta);

                    if ($resultado == FALSE)
                        echo "fallo de conexión";
                    $n=1;
                    while ($row = mysqli_fetch_array($resultado))
                    {
                        $Id[$n] = $row['id'];
                        $Nombre[$n] = $row['nombre'];
                        $Descripcion[$n] = $row['descripcion'];
                        $Ingredientes[$n] = $row['ingredientes'];
                        $Imagen_path[$n] = $row['imagen_path'];

                    ?>
                        <tr>
                            <td style="display: none;"><?php echo $Id[$n] ?> </td>
                            <td><?php echo $Nombre[$n] ?></td>
                            <td><?php echo $Descripcion[$n] ?></td>
                            <td><?php echo $Ingredientes[$n] ?></td>
                            <td><img src="<?php echo $Imagen_path[$n] ?>" style="max-width:15%;"></td>
                            <td><a href="edit_platillo_form.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                            <td><a href="php/delete_platillo.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div id="boton_crear">
            <button class="boton_crear" onclick="openForm()">Añadir platillo</button>
        </div>

        <div class="form-popup" id="forma_platillo">
            <form name="crearPlatillo" id="crearPlatillo" enctype="multipart/form-data" action="php/CrearPlatillo.php" class="form-container" method="post" autocomplete="off">
                <h1>Platillo Nuevo</h1>

                <label for="nombre"><b>Nombre</b></label>
                <input type="text" name="nombre" required>

                <label for="descripcion"><b>Descripción</b></label>
                <input type="text" name="descripcion" required>

                <label for="ingredientes"><b>Ingredientes</b></label>
                <input type="text" name="ingredientes" required>

                <label for="imagen"><b>Imagen</b></label>
                <input type="file" name="imagen" required>

                <button type="submit" class="btn">Crear Platillo</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

    </main>
    <footer class="w3-container w3-teal w3-black w3-center">
        <a href="https://www.facebook.com/La-Cocina-de-Allison-Thompson-102969278285943" class="fa fa-facebook w3-xxxlarge w3-padding-16"></a>
    </footer>
</body>
</html>