# PeliculaPHP

_Este proyecto inici贸 como un formulario construido con HTML y CSS que recogia nombre e imagen de una pelicula. M谩s adelante fue tanto el avance que la cantidad de datos que teniamos los podiamos ofrecer en forma de API Restful, "Una API es una interfaz de programaci贸n de aplicaciones (del ingl茅s API: Application Programming Interface). Es un conjunto de rutinas que provee acceso a funciones de un determinado software". Una API se basa en diferentes Endpoint donde el uso de metodos GET, POST y entre otros son fundamentales, dependiendo de la accion que queramos hacer es el Endpoint que vamos a usar._

## Comenzando 馃殌

Para comenzar es necesario que clonemos este repo en direcctorio root de Apache
### Windows 10
`C:/xampp/htdocs`
### Linux
`C:/xampp/htdocs`
### MacOS
`/Applications/XAMP/htdocs`

Mira **[Instalaci贸n](https://github.com/Ezequiel-Padilla/PeliculasPHP.git#instalaci贸n-)** para conocer como desplegar el proyecto.


### Pre-requisitos 馃搵

* [Postman](https://www.postman.com/)
* [XAMPP](https://www.apachefriends.org/es/index.html)
* [PHP](https://www.php.net/downloads)
* [VsCode](https://code.visualstudio.com)

### Instalaci贸n 馃敡

Ejecutar `XAMPP` e iniciar los servicios de `Apache` y `MySQL`\
Entrar a esta url `http://localhost/phpmyadmin/`\
Crear una Base de Datos en MySQL llamada 鈥淧eliculas鈥? con la siguiente
tabla:

### Pelicula
  idPelicula INT\
  nombre VARCHAR\
  img VARCHAR\
  activo TINYINT(1)\

Entrar a esta [url](http://localhost/PeliculasPHP/) para comenzar!

## Ejecutando las pruebas 鈿欙笍

Para ejecutar las pruebas debemos ingresar a la web como se explic贸 al final del punto [Instalaci贸n](https://github.com/Ezequiel-Padilla/PeliculasPHP#instalaci贸n-)
1. Ver todas las pel铆culas (nombre e ID) activas en la Base de Datos, por ende nos dirigimos a [link](http://localhost/PeliculasPHP/) haciendo uso del metodo GET en Postman
2. Ver todos los datos de una pel铆cula (ingresando ID), por ende nos dirigimos a [link](http://localhost/PeliculasPHP/?idPelicula=1) haciendo uso del metodo GET en Postman. Si queres otra pelicula tan solo tenemos que cambiar el valor del id
3. Crear pel铆cula (nombre, im谩gen), por ende nos dirigimos a postman y haciendo uso del metodo POST ingresamos nombre e imagen de la pelicula
4. La creaci贸n la de pel铆cula debe enviar un correo de notificaci贸n (rodrigoalbano@anima.edu.uy) con los datos de la pel铆cula, una vez que completemos le paso anterior ya enviar谩 el mail

## Construido con 馃洜锔?

* [PHP](https://www.php.net) - Lenguaje de programaci贸n

## Autores 鉁掞笍

* **Ezequiel Padilla** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/ezequiel-padilla-46804a193/) - [GITHUB](https://github.com/Ezequiel-Padilla)
* **Brian Morales** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/brian-morales-sosa/) - [GITHUB](https://github.com/braimor)
* **Bruno Martinez** - *Desarrollador* - [GITHUB](https://github.com/BrunoMartinez17)

## Expresiones de Gratitud 馃巵

Desde todo el equipo de la Fundaci贸n Peliculas PHP queremos decirte "GRACIAS" por tu apoyo!
