<h1 align="center">Ejercicio 3</h1> 
<p align="center">
<?php
$numeros = array();
for ($i = 0; $i < 100; $i++) 
{
    $numeros[] = rand(0, 20);
    echo $numeros[$i]. " - "; 
}
echo  "<br>"; 
echo  " ----------------------------------------------------------------------------------------------- "; 
echo  "<br>"; 
$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
for ($i = 0; $i < count($numeros); $i++) 
{
    if ($numeros[$i] == $valor1) 
    {
        $numeros[$i] = "<span style='color: red;'>" . $valor2 . "</span>";
    } 
}
foreach ($numeros as $numero) 
{
    echo $numero . " - ";
}
?>
</p>