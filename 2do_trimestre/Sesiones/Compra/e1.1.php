<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
</head>
<?php
error_reporting(0)
?>
<?php
session_start();
$nombre = $_SESSION["nombre"];
$contraseña = $_SESSION["contraseña"];
echo "Nombre: ". $nombre;
echo "<br>";
echo "Contraseña: ". $contraseña;
?>
</html>