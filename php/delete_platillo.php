<?php
include('ConsultaBD.php');

$id = $_GET['id']; // get id through query string
$image = mysqli_fetch_array(consultaBD("SELECT imagen_path FROM platillos WHERE id = '$id'"))['imagen_path'];
$sql= "DELETE from platillos where id = '$id'";
$del = consultaBD($sql);

if($del)
{
    if (!unlink($image)) { 
        echo ("$image cannot be deleted due to an error"); 
        exit;
    } 
    header("location:../modificar_platillos.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>