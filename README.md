# BackendPruebaTecnica
*Prueba Técnica para aplicación a ETraining*

Este backend desarrollado en Laravel consiste de una REST API con un CRUD básico en donde se expone una tabla (CURSOS) con los siguientes campos: id, nombre, fecha_inicio y fecha_fin. Dichas migraciones fueron migradas a una base de datos MySQL.

***Prueba local***
* Para realizar el testeo de este backend es necesario la instalación de los siguientes modulos: composer, php, laravel installer, mysql y sus complementos.
* Con ello, es necesario la creación de una base de datos MySQL (Schema) y su respectiva conexión mediante las variables de entorno correspondientes y la migración de las tablas con sus semillas (php artisan migrate --seed)
* Finalmente será necesario la construcción de la aplicación de forma local (php artisan --serve)
* Si se desea consultar de los servicios de la API allí descrita se puede hacer mediante Postman con la siguiente ruta base:
*http://127.0.0.1:8000/api/v1/cursos

**Despliegue**
* Para hacer despliegue del backend es necesario hacer el respectivo despliegue de la base de datos, para lo cual se puede cualquier cloud provider que soporte RDBM, como Google Cloud Platform.
* Después de realizar dicho despliegue, es posible desplegar el backend por medio de Heroku, dado que soporta backend desarrollado en PHP, servicio que permite conectar a nuestra base de datos mediante su interfaz y seleccionar el proyecto mediante GitHub.
