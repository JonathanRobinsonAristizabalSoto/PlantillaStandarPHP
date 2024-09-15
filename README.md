# Título
Plantilla y Estructura Estándar para Proyectos PHP

# Resumen
Esta plantilla proporciona una estructura estándar para proyectos PHP, diseñada para promover una separación clara de responsabilidades y seguir buenas prácticas de desarrollo. La organización propuesta facilita la gestión del código, la configuración, y las pruebas, garantizando una base sólida para el desarrollo y mantenimiento efectivos del proyecto.

## Estructura del Proyecto

```plaintext
assets/                                      # Carpeta de archivos estáticos utilizados en la aplicación
├── css/                                     # Carpeta Hojas de estilo CSS
|   └── style.css                            # Archivo de estilos css
├── docs/                                    # Carpeta de documentos personalizados o de terceros
├── fonts/                                   # Carpeta de Fuentes personalizadas o de terceros
├── images/                                  # Carpeta de imagenes usadas en la aplicación
├── js/                                      # Carpeta de archivos JavaScript para la lógica del cliente
│   ├── jquery.min.js                        # Archivo de Biblioteca jQuery
│   └── sweetalert2.js                       # Archivo de Biblioteca SweetAlert2 para mostrar alertas
│
|
config/                                      # Carpeta de Archivos de configuración
|   ├── db.php                               # Archivo Configuración de la base de datos
|   └── env.php                              # Archivo Variables de entorno y configuración global
|
DB/                                          # Carpeta de Base de datos semilla y scripts relacionados (recomendacion ignorar su contenido en produccion)
| └── nombre_de_base.sql                     # Archivo con el esquema semilla de la base de datos
|
logs/                                        # Carpeta de Archivos de registro para errores y eventos
├── app.log                                  # Archivo de Registro de errores y eventos de la aplicación
|
src/                                         # Carpeta de Código fuente PHP
├── connections/                             # Carpeta de Conexiones a la base de datos
│   └── config.php                           # Archivo de Configuración de conexión a la base de datos
├── includes/                                # Carpeta de Archivos comunes para reusabilidad
│   ├── footer.php                           # Archivo Pie de página común para todas las páginas
│   └── header.php                           # Archivo Cabecera común para todas las páginas
├── pages/                                   # Carpeta de Páginas PHP para las funcionalidades principales
│   ├── About/                               # Carpeta de Página sobre la aplicación o empresa
│   │   └── about.php                        # Archivo con Información sobre la aplicación o empresa
│   ├── Auth/                                # Carpeta de Páginas relacionadas con la autenticación y gestión de usuarios
│   │   ├── login.php                        # Archivo Página de inicio de sesión
│   │   ├── password_recovery.php            # Archivo Página para recuperación de contraseña
│   │   ├── register.php                     # Archivo Página de registro de usuarios
│   ├── Contact/                             # Carpeta de Página de contacto para los usuarios
│   │   └── contact.php                      # Archivo de Formulario o información de contacto
│   ├── Error/                               # Carpeta Páginas de error
│   │   └── 404.php                          # Archivo de Página de error 404 para páginas no encontradas
│   ├── Home/                                # Carpeta de Páginas relacionadas con la vista principal
│   │   └── home.php                         # Archivo de Página principal o dashboard
|   └── Users/                               # Carpeta de Páginas relacionadas con usuarios
|       └── users.php                        # Archivo de Página Usuarios
tests/                                       # Carpeta para pruebas unitarias y funcionales
├── unit/                                    # Carpeta de Pruebas unitarias
│   └── ExampleTest.php                      # Archivo Ejemplo de prueba unitaria
├── functional/                              # Carpeta de Pruebas funcionales
│   └── UserLoginTest.php                    # Archivo Ejemplo de prueba funcional
|
.gitignore                                   # Archivo para evitar que ciertas carpetas o archivos se suban a nuestro repositorio. ejemplo (DB y logs)
README.md                                    # Archivo de descripción del proyecto
index.php                                    # Punto de entrada principal de la aplicación

