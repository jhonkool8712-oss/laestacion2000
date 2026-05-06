<?php
// Script para inicializar la base de datos
require 'config.php';

$sql = file_get_contents('db.sql');

// Separar las consultas por punto y coma
$queries = array_filter(array_map('trim', explode(';', $sql)));

// Ejecutar cada consulta
foreach ($queries as $query) {
    if (!empty($query) && !preg_match('/^--/', $query)) {
        if ($mysqli->query($query) === TRUE) {
            echo "Consulta ejecutada correctamente: " . substr($query, 0, 50) . "...<br>";
        } else {
            echo "Error en consulta: " . $mysqli->error . "<br>";
        }
    }
}

echo "<br>Base de datos inicializada. <a href='menu.php'>Ver menú</a>";
?>