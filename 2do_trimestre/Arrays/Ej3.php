<h1 align="center">Ejercicio 3</h1> 
<p align="center">
<?php
$numero = $_POST['numero'];
$i = count($numero);;
for($x = 1; $x < $i; $x++) 
{
echo $numero[$x];echo "<br>";
}
echo $numero[0];
  ?>
</p>