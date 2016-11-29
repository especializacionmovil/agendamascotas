<?php
function Conectar(){
    define('host','localhost');
    define('user','root');
    define('password','');
    define('bdname','agendamascotas');
    
    $conexion = mysqli_connect(host, user, password, bdname)
     or die ("no sep udo conectar a la BD");
     return $conexion;
    
}
