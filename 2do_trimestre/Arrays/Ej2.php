<h1 align="center">Ejercicio 2</h1> 
<p align="center">
<?php
$numero = array($_POST['numero']); 
  foreach($numero as $comparar) 
{
    echo "El número mas pequeño es " .min($comparar). "<br>";
    echo "El número mas pequeño es " .max($comparar);
}
  ?>
</p>