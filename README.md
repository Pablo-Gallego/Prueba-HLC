<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi página web</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    ul {
        list-style-type: none;
        margin: 0;
        margin-left: 37%;
        margin-right: 37%;
        padding: 0;
        overflow: hidden;
        width: 20%;
        padding-inline-start: 0px;
        position: center;
    }
    li {
        text-align: center;
        border: 1px solid #555;
        border-radius: 15px;
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
        border-radius: 15px;
    }
    li a:hover:is(.active) {
        background-color: red;
        color: aquamarine;
        border-radius: 15px;
    }
    li a:hover:not(.active) {
        background-color: #555;
        color: white;
        border-radius: 15px;
    }
</style>
<body>
    <h1>Esta es la pagina de inicio de Pablo Gallego Martínez, si no eres el vete.</h1>
    <ul>
        <li><a class="active" href="index.html" target="_blank">Inicio</a></li> 
        <li><a href="https://pablo-gallego.github.io/Prueba-HLC/" class="rss" target="_blank">Github</a></li>
        <li><a href="1er_trimestre/index.html" target="_blank">Ejercicios 1º trimestre</a></li>
        <li><a href="2do_trimestre/index.html" target="_blank">Ejercicios 2º trimestre</a></li>
        <li><a href="3er_trimestre/index.html" target="_blank">Ejercicios 3º trimestre</a></li>
        <li><a href="Practicas/index.html" target="_blank">Practicas clase</a></li>
        <div class="vacio"></div>
    </ul>
 <!--Para poder visualizar el archivo PHP debemos de tener activo el 
 servidor y usar un navegador poner la url donde se encuentre el archivo 
 EJEMPLO: localhost/PHP_Pruebas-->

</body>
</html>
