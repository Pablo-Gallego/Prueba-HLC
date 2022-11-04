<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>
<body align="center">
    <form action="switch.php" method="post">
    <table align="center">
    <tr>
      <th>Número 1</th>
      <td>
        <input type="text" name="primero" required></input>
      </td>
    </tr>
    <tr>
      <th>Número 2</th>
      <td>
        <input type="text" name="segundo" required></input>
      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="operacion" value="suma">Suma</input>
        <input type="radio" name="operacion" value="resta">Resta</input>
      </td>
      <td>
        <input type="radio" name="operacion" value="multiplicacion">Multiplicacion</input>
        <input type="radio" name="operacion" value="division">Division</input>
      </td>
    </tr>
    </table>
    <input type="submit" name="enviar" value="Enviar"></input>
    </form>

    <?php 
		$primero = $_POST['primero'];
		$segundo = $_POST['segundo'];
		switch ($_POST['operacion']) 
        {
		case 'suma':
			echo "El resultado de la suma es ".$primero+$segundo;		
			break;
		case 'resta':
			echo "El resultado de la resta es ".$primero-$segundo;
			break;
		case 'multiplicacion':
			echo "El resultado de la multiplicación es ".$primero*$segundo;
			break;
		case 'division':
			echo "El resultado de la división es ".$primero/$segundo;
			break;
		default:
      echo "No se puede realizar la cuenta";
			break;
		}
		 ?>
</body>
</html>