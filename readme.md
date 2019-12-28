<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## BancoApi
proyecto api rest con seguridad oatuh2 por token, los servicios deben ser consumidos con cabecera Authorization el valor "Bearer token"

## Instalacion BancoApi
1. Clonar el proyecto
2. Ubicarce en la raiz del proyecto y ejecutar el comando "composer install" para obtener las dependencias del proyecto
3. Crear el archivo .env y configurar la conexion a la base de datos mysql
4. Ejecutar el comando "php artisan migrate" para a migracion 
5. Ejecutar el comando "php artisan key:generate"
6. Ejecutar elcomando "php artisan serve" el cual ejecuta el api en un sevidor de laravel que ejecuta por la url http://localhost:8000/api/*
7. En la carpeta raiz del repositorio BancoWeb se encuentra el arvivo bancoApi.postman_collection.json el cual puede ser importado en el aplicativo POSTMAN y tener una coleccion de endpoints del aplicativo.

# Nota: 
1. debido a que el api se encuentra con seguridad por token con la dependencia "passport" al instalr el proyecto es necesario crear las      llaves, esto se realiza con el comando "php artisan passport:install".
