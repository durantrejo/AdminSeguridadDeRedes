![tec](https://i.imgur.com/DKIVS3c.png)

<div style="text-align: center">

### TECNOLÓGICO NACIONAL DE MÉXICO

### INSTITUTO TECNOLÓGICO DE TIJUANA

### SUBDIRECCIÓN ACADÉMICA

### DEPARTAMENTO DE SISTEMAS Y COMPUTACIÓN

### SEMESTRE

### SEPTIEMBRE 2020 - ENERO 2021

### ADMINISTRACIÓN Y SEGURIDAD DE REDES 

### TIF-1003TI8A

## EQUIPO:

### DURÁN TREJO JORGE 16210275

### OSUNA ENCISO PABLO ALEJANDRO 16210279

## DOCENTE:

### FEVRIER ADOLFO VALDEZ ACOSTA

</div>

# Índice

* [Introducción](#introduccion)
* [Justifucación](#justificacion)
* [Funcionamiento](#funcionamiento)
  * [XAMPP](#xampp)
  * [PHP](#php)
  * [MySql-MariaDB](#databases)
  * [¿Qué es ngrok?](#ngrok)


<div style="text-align: justify">

<div id='introduccion'/>

# Introducción 

El proyecto a desarrollar se basa en una aplicación web enfocada en la gestión de envío de correos electrónicos; dicha aplicación constará de de cuatro páginas (dos locales y dos remotas), las cuales están representadas en el siguiente diagrama:

![130579117_2770356183251789_2827050646566066177_n](https://i.imgur.com/cLEqiK5.png)

<div id='justificacion'/>

# Justificación

El propósito de su funcionamiento es presentar una plataforma donde se pueda manejar el envío de correos electrónicos desde un servidor Apache y en colaboración con dos de las principales empresas que se dedican al envío de mensajería digital (Google y Microsoft).

<div id='funcionamiento'/>

# Funcionamiento

<div id='xampp'/>

## XAMPP 
Para establecer un servidor y una base de datos que soporte la información ingresada en el registro de usuarios, se utilizó XAMPP. 

¿Qué es XAMPP? 

Es un servidor independiente de plataforma, software libre, que consiste principalmente en la base de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script: PHP y Perl.

![apache-friends-xampp](https://i.imgur.com/pDzvqpG.jpg)

Después de descargar la aplicación y ejecutarla, se abre lo siguiente:

![Screenshot_20201207_144241](https://i.imgur.com/CKPXiYE.png)

Sencillamente se tiene que dar click en start en los módulos de Apache y MySQL para poner en marcha tanto el servidor como la base de datos.

Para que nuestro proyecto web se ejecute acorde al puerto donde nuestro servidor se está ejecutando, se tiene que colocar en la siguiente dirección: C:/xampp/htdocs

Para hacer el montaje de la página web, se utilizó un servicio gratuito llamado ngrok. 

<div id='php'/>

## PHP

![6T8eGecQ0XXvTHOvic4ba8mlQXmSEW3vrI7jenmv](https://i.imgur.com/yHir40W.png)

El código PHP suele ser procesado en un servidor web por un intérprete PHP implementado como un módulo, un daemon o como un ejecutable de interfaz de entrada común (CGI). 

En un servidor web, el resultado del código PHP interpretado y ejecutado que puede ser cualquier tipo de datos, como el HTML generado o datos de imágenes binarias formaría la totalidad o parte de una respuesta HTTP.

<div id='databases'/>

## MySql-MariaDB

![asegurar-base-de-datos-mariadb-myqal](https://i.imgur.com/ezjaSe2.png)

Los sistemas de gestión de bases de datos MySQL y MariaDB están basados en el mismo núcleo de software. MariaDB es una bifurcación (“fork” en inglés) de MySQL 5.1, aunque con el paso del tiempo se ha convertido en un sistema de gestión de bases de datos autónomo.  

* Estructura de la base de datos
* Motores de base de datos
* Consultas de base de datos
* Rendimiento
* Alta disponibilidad
* Seguridad
* Ecosistema
* Asistencia técnica
* Documentación y comunidad.

<div id='ngrok'/>

## ¿Qué es ngrok? 

![índice](https://i.imgur.com/JG1IiVX.png)

Es un servicio o herramienta que te permite convertir tu servidor local en un servidor accesible mediante un subdominio generado aleatoriamente por ngrok y así poder visualizarlo desde cualquier computadora con acceso a internet en el mundo.

Después de descargar la aplicación y ejecutarla, se abre la terminal con lo siguiente:

![Screenshot_20201207_144641](https://i.imgur.com/XdndhkU.png)

Se ingresa lo siguiente:

![Screenshot_20201207_144811](https://i.imgur.com/i7KlggU.png)

* ngrok: aplicación
* http: protocolo
* 80: puerto

Después se desplegará lo siguiente:

![Screenshot_20201207_145008](https://i.imgur.com/bhhILcH.png)

Aquí se muestra la información, el estado de la conexión y la URL que se nos asigna (dicha URL vence cada 8 horas y se cambia por otra).

</div>