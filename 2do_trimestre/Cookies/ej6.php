<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 6</title>
</head>
<?php
error_reporting(0)
?>
<?php
echo '
    <body align="center">
    <h1>Cambia el color</h1>
    <svg height="100" width="100">
    <circle cx="50" cy="50" r="40" stroke="green"
    style="fill:' . $_COOKIE['fondo'] . ';stroke-width:4;stroke="green" />
    </svg>';
    echo "</body>";
    // Hay que ejecutar antes el 5
?> 
</html>