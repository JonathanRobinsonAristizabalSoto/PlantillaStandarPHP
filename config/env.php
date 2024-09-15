<!-- Ruta: config/env.php -->

<?php
// Configuraciones globales y variables de entorno
return [
    'app_name' => 'Mi Aplicación',            // Nombre de la aplicación
    'base_url' => 'http://localhost',         // URL base del proyecto
    'debug_mode' => true,                     // Modo de depuración (true en desarrollo, false en producción)
    'api_key' => 'TU_CLAVE_API',              // Clave API de algún servicio externo
    'environment' => 'development',           // Tipo de entorno: development, production
    'timezone' => 'America/Bogota',           // Zona horaria de la aplicación
];
