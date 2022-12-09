<?php
    error_reporting(0)
?><!-- Esto no haría falta ya, pero lo pongo por costumbre -->
<?php
$juego = $_POST['juego'];
$dado = rand(1,6);
    if ($dado == 1 and $juego == "uno") // uno
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="1.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 1 and $juego != "uno") // uno
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="1.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 2 and $juego == "dos") // dos
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="2.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 2 and $juego != "dos") // dos
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="2.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else if ($dado == 3 and $juego == "tres") // tres
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="3.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 3 and $juego != "tres") // tres
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="3.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else if ($dado == 4 and $juego == "cuatro") // cuatro
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="4.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 4 and $juego != "cuatro") // cuatro
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="4.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else if ($dado == 5 and $juego == "cinco") // cinco
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="5.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 5 and $juego != "cinco") // cinco
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="5.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else if ($dado == 6 and $juego == "seis") // seis
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="6.jpg">
        <h1>Has ganado</h1>
        </body>
        </html>
        HERE;
    } 
    else if ($dado == 6 and $juego !="seis")// seis
    {
        PRINT <<< HERE
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <title>Bucles</title>
        </head>
        <body align="center">
        <img src="6.jpg">
        <h1>Has perdido</h1>
        </body>
        </html>
        HERE;
    }
    else // seis
    {
        echo "Has perdido";
    }
?>