## Syllabus
# Guía de instalación y configuración
# Requerimientos: 

    Arquitectura x86_64 (i386 i686 no soportado)
    Apache o nginx
    php >= 7.0
    composer
    mysql
    org

# Instalación: 

<p>Configurar la base de datos mysql corriendo el script syllabus.sql.</p>

<p>Syllabus se encuentra alojado en el Repositorio privado de la cuenta JCTec en Github: https://github.com/JCTec/Syllabus.git</p>

    $ git clone https://github.com/JCTec/Syllabus.git

    $ cd Syllabus

    $ composer update

<p>mongodbEditar el archivo .env y agregando la siguientes variables de entorno.</p>

    APP_ENV=local 
    APP_DEBUG=true 
    APP_URL=http://url.servidor

    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=syllabus
    DB_USERNAME=
    DB_PASSWORD=

<p>Editar el archivo config/database.php agregando las credenciales de la base de datos de mysql en:</p>


    'mysql' => [
       'driver' => 'mysql',
       'host' => '127.0.0.1',
       'port' => '3308',
       'database' => 'syllabus',
       'username' => 'root',
       'password' => '',
       'unix_socket' => env('DB_SOCKET', ''),
       'charset' => 'utf8mb4',
       'collation' => 'utf8mb4_unicode_ci',
       'prefix' => '',
       'strict' => true,
       'engine' => null,
    ],
<p>Por ultimo en la consola, se corren los siguientes comandos:</p>

    $ php artisan migrate

    $ php artisan key:generate 

    $ sudo chown -R www-data:www-data /ruta/Syllabus

    $ sudo chmod -R 755 /ruta/Syllabus


