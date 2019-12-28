<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## BancoApi
proyecto api rest con seguridad oatuh2 por token, los servicios deben ser consumidos con cabecera Authorization el valor "Bearer token"

## Instalacion BancoApi
1. clonar el proyecto
2. ubicarce en la raiz del proyecto y ejecutar el comando "composer install" para obtener las dependencias del proyecto
3. crear el archivo .env y configurar la conexion a la base de datos mysql
4. ejecutar el comando "php artisan migrate" para a migracion 
5. ejecutar el comando "php artisan key:generate"

# Nota: 
1. debido a que el api se encuentra con seguridad por token con la dependencia "passport" al instalr el proyecto es necesario crear las      llaves, esto se realiza con el comando "php artisan passport:install".
