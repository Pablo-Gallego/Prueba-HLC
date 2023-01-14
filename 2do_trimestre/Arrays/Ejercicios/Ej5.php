<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 5</title>
</head>
<body>
<h1 align="center">Ejercicio 5</h1> 
<div align="center">
<p align="center">
<?php
$temperaturas = $_POST['temperaturas'];
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

if(isset($_POST["temperaturas"])) {
        foreach ($meses as $i => $mes) {
            echo $mes . ": ";
            for ($cuadrados = 0; $cuadrados < $temperaturas[$i]; $cuadrados++) {
                echo '<img src="cuadrado.png" width="10px" height="10px">';
            }
            echo "<br>";
        }
    }
?>
</p>
</div>
</body>
</html>