# PeliculaPHP

_Este proyecto inició como un formulario construido con HTML y CSS que recogia nombre e imagen de una pelicula. Más adelante fue tanto el avance que la cantidad de datos que teniamos los podiamos ofrecer en forma de API Restful, "Una API es una interfaz de programación de aplicaciones (del inglés API: Application Programming Interface). Es un conjunto de rutinas que provee acceso a funciones de un determinado software". Una API se basa en diferentes Endpoint donde el uso de metodos GET, POST y entre otros son fundamentales, dependiendo de la accion que queramos hacer es el Endpoint que vamos a usar._

## Comenzando 🚀

Para comenzar es necesario que clonemos este repo en direcctorio root de Apache
### Windows 10
`C:/xampp/htdocs`
### Linux
`C:/xampp/htdocs`
### MacOS
`/Applications/XAMP/htdocs`

Mira **[Instalación](https://github.com/Ezequiel-Padilla/PeliculasPHP.git#instalación-)** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

* [Postman](https://www.postman.com/)
* [XAMPP](https://www.apachefriends.org/es/index.html)
* [PHP](https://www.php.net/downloads)
* [VsCode](https://code.visualstudio.com)

### Instalación 🔧

Ejecutar `XAMPP` e iniciar los servicios de `Apache` y `MySQL`\
Entrar a esta url `http://localhost/phpmyadmin/`\
Crear una Base de Datos en MySQL llamada “Peliculas” con la siguiente
tabla:

### Pelicula
  idPelicula INT\
  nombre VARCHAR\
  img VARCHAR\
  activo TINYINT(1)\

Entrar a esta [url](http://localhost/PeliculasPHP/) para comenzar!

## Ejecutando las pruebas ⚙️

Para ejecutar las pruebas debemos ingresar a la web como se explicó al final del punto [Instalación](https://github.com/Ezequiel-Padilla/PeliculasPHP#instalación-)
1. Ver todas las películas (nombre e ID) activas en la Base de Datos, por ende nos dirigimos a [link](http://localhost/PeliculasPHP/) haciendo uso del metodo GET en Postman\
2. Ver todos los datos de una película (ingresando ID), por ende nos dirigimos a [link](http://localhost/PeliculasPHP/?idPelicula=1)haciendo uso del metodo GET en Postman. Si queres otra pelicula tan solo tenemos que cambiar el valor del id\
3. Crear película (nombre, imágen), por ende nos dirigimos a postman y haciendo uso del metodo POST ingresamos nombre e imagen de la pelicula\
4. La creación la de película debe enviar un correo de notificación (rodrigoalbano@anima.edu.uy) con los datos de la película, una vez que completemos le paso anterior ya enviará el mail

## Construido con 🛠️

* [PHP](https://www.php.net) - Lenguaje de programación

## Autores ✒️

* **Ezequiel Padilla** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/ezequiel-padilla-46804a193/) - [GITHUB](https://github.com/Ezequiel-Padilla)
* **Brian Morales** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/brian-morales-sosa/) - [GITHUB](https://github.com/BrunoMartinez17)
* **Bruno Martinez** - *Desarrollador* - [GITHUB](https://github.com/Ezequiel-Padilla)

## Expresiones de Gratitud 🎁

Desde todo el equipo de la Fundación Peliculas PHP queremos decirte "GRACIAS" por tu apoyo!
