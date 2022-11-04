<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>
<body>
    <form action="switch.php" method="post">
    <table>
    <tr>
      <th>Numreo 1</th>
      <td>
        <input type="text" name="n1"></input>
      </td>
    </tr>
    <tr>
      <th>Numero 2</th>
      <td>
        <input type="text" name="n2"></input>
      </td>
    </tr>
    <tr>
      <td>
        <input type="radio" name="operacion" value="suma">Suma</input>
        <input type="radio" name="operacion" value="resta">Resta</input>
      </td>
      <td>
        <input type="radio" name="operacion" value="producto">Multiplicacion</input>
        <input type="radio" name="operacion" value="division">Division</input>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="enviar" value="ENVIAR"></input>
      </td>
    </tr>
  </table>
    </form>

    <?php 
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		switch ($_POST['operacion']) {
			case 'suma':
				echo "el resultado es ".$n1+$n2;		
				break;
			case 'resta':
				echo "el resultado es ".$n1-$n2;
				break;
			case 'producto':
				echo "el resultado es ".$n1*$n2;
				break;
			case 'division':
				echo "el resultado es ".$n1/$n2;
				break;
			default:
				# code...
				break;
		}
		 ?>
</body>
</html>