<!DOCTYPE HTML>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>calculadora</title>
</head>
<body>
	<H2>Calculadora PHP</H2>
		<form action="calculadora.php" method="POST">
			<table>
				<tr>
					<td><input type="text" name="numero1" required></td>
				</tr>
				<tr>
					<td><input type="text" name="numero2" required></td>
				</tr>
				<tr>
					<td><input type="text" name="numero3" required></td>
				</tr>
				<tr>
					<td> <input type="submit" value="sumar"> </td>
				</tr>
			</table>
		</form>

	<?php
	if($_POST)
    {	
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
		$num3 = $_POST
		['numero3'];
		$resultado = $num1 * ($num2 + $num3);
		echo "El resultado de ".$num1."(".$num2. " + " .$num3.") es ".$resultado; 
	} ?>
	<br>
	<!--Genera un numero aleatiorio entre el 1 y el 5 incluidos-->	
	<?php
		echo(rand(1, 5));
	?>

</body>
</html>
