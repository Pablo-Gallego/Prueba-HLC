<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 1</title>
</head>
<body>
<h1 align="center">Ejercicio 1</h1> 
<p align="center">
<?php
$peliculas = $_POST['peliculas'];
echo "<table align='center' border='1px'>";
echo "<tr><th>Nombre de la Película</th></tr>";
foreach($peliculas as $pelicula) 
{
    echo "<tr><td>$pelicula</td></tr>";
}
echo "</table>";
?>
</p>
</body>
</html>