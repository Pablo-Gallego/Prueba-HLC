<!DOCTYPE html>
<html>
<body>
<!--Ejercicio 6
Crea la variable $nombre y asígnale tu nombre completo. 
Muestra su valor por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 1-->

<h1 align="center">Ejercicio 6</h1>
<p align="center"><?php
$nombre = "Pablo Gallego Martínez";
echo "Yo soy $nombre";
?></p><br>

<!--Ejercicio 8
Realiza un conversor de euros a pesetas. 
La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.-->

<h1 align="center">Ejercicio 8</h1>
    <H2 align="center">conversor de euros a pesetas</H2>
		<form align="center" action="Práctica 2.1.php" method="POST">
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

<!--Ejercicio 12
Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo.-->

<h1 align="center">Ejercicio 12</h1>
<p align="center">
    <?php 
    echo '*&nbsp;*&nbsp;*&nbsp;*&nbsp;*&nbsp;*&nbsp;*&nbsp;*&nbsp;*';echo "<br>";
	echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*';echo "<br>";
    echo '*&nbsp;&nbsp;*';echo "<br>";
    echo '*';
?>
</p>
</body>
</html>