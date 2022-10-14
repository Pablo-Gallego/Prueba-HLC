<!DOCTYPE html>
<html>
<body>

<!--Ejercicio 1-->
<?php
$nombre = "pablo";
echo "yo soy $nombre";
?> <br>

<!--Ejercicio 2-->
<?php
$direccion = "Zayas";
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
</body>
</html>