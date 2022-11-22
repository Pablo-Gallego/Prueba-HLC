<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 3.2</title>
</head>
<body align="center">
    <?php 
        error_reporting(0)
    ?>
<div id="Ejercicio1">
<h1>Ejercicio 1</h1>
    <?php
    $for = 5;
    for ($incremento= 0; $incremento <= 100; $incremento++) 
    {
        echo $for. " x " .$incremento. " = ". $for*$incremento;
        echo "<br>";
    }  
    ?>
</div>

<div id="Ejercicio2">
<h1>Ejercicio 2</h1>
    <?php
    $while = 5;
    $incremento = 0;
    while ($incremento <= 100) 
    {
        echo $while. " x " .$incremento. " = ". $while*$incremento;
        echo "<br>";
        $incremento++;
    }
    ?>
</div>
</body>
</html>