<!DOCTYPE html>
<html>
<body>
<!--Ejercicio 1
Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.-->

<h1 align="center">Ejercicio 1</h1>
<p align="center"><?php
$nombre = "pablo";
echo "Yo soy $nombre";
?></p><br>

<!--Ejercicio 2
Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. 
Cada dato se debe mostrar en una línea diferente. 
Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.-->

<h1 align="center">Ejercicio 2</h1>
<p align="center">
<?php 
$nombre = "pablo";
$direccion = "Calle";
$telefono = "313215616";
echo "Yo soy $nombre";
echo "<br>";
echo "Vivo en la calle $direccion";
echo "<br>";
echo "y tu numero de telefono es $telefono"
?></p><br>

<!--Ejercicio 3
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente traducción al castellano. 
Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta <table> de HTML.-->

<h1 align="center">Ejercicio 3</h1>
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

<!--Ejercicio 4
Escribe un programa que muestre tu horario de clase mediante una tabla. 
Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores),
 ve intercalando código HTML y PHP para familiarizarte con éste último.-->

<h1 align="center">Ejercicio 4</h1>
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
        <td><?php echo "$SEGAD"?></td>
        <td><?php echo "$ADSGB"?></td>
        <td><?php echo "$ADSO"?></td>
        <td><?php echo "$EMPRE"?></td>
        <td><?php echo "$HLC"?></td>
    </tr>
    <tr align="center">
        <td>9:15 - 10:15</td>
        <td><?php echo "$SEGAD"?></td>
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

<!--Ejercicio 5
Escribe un programa que utilice las variables $x y $y. 
Asígnales los valores 144 y 999 respectivamente. 
A continuación, muestra por pantalla el valor de cada variable, 
la suma, la resta, la división y la multiplicación-->

<h1 align="center">Ejercicio 5</h1>
<p align="center">
<?php
$x = "144"; 
$y = "999"; 
$suma = $x + $y;
$resta = $x - $y;
$division = $x * $y;
$multiplicación = $x/ $y;
echo "La suma es $suma";echo "<br>";
echo "La resta es $resta";echo "<br>";
echo "La division es $division";echo "<br>";
echo "La multiplicación es $multiplicación";
?>
</p>

<!--Ejercicio 6
Crea la variable $nombre y asígnale tu nombre completo. 
Muestra su valor por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 1-->

<h1 align="center">Ejercicio 6</h1>
<p align="center"><?php
$nombre = "Pablo Gallego Martínez";
echo "Yo soy $nombre";
?></p><br>

<!--Ejercicio 7
Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. 
Muestra los valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2. 
Conceptos básicos: Integración de PHP en HTML. Variables. Operadores 6-->

<h1 align="center">Ejercicio 7</h1>
<p align="center">
<?php 
$nombre = "pablo";
$direccion = "Calle";
$telefono = "313215616";
echo "Yo soy $nombre";
echo "<br>";
echo "Vivo en la calle $direccion";
echo "<br>";
echo "y tu numero de telefono es $telefono"
?></p><br>

<!--Ejercicio 8
Realiza un conversor de euros a pesetas. 
La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.-->

<h1 align="center">Ejercicio 8</h1>
    <H2 align="center">conversor de euros a pesetas</H2>
		<form align="center" action="Ejercicios.php" method="POST">
			<table align="center">
                <tr>
                <td>Euros</td>
                <td>Pesetas</td>
                </tr>
				<tr>
					<td><input type="text" name="euros" required></td>
                    <td><?php
	                if($_POST)
                    {	
		            $euros = $_POST ['euros'];
		            $pesetas = $euros * 166;
		            echo "$pesetas "; 
	                } ?></td>
                </tr>
			</table>
            <input type="submit" value="Convertir">
		</form>

<!--Ejercicio 9
Realiza un conversor de pesetas a euros. 
La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable.-->

<h1 align="center">Ejercicio 9</h1>
<H2 align="center">conversor de pesetas a euros</H2>
		<form align="center" action="Ejercicios.php" method="POST">
			<table align="center">
                <tr>
                <td>pesetas</td>
                <td>euros</td>
                </tr>
				<tr>
					<td><input type="text" name="peseta" required></td>
                    <td><?php
	                if($_POST)
                    {	
		            $peseta = $_POST ['peseta'];
		            $euro = $peseta/166;
		            echo "$euro"; 
	                } ?></td>
                </tr>
			</table>
            <input type="submit" value="Convertir">
		</form>
        

<!--Ejercicio 10
Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. 
La base de la pirámide debe estar formada por 9 asteriscos.-->

<h1 align="center">Ejercicio 10</h1>
<p align="center">
    <?php function piramide_rellena ($filas) 
    {
    $cadena = null;
    while($filas)
        {
        $cadena .= "*";
        $filas--;
        echo $cadena."<br />";
        }
    }
    piramide_rellena (9);
    ?>
</p>

<!--Ejercicio 11
Igual que el programa anterior, 
pero esta vez la pirámide estará hueca (se debe ver únicamente el contorno hecho con asteriscos).-->

<h1 align="center">Ejercicio 11</h1>
<p align="center">
    <?php $n=8;
	for($i = 1; $i <= $n; $i++){
		 for ($s=1; $s <= $n; $s++) 
        {
			echo '&nbsp;';
		}
		for($j = 1; $j <= 2* $i - 1; $j++)
        {
			 if ($j == 1 || $j==2 * $i -1) 
            {
				echo '*';
			} else 
            {
				echo '&nbsp;';
			}
		}
		echo '<br>';
	}
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*********';
?>

<!--Ejercicio 12
Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, 
con el vértice hacia abajo.-->

<h1 align="center">Ejercicio 12</h1>
<p align="center">
    <?php 
    echo '&nbsp;*********';
    echo '<br>';
    $n=8;
	for ($i = $n; $i >= 1; $i--) { 
		for($s = 0; $s <= $n - $i; $s++){
			echo '&nbsp;';
		}
		for($j = 1; $j <= 2* $i -1; $j++){
			if($j == 1|| $j ==2* $i -1){
				echo '*';
			}else{
				echo '&nbsp;';
			}
		}
		echo '<br>';
	}

?>


<!--Ejercicio extra-->
<h1 align="center">Ejercicio extra</h1>
<p align="center">
    Tu nombre tiene
    <?php
        echo strlen("Pablo Gallego Martinez");
    ?> 
     letras
</p>
<p align="center">
    <?php
        echo str_replace("Martinez", "Pelota", "Pablo Gallego Martinez");
    ?> 
</p>

</body>
</html>