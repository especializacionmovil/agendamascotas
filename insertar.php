<?php
include ('Conectarse.php');
$conexion = Conectar();
$insertar = "";
mysqli_query($conexion, $insertar);
mysqli_close($conexion);
