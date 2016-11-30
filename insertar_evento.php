<?php
include ('Conectarse.php');
$conexion = Conectar();
$mascota = $_POST["mascota"];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];
$fecha_even = $_POST["fecha_even"];
$peso = $_POST["peso"];
$url_imagen = $_POST["url_imagen"];

$insertar = "INSERT INTO evento (idmascota, titulo, descripcion, fecha, peso, url_imagen) VALUES ($mascota, '$titulo', '$descripcion', '$fecha_even', $peso, '$url_imagen')";
echo $insertar;

mysqli_query($conexion, $insertar);
mysqli_close($conexion);
