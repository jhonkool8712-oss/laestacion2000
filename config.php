<?php
// Configuración de conexión MySQL para Alwaysdata
$host = 'jhonatan1_laestacion2000';
$username = 'jhonathan1';
$password = 'clase123';
$database = 'laestacion2000_db';

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    die('Error de conexión MySQL: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
