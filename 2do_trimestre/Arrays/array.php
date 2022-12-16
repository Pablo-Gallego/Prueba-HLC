<h1 align="center">Alumnos</h1>
<p align="center">
<!-- Array -->
<?php
$clase = array("Juan", "Javier", "Pablo", "Paco", "Bernardo");
echo $clase[0];
echo $clase[1];
echo $clase[2];
echo $clase[3];
echo $clase[4];
?>
</p>
<h1 align="center">Alumnos</h1>
<p align="center">
<!-- Array -->
<?php
$clase = array("Juan", "Javier", "Pablo", "Paco", "Bernardo");
$i = count($clase);
for($x = 0; $x < $i; $x++) 
    {
        echo $clase[$x];
        echo "<br>";
    }
?>
</p>

<h1 align="center"> Alumnos y su altura </h1>
<p align="center">
<!-- Array asociativo -->
<?php
$clase = array("Juan"=>"1,75", "Javier"=>"1,76", "Pablo"=>"1,77", "Paco"=>"1,80", "Bernardo"=>"1,79");
foreach($clase as $alumno => $altura) 
    {
        echo $alumno . " mide " . $altura;
        echo "<br>";
    }
?>
</p>