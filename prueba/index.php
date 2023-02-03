<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 4</title>
</head>
<?php
error_reporting(0)
?>
<?php
echo '
    <body align="center" style="background-color: '. $_COOKIE['color'] .'">
    <form action="index.php" method="post">
        <h1>Elige un nuevo color</h1>
        <p align="center">
            <input type="radio" name="color" value="red" required>
            <label for="rojo">Rojo</label><br>
            <input type="radio" name="color" value="green" required>
            <label for="verde">Verde</label><br>
            <input type="radio" name="color" value="blue" required>
            <label for="azul">Azul</label><br>
        </p>
        <input type="submit" name="enviar" value="Cambiar el color">
    </form>';
    echo "</body>";
?>
<!-- Para refrescar $_Cookie hay que refrescar la página -->
</html>