<!-- Ruta: config/db.php -->

<?php
// Configuración de conexión a la base de datos
return [
    'host' => 'localhost',             // Servidor de base de datos
    'database' => 'nombre_de_tu_bd',   // Nombre de la base de datos
    'username' => 'root',              // Usuario de la base de datos
    'password' => 'tu_contraseña',     // Contraseña del usuario
    'charset' => 'utf8',               // Codificación de caracteres
    'collation' => 'utf8_unicode_ci',  // Ordenación de caracteres
    'port' => 3306,                    // Puerto de conexión (por defecto para MySQL)
];
