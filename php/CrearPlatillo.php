<?php
    session_start();
    // Si no hay sesion iniciada regresar al login.
    if(empty($_SESSION['login_user'])) {
        header('Location: login.php');
    }

    include('ConsultaBD.php');

    extract($_POST);
    
    $fileType = $_FILES["imagen"]["type"];
    $fileSize = $_FILES["imagen"]["size"];


    if($fileSize/1024 > "2048") {
		echo "Filesize is not correct it should equal to 2 MB or less than 2 MB.";
		exit();

    }
	if(
		$fileType != "image/png" &&
		$fileType != "image/gif" &&
		$fileType != "image/jpg" &&
		$fileType != "image/jpeg" 
	) {
			echo "Porfavor asegurarse que la imagen sea Jpeg, Gif o PNG";
			exit();
	 } //file type checking ends here.

	$upFile = "../uploads/".date("Y_m_d_H_i_s").$_FILES["imagen"]["name"];

	if(is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
		if(!move_uploaded_file($_FILES["imagen"]["tmp_name"], $upFile)) {
			echo "Problem could not move file to destination. Please check again later. <a href=\"modificar_platillos.php\">Please go back.</a>";
			exit;
		}
	} else {
		echo "Problem: Possible file upload attack. Filename: ";
		echo $_FILES["imagen"]["name"];
		exit;
	}

	$platillo_image = $upFile;
    $upFile = substr($platillo_image, 3);
    $dia = $_POST["dia"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $visible = $_POST["visible"];

    $sql = "INSERT INTO platillos (day, nombre, descripcion, precio, visible, imagen_path)
    VALUES ($dia, '$nombre', '$descripcion', '$precio', $visible, '$upFile');";

    if (!consultaBD($sql)) {
        echo "Error en crear platillo;<br>";
        if (!unlink($platillo_image)) { 
            echo ("$platillo_image cannot be deleted due to an error"); 
        } 
        else { 
            echo ("No se registraron datos."); 
        } 
          
    }
    else {
        echo "Platillo agregado correctamente";
        header("location:modificar_platillos.php");
    }

?> 