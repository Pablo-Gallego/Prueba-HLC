<h1 align="center">Ejercicio 3</h1> 
<p align="center">
<?php
$saltos = $_POST['saltos'];
$numero = $_POST['numero'];
$i = count($numero);
for($x = $saltos; $x < $i; $x++) 
{
echo $numero[$x];
echo "<br>";
}
?>
<?php
$saltos = $_POST['saltos'];
$numero = $_POST['numero'];
$i = count($numero);
for($x = 0; $x < $saltos; $x++) 
{
echo $numero[$x];
echo "<br>";
}
?>
</p>