<!-- Ruta: src/connections/config.php -->

<?php

// Incluir archivos de configuración
$dbConfig = require '../../config/db.php';
$envConfig = require '../../config/env.php';

// Crear la conexión a la base de datos usando los datos de db.php
try {
    $pdo = new PDO(
        "mysql:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}",
        $dbConfig['username'],
        $dbConfig['password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}

// Usar variables de entorno
if ($envConfig['debug_mode']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
?>
