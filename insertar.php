<?php
include ('Conectarse.php');
$conexion = Conectar();
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$raza = $_POST["raza"];
$fecha_nac = $_POST["fecha_nac"];
$descripcion = $_POST["descripcion"];
$urlimagen = $_POST["urlimagen"];

print_r($_POST);

$insertar = "INSERT INTO mascota (nombre, tipo, raza, fecha_nac, descripcion, urlimagen) VALUES('$nombre','$tipo','$raza','$fecha_nac','$descripcion','$urlimagen')";
mysqli_query($conexion, $insertar);
mysqli_close($conexion);
