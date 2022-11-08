<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch Ej.2</title>
</head>
<body align="center">
<h1>Portero</h1>
    <form action="Tema_3.php" method="post">
    <table align="center">
    <tr>
      <th>Intoduce tu fecha de nacimiento</th>
      <td>
        <input type="text" name="nacimiento" required></input>
      </td>
    </tr>
    <tr>
    </table>
    <input type="submit" name="enviar" value="Enviar"></input>
    </form>
  <?php 
  error_reporting(0)
  ?>
  <?php 
  $nacimiento = $_POST['nacimiento'];
  $edad = 2022 - $nacimiento;
	switch ($edad) 
    {
    case $edad>18 and $edad<65:
      echo "Entra";		
      break;
		case $edad<18:
			echo "A la cama que es mu tarde";		
			break;
    case $edad>65:
      echo "La residencia es alli";		
      break;

		default:
      echo "No pasas";
			break;
		}
	?>
</body>
</html>