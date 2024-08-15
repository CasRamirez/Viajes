<?php
include "conexion.php";
$id = $_GET['id'];
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$telefono =$_POST['telefono'];
$dpi =$_POST['dpi'];
$destino =$_POST['destino'];
$vuelo =$_POST['vuelo'];
$sql = $conn -> query("UPDATE registro SET nombre ='".$nombre."', apellido ='".$apellido."', cel='".$telefono."', dpi='".$dpi."', destino='".$destino."', vuelo='".$vuelo."' WHERE id ='".$id."'");
if($sql==1){
    header('Location:Listar.php');
}

?>