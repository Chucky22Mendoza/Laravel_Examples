# Projecto de Laravel - Aplicación de notas

## Requerimientos

1.- PHP >= 7.2.0

2.- MySQL || PHPMyadmin

3.- restore test_laravel.sql

4.- Editor de texto

5.- Uso de terminal de comandos

## Instalación

### Composer:

1.-Se instala la paquetería composer, descargada desde la siguiente liga:

https://getcomposer.org/download/

2.-Guardar el archivo .exe que te genera

3.-Dar next en la primera pantalla de instalación

4.-Aceptar los terminos y condiciones y dar “next”

5.-Asignar la ubicación del archivo y dar click en “Next”

6.-Custom setup, dejar la instalación predeterminada, y dar click en “next”

7.-Una vez terminada la instalación dar click en “finish”

8.-Checar que se haya instalado correctamente composer:

```cmd

C:\xampp\htdocs\laravel\curso_laravel> composer --version
Composer version 1.8.6 2019-06-11 15:03:05

```

9.-Extraer el archivo .rar/.zip proyecto_laravel en el directorio donde se desea correr el proyecto

10.-Abrir la carpeta con tu editor de texto, en este caso yo utilizo visual studio code

11.-Asignar las credenciales de acceso requeridas para acceder a la base de datos en el archivo .env

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_laravel
DB_USERNAME=root
DB_PASSWORD=1522
```

12.-Checar la versión de php artisan esté instalada y sea la versión mínima estable 5.8.29

```cmd

C:\xampp\htdocs\laravel\curso_laravel> php artisan --version
Laravel Framework 5.8.29

```

13.-Iniciar el servidor de laravel con el comando “php artisan serve”

```cmd

PS C:\xampp\htdocs\laravel\curso_laravel> php artisan serve
Laravel development server started: <http://127.0.0.1:8000>

```

14.-Listo, el servidor se encuentra escuchando en la url local:

```cmd

http://127.0.0.1:8000

```

### Este es un proyecto ambientado al ambiente del desarrollador y para el aprendizaje de Laravel como práctica
