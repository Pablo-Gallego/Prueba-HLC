<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
</head>
<body align="center">
    <form action="sesion.php" method="post">
        <h1>Elige un nuevo color</h1>
        <p align="center">
            Nombre:<input type="text" name="nombre" required><br>
            Contraseña<input type="text" name="contraseña" required><br>
        </p>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
<?php
error_reporting(0)
?>
</html>