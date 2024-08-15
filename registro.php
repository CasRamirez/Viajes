<?php
include "conexion.php";
$nombre =$_POST['nombre'];
$apellido =$_POST['apellido'];
$telefono =$_POST['telefono'];
$dpi =$_POST['dpi'];
$destino =$_POST['destino'];
$sql= $conn -> query("INSERT INTO registro(nombre,apellido,cel,dpi,destino) VALUES('$nombre','$apellido', '$telefono','$dpi', '$destino')");
header('Location:Listar.php');
?>