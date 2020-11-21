<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<form action="enviar.php" method="post">
    <input type="text" placeholder="Nombre" name="name" required="">
    <input type="email" placeholder="Correo" name="email" required="">
    <input type="text" placeholder="Asunto" name="asunto" required="">
    <textarea placeholder="mensaje" name="msg"></textarea>
    <input type="submit" name="enviar">
</form>
<?php
include("enviar.php");

?>
</body>
</html>
