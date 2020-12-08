![tec](https://i.imgur.com/DKIVS3c.png)

<center>

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

## Índice
> * [Introduccion](#id-introduccion)
> * [Justificacion](#id-justificacion)
> * [Funcionamiento](#id-funcionamiento)

<div id='id-introduccion'/>

# Introducción 

<div id='id-justificacion'/>
El proyecto a desarrollar se basa en una aplicación web enfocada en la gestión de envío de correos electrónicos; dicha aplicación constará de de cuatro páginas (dos locales y dos remotas), las cuales están representadas en el siguiente diagrama:


# Justificación

<div id='id-funcionamiento'/>
El propósito de su funcionamiento es presentar una plataforma donde se pueda manejar el envío de correos electrónicos desde un servidor Apache y en colaboración con dos de las principales empresas que se dedican al envío de mensajería digital (Google y Microsoft).

# Funcionamiento

Para establecer un servidor y una base de datos que soporte la información ingresada en el registro de usuarios, se utilizó XAMPP. ¿Qué es XAMPP? Es un servidor independiente de plataforma, software libre, que consiste principalmente en la base de datos MySQL, el servidor web Apache y los intérpretes para lenguajes de script: PHP y Perl.

![apache-friends-xampp](https://i.imgur.com/pDzvqpG.jpg)

Después de descargar la aplicación y ejecutarla, se abre lo siguiente:


![Screenshot_20201207_144241](https://i.imgur.com/CKPXiYE.png)

Sencillamente se tiene que dar click en start en los módulos de Apache y MySQL para poner en marcha tanto el servidor como la base de datos.

Para que nuestro proyecto web se ejecute acorde al puerto donde nuestro servidor se está ejecutando, se tiene que colocar en la siguiente dirección: C:/xampp/htdocs

Para hacer el montaje de la página web, se utilizó un servicio gratuito llamado ngrok. 

![índice](https://i.imgur.com/JG1IiVX.png)

## ¿Qué es ngrok? 

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
