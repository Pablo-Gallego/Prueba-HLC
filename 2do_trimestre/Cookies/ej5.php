<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 5</title>
</head>
<?php
error_reporting(0)
?>
<?php
echo '
    <body align="center">
    <h1>Cambia el color</h1>
    <svg height="100" width="100" style="background-color:'. $_COOKIE['fondo'] .'">
    <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
    </svg>

    <form action="ej5.php" method="post"> 
        <input type="submit" name="enviar" value="Cambiar el color">
    </form>';

    if(isset($_COOKIE['fondo']))
    { 
        $color = $_COOKIE['fondo'];
        setcookie('fondo', $color, time() + 20);
        echo "La cookie tiene el valor: ". $_COOKIE['fondo'];
    } else {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        $color = "rgb($r,$g,$b)";
        setcookie("fondo", $color, time() + 20);
        echo "El nuevo color es: $color";
    }
    echo "</body>";
    
?> 
</html>