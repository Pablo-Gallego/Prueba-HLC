<!DOCTYPE html>
<html>
<body>

<!--Ejercicio 1-->
<?php
$nombre = "pablo";
echo "Yo soy $nombre";
?> <br>

<!--Ejercicio 2-->
<?php
$direccion = "Calle";
$telefono = "313215616";
echo "Vivo en la calle $direccion";
echo "<br>";
echo "y tu numero de telefono es $telefono"
?> <br>

<!--Ejercicio 3-->

<table border="1px" align="center">
    <tr align="center">
        <th>Inglés</th>
        <th>Español</th>
    </tr>
    <tr align="center">
        <td>Hello</td>
        <td> <?php $Hello = "Hola"; echo "$Hello" ?> </td>
    </tr>
    <tr align="center">
        <td>One</td>
        <td> <?php $One = "Uno"; echo "$One" ?> </td>
    </tr>
    <tr align="center">
        <td>Two</td>
        <td><?php $Two = "Dos"; echo "$Two" ?> </td>
    </tr>
    <tr align="center">
        <td>Three</td>
        <td><?php $Three = "Tres"; echo "$Three" ?> </td>
    </tr>
    <tr align="center">
        <td>Four</td>
        <td><?php $Four = "Cuatro"; echo "$Four" ?> </td>
    </tr>
    <tr align="center">
        <td>Five</td>
        <td><?php $Five = "Cinco"; echo "$Five" ?> </td>
    </tr>
    <tr align="center">
        <td>Six</td>
        <td><?php $Six = "Seis"; echo "$Six" ?> </td>
    </tr>
    <tr align="center">
        <td>Seven</td>
        <td><?php $Seven = "Siete"; echo "$Seven" ?> </td>
    </tr>
    <tr align="center">
        <td>Nine</td>
        <td><?php $Nine = "Nueve"; echo "$Nine" ?> </td>
    </tr>
    <tr align="center">
        <td>Ten</td>
        <td><?php $Ten = "Diez"; echo "$Ten" ?> </td>
    </tr>
</table>

<!--Ejercicio 4-->

<table border="1px" align="center">
<?php
$SEGAD = "SEGAD"; 
$SERED = "SERED"; 
$ADSO = "ADSO"; 
$IMWEB = "IMWEB"; 
$HLC = "HLC"; 
$EMPRE = "EMPRE";
$ADSGB = "ADSGB";
?>
    <tr align="center">
        <th colspan="6">Horaio</th>
    </tr>
    <tr align="center">
        <td></td>
        <td>Lunes</td>
        <td>Martes</td>
        <td>Miercoles</td>
        <td>Jueves</td>
        <td>Viernes</td>
    </tr>
    <tr align="center">
        <td>8:15 - 9:15</td>
        <td><?php echo "$SEGAD"?> </td>
        <td><?php echo "$ADSGB"?></td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$EMPRE"?></td>
        <td><?php echo "$HLC"?></td>
    </tr>
    <tr align="center">
        <td>9:15 - 10:15</td>
        <td><?php echo "$SEGAD"?> </td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$EMPRE"?></td>
        <td><?php echo "$HLC"?></td>
    </tr>
    <tr align="center">
        <td>10:15 - 11:15</td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$SEGAD"?></td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$ADSGB"?></td>
    </tr>
    <tr align="center">
        <td>11:15 - 11:45</td>
        <td colspan="6">Recreo</td>
    </tr>
    <tr align="center">
        <td>11:45 - 12:45</td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$HLC"?></td>
        <td><?php echo "$SEGAD"?></td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$ADSGB"?></td>
    </tr>
    <tr align="center">
        <td>12:45 - 13:45</td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$EMPRE"?></td>
        <td><?php echo "$IMWEB"?></td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$IMWEB"?></td>
    </tr>
    <tr align="center">
        <td>13:45 - 14:45</td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$EMPRE"?></td>
        <td><?php echo "$IMWEB"?></td>
        <td><?php echo "$SERED"?></td>
        <td><?php echo "$IMWEB"?></td>
    </tr>
</table>



</body>
</html>