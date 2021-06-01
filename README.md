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
  \

Entrar a esta [url](http://localhost/PeliculasPHP/) para comenzar!

## Ejecutando las pruebas ⚙️

Para ejecutar las pruebas debemos ingresar a la web como se explicó al final del punto [Instalación](https://github.com/DosSantosBrunoo/agenda_covid/blob/README/README.md#instalación-)
1. Agendar a alguien en nuestra tabla `agenda`, por ende nos dirigimos a [Agendar](http://localhost/agenda_covid/view/agendarme.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `usuario`) e ingresarle telefono al usuario.
2. Borrar a alguien de nuestra tabla `agenda`, por ende nos dirigimos a [Borrar](http://localhost/agenda_covid/view/borrar.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `agenda`)
3. Consultar las dosis de un usuario desde la tabla `agenda`, por ende nos dirigimos a [Consultar](http://localhost/agenda_covid/view/consultar_1.php)\
Ingresar CI válida(Que dicha CI exista en la tabla `agenda`)
4. Consultar cantidad de usuarios agendados por grupo desde la tabla `agenda`, por ende nos dirigimos a [Consultar por grupo](http://localhost/agenda_covid/view/consultar_2.php)
Seleccione grupo de usuarios
5. Consultar cantidad de usuarios agendados por grupo de edad desde la tabla `agenda`, por ende nos dirigimos a [Consultar por edad](http://localhost/agenda_covid/view/consultar_3.php)\
Selecciona grupo de edad

### Analice las pruebas end-to-end 🔩

1. Un usuario existente se pueda agendar
2. La agenda de un usuario se pueda borrar
3. Se puedan consultar los usuarios agendados
4. Se pueden consultar los usuarios agendados por grupos
5. Se pueden consultar los usuarios agendados por grupos de edad

## Construido con 🛠️

* [PHP](https://www.php.net) - Lenguaje de programación

## Autores ✒️

* **Ezequiel Padilla** - *Desarrollador* - [Linkedin](https://www.linkedin.com/in/ezequiel-padilla-46804a193/) - [GITHUB](https://github.com/Ezequiel-Padilla)

## Expresiones de Gratitud 🎁

Desde todo el equipo de la Fundación Peliculas PHP queremos decirte "GRACIAS" por tu apoyo!
