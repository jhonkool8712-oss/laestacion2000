<?php
// Configuración de conexión MySQL para Alwaysdata
// En Alwaysdata, usa el hostname completo: mysql-usuario.alwaysdata.net
$host = 'mysql-jhonatan1.alwaysdata.net';
$username = 'jhonathan1';
$password = 'clase123';
$database = 'restaurant_db';

$mysqli = new mysqli($host, $username, $password, $database);
if ($mysqli->connect_errno) {
    die('Error de conexión MySQL: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
