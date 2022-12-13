<?php
    error_reporting(0)
?><!-- Esto no haría falta ya, pero lo pongo por costumbre -->
<?php
$juego = $_POST['juego'];
$moneda = rand(0,1);
    if ($moneda == 0 and $juego =="cara") {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="cara.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($moneda == 0 and $juego =="cruz") {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="cara.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($moneda == 1 and $juego =="cruz") 
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="cruz.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    }
    else if ($moneda == 1 and $juego =="cara") 
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="cruz.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else 
    {
    echo "No deberias estar viendo esto";
    }
?>