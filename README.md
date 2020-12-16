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
* [Desarrollo](#desarrollo)
  * [XAMPP](#xampp)
  * [PHP](#php)
  * [MySql-MariaDB](#databases)
  * [PHPMailer](#phpmailer)
  * [¿Qué es ngrok?](#ngrok)
* [Conclusión](#conclusion)
* [Referencias](#referencias)

<div style="text-align: justify">

<div id='introduccion'/>

# Introducción 

El proyecto a desarrollar se basa en una aplicación web enfocada en la gestión de envío de correos electrónicos; dicha aplicación constará de de cuatro páginas (dos locales y dos remotas), las cuales están representadas en el siguiente diagrama:

![130579117_2770356183251789_2827050646566066177_n](https://i.imgur.com/cLEqiK5.png)

<div id='justificacion'/>

# Justificación

El propósito de su funcionamiento es presentar una plataforma donde se pueda manejar el envío de correos electrónicos desde un servidor Apache y en colaboración con dos de las principales empresas que se dedican al envío de mensajería digital (Google y Microsoft).

<div id='desarrollo'/>

# Desarrollo

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

<div id='phpmailer'/>

## PHPMailer

![76f5e300-dfa3-11e9-9f51-9571102b4fc9](https://i.imgur.com/knnMcvJ.png)

Muchos desarrolladores de PHP necesitan enviar correos electrónicos desde su código. La única función de PHP que admite esto directamente es mail (). Sin embargo, no proporciona ninguna ayuda para hacer uso de funciones populares como cifrado, autenticación, mensajes HTML y archivos adjuntos.

Dar formato al correo electrónico correctamente es sorprendentemente difícil. Hay una miríada de estándares superpuestos (y contradictorios) que requieren un estricto cumplimiento de reglas de formato y codificación horriblemente complicadas: la gran mayoría del código que encontrará en línea que usa la función mail () directamente es simplemente incorrecto, ¡si no inseguro!

La función PHP mail () generalmente envía a través de un servidor de correo local, generalmente encabezado por un binario sendmail en plataformas Linux, BSD y macOS, sin embargo, Windows generalmente no incluye un servidor de correo local; El cliente SMTP integrado de PHPMailer permite el envío de correo electrónico en todas las plataformas sin necesidad de un servidor de correo local. Sin embargo, tenga en cuenta que la función mail () debe evitarse cuando sea posible; es más rápido y seguro usar SMTP en localhost.

## Caracteristicas

¡Probablemente el código más popular del mundo para enviar correos electrónicos desde PHP!
+ Utilizado por muchos proyectos de código abierto: WordPress, Drupal, 1CRM, SugarCRM, Yii, Joomla! y muchos más
+ Soporte SMTP integrado: envíe sin un servidor de correo local
+ Envíe correos electrónicos con múltiples direcciones Para, CC, CCO y de respuesta
+  Correos electrónicos multiparte / alternativos para clientes de correo que no leen correo electrónico HTML
+ Agregar archivos adjuntos, incluidos en línea
+ Soporte para contenido UTF-8 y codificaciones de 8 bits, base64, binarias e imprimibles entre comillas
+ Autenticación SMTP con mecanismos LOGIN, PLAIN, CRAM-MD5 y XOAUTH2 sobre transportes SMTPS y SMTP + STARTTLS
+ Valida las direcciones de correo electrónico automáticamente
+ Protege contra ataques de inyección de encabezado
+ ¡Mensajes de error en más de 50 idiomas!
+ Soporte de firma DKIM y S / MIME
+ Compatible con PHP 5.5 y posterior, incluido PHP 8.0
+ Espaciado de nombres para evitar conflictos de nombres



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

<div id='conclusion'/>

# Conclusión
El proyecto desarrollado implementó exitosamente varios temas, herramientas y aspectos que se estudiaron a lo largo del curso. Su desarrollo tuvo una valiosa aportación en lo que a conocimiento y práctica respecta, ya que conceptos como un servidor, los protocolos bajo los que se trabaja y la implementación de todo dentro de una página web quedaron esclarecidos al verlos aplicados en un caso real. Las bases de dicho proyecto parten de lo que se realizó durante las últimas prácticas y se logró brindar un pequeño servicio de mensajería con lo previamente establecido.


<div id='referencias'/>

# Referencias

Marcus Bointon. (2013). PHPMailer. Diciembre 16, 2020, de GitHub Sitio web: https://github.com/PHPMailer/PHPMailer

Alex Arenols Solano. (Enero 01, 2019). Qué es PHP: Características y usos. Diciembre 16, 2020, de OpenWebinars Sitio web: https://openwebinars.net/blog/que-es-php/

Pedro Luis Antona Díaz. (Septiembre 20, 2020). ¿Qué es ngrok? . Diciembre 14, 2020, de Un poco de Java Sitio web: https://unpocodejava.com/2020/09/30/que-es-ngrok/

Antonio Olmos. (Octubre 03, 2018). Diferencias entre MySQL y MariaDB. Diciembre 14, 2020, de Overant Sitio web: https://www.overant.com/blog/diferencias-entre-mysql-y-mariadb/



</div>
