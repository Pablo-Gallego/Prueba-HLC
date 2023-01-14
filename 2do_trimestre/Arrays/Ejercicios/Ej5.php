<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 5</title>
  <style>
    .barra {
      width: 20px; 
      height: 0px; 
    }
  </style>
</head>
<body>
<h1 align="center">Ejercicio 5</h1> 
<p align="center">
<?php
$temperaturas = $_POST['meses'];

$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

if(isset($_POST["meses"])) {
        foreach ($meses as $i => $mes) {
            echo $mes . ": ";
            for ($cuadrados = 0; $cuadrados < $temperaturas[$i]; $cuadrados++) {
                echo '<img src="cuadrado.png" width="20px" height="20px">';
            }
            echo "<br>";
        }
    }
?>
</div>
</p>