<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio 7</title>
</head>
<?php
error_reporting(0)
?>
<?php
echo '
    <body align="center">
    <h1>Cambia el color</h1>
    <svg height="100" width="100">
    <circle cx="50" cy="50" r=' . $_COOKIE['radio'] . ' stroke="green"
    style="fill:' . $_COOKIE['fondo'] . ';stroke-width:' . $_COOKIE['raya'] . ';stroke="green" />
    </svg>';
    echo "<br>La cookie tiene el valor: " . $_COOKIE['fondo'];

    if(isset($_COOKIE['fondo']))
    {   
        $r = $_COOKIE['radio'];
        $stroke = $_COOKIE['raya'];
        setcookie('radio', $r, time() + 20);
        setcookie('raya', $stroke, time() + 20);

        echo "La cookie tiene el valor: ". $_COOKIE['fondo'];
    } else {
        $r = rand(0, 40);
        $stroke = rand(0, 10);
        setcookie('radio', $r, time() + 20);
        setcookie('raya', $stroke, time() + 20);
        echo "El nuevo radio es: $r";
        echo "<br>";
        echo "El nuevo radio es: $stroke";
    }
    echo "</body>";
    // Hay que ejecutar antes el 5

?> 
</html>