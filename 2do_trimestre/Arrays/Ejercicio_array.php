<h1 align="center">Ejercicio 1</h1> 
<p align="center"><?php
$numero1 = rand(0,100);
$numero2 = rand(0,100);
$numero3 = rand(0,100);
$numero4 = rand(0,100);
$numero5 = rand(0,100);
$numeros = array($numero1 => pow($numero1, 2), $numero2=> pow($numero2, 2) ,$numero3 => pow($numero3, 2) , $numero4 => pow($numero4, 2), $numero5 =>pow($numero5, 2));
foreach($numeros as $numero => $cuadrado) 
    {
        echo "Tu número es " .$numero . " y su cuadrado es " . $cuadrado. " y su cubo es ". pow($numero, 3);
        echo "<br>";
    }
?>
</p>

