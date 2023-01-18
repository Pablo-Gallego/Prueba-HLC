<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 2</title>
</head>
<body align="center">
<h1>Ejercicio 2</h1> 
<p>
<?php
error_reporting(0)
?>
<?php
$alumnos = array("Marta" => 7.8, "Luis" => 5, "Pablo" => 9.5, "Lorena" => 6.9);
$orden = $_POST['orden'];
if ($orden == "si") 
{
  arsort($alumnos);
  echo "<table align='center' border='1px'>";
  echo "<tr><th>Nombre</th><th>Número</th></tr>";
  foreach ($alumnos as $nombre => $nota) 
  {
    echo "<tr><td>$nombre</td><td>$nota</td></tr>";
  }
  echo "</table>";
} 
else 
{
  asort($alumnos);
  echo "<table align='center' border='1px'>";
  echo "<tr><th>Nombre</th><th>Número</th></tr>";
  foreach ($alumnos as $nombre => $nota) 
  {
    echo "<tr><td>$nombre</td><td>$nota</td></tr>";
  }
  echo "</table>";
}
?>
</p>
</body>
</html>