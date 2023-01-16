<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 2</title>
</head>
<body>
<h1 align="center">Ejercicio 2</h1> 
<p align="center">
<?php
// Crear array asociativo
$alumnos = array("Marta" => 7.8,    "Luis" => 5,    "Lorena" => 6.9);

// Mostrar las notas de forma ordenada
foreach ($alumnos as $nombre => $notas) {
    echo "$nombre: ";
    sort($notas);
    foreach ($notas as $nota) {
        echo "$nota ";
    }
    echo "<br>";
}
?>

</p>
</body>
</html>