# CRUD de Productos Laravel

Aplicación web desarrollada en PHP con Laravel para la gestión de productos

## Requisitos y dependencias

- Software requerido PHP >= 8.1
- Composer >= 2.0
- MySQL >= 5.7 o MariaDB >= 10.3
- Node.js >= 14 (opcional, para recursos)
- Extensiones PHP requeridas Bcmath
- Ctype
- JSON
- Mbstring
- OpenSSL
- PDO
- Tokenizador
- XML

## Pasos para instalar dependencias (composer install) 

1. Clonar o descargar el proyecto bash 
   git clone https://github.com/evelynLizeth/CrudLaravelPHP 
   
2. En la terminal (CMD, PowerShell o Git Bash en Windows), - Ubicarse en la carpeta del proyecto

3. Ejecutar la instalación de dependencias para descargar las librerías 
   composer install 

4. Configura el archivo `.env` según tu entorno.

5. Generar la clave de aplicación bash
   php artisan key:generate

## Pasos para ejecutar (php artisan serve).

1. Ubícate en la carpeta raíz del proyecto.

2. Verifica que las dependencias estén instaladas 
   composer install

3. Configura el archivo `.env` con tus credenciales de base de datos.
   cp .env.example .env

4. Genera la clave de aplicación 
   php artisan key:generate

5. Ejecuta el servidor local con 
   php artisan serve

6. Abre en el navegador la 
   URL principal: http://localhost:8000
   Gestión de productos: http://localhost:8000/products