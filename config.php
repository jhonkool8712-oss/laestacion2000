<?php
// Configuración de conexión MySQL para Alwaysdata
$host = 'localhost';
$username = 'TU_USUARIO';
$password = 'TU_CONTRASENA';
$database = 'restaurant_db';

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    die('Error de conexión MySQL: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
