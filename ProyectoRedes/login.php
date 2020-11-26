<?php

include("conexion.php");

$nombre = $_POST["email"];
$pass = $_POST["pass"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE email = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	echo "<script> alert('Bienvenido $nombre');window.location= 'index.php' </script>";
}
else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}
	


?>