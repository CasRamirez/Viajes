<?php
include "conexion.php";
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$telefono =$_POST['telefono'];
$dpi =$_POST['dpi'];
$destino =$_POST['destino'];
$vuelo =$_POST['vuelo'];
$sql= $conn -> query("INSERT INTO registro(nombre,apellido,cel,dpi,destino,vuelo) VALUES('$nombre','$apellido', '$telefono','$dpi', '$destino', '$vuelo')");
header('Location:Listar.php');
?>