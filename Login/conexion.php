<?php

//Unica conexion
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "123456";
 $db_name = "qrs";

//Conexion para Hostinger

// $host_db = "localhost";
// $user_db = "u676715632_aragon";
// $pass_db = "icoAragonUnam22";
// $db_name = "u676715632_ingenieria";


$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}
?>
