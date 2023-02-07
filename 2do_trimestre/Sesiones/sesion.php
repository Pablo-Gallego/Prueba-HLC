<?php
session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["contraseña"] = $_POST["contraseña"];

header('Location:e1.1.php');
?>
