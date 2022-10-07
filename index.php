<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página web</title>
</head>
<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        width: 100%;
        padding-inline-start: 0px;
    }
    li {
        text-align: center;
        border: 1px solid #555;
    }
    li a {
        display: block;
        color: #000;
        padding: 8px 10px;
        text-decoration: none;
    }
    li a.active {
        background-color: #04AA6D;
        color: white;
    }
    li a:hover:not(.active) {
        background-color: #555;
        color: white;
    }
</style>
<body>
   
    <?php
    error_reporting(E_ALL);
    echo "<h1><center>Hola Mundo</center></h1>";
    ?>
    <?php
    error_reporting(E_ALL);
    echo "<p><center>Esto es un parrafo</center></p>";
    ?>
   <?php
    error_reporting(E_ALL);
    echo "<p>Esto tambien</p>";
    ?>
   <ul>
       
        <li><a class="active" href="index.html" target="_blank">Inicio</a></li> 
        <li><a href="https://pablo-gallego.github.io/Prueba-HLC/" class="rss" target="_blank">Github</a></li>
        <li><a href="Get.php" target="_blank">Get</a></li>
        <li><a href="Post.php" target="_blank">Post</a></li>
        <div class="vacio"></div>
    </ul>
 <!--Para poder visualizar el archivo PHP debemos de tener activo el 
 servidor y usar un navegador poner la url donde se encuentre el archivo 
 EJEMPLO: localhost/PHP_Pruebas-->

</body>
</html>