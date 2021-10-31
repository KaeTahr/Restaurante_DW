<?php

include('ConsultaBD.php');


extract($_POST);
$fileType = $_FILES["imagen"]["type"];
$fileSize = $_FILES["imagen"]["size"];


$id = $_GET['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$ingredientes = $_POST['ingredientes'];

if ($fileSize == 0 )
{
    $sql = "UPDATE platillos SET nombre = \"$nombre\", descripcion = \"$descripcion\", ingredientes = \"$ingredientes\" WHERE id = $id;";
}

else
{
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
			echo "Problem could not move file to destination. Please check again later. <a href=\"../index.php\">Please go back.</a>";
			exit;
		}
	} else {
		echo "Problem: Possible file upload attack. Filename: ";
		echo $_FILES["imagen"]["name"];
		exit;
	}

	$platillo_image = $upFile;
    $upFile = substr($platillo_image, 3);
    $sql = "UPDATE platillos SET nombre = \"$nombre\", descripcion = \"$descripcion\", ingredientes = \"$ingredientes\", imagen_path = \"$upFile\" WHERE id = $id;";
    $old_image = mysqli_fetch_array(consultaBD("SELECT imagen_path FROM platillos WHERE id = '$id'"))['imagen_path'];
    $old_image = "../".$old_image;
    if (!unlink($old_image)) { 
        echo ("$old_image cannot be deleted due to an error<br>"); 

        if (!unlink($platillo_image)) { 
            echo ("$platillo_image cannot be deleted due to an error"); 
            exit;
        } 
        exit;
    } 
}

consultaBD($sql);
echo "Cambio realizado";
echo($sql);

?>