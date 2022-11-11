<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 3.1</title>
</head>
<body align="center">
<?php 
  error_reporting(0)
?>
<h1>Actividad 3-1 (Portero de discoteca automático) </h1>
    <form action="Practica 3.1.php" method="post">
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

<h1>Actividad 3-2 (Dime la hora)</h1>
    <form action="Practica 3.1.php" method="post">
    <table align="center">
    <tr>
      <th>¿Qué hora es?</th>
      <td>
        <input type="text" name="hora" required></input>
      </td>
    </tr>
    <tr>
    </table>
    <input type="submit" name="enviar" value="Enviar"></input>
    </form>
  
  <?php 
  $hora = $_POST['hora'];
	switch ($_POST['hora']) 
    {
    case $hora>=6 and $hora<13:
      echo "buenos días";		
      break;
    case $hora>=13 and $hora<21:
      echo "buenas tardes";		
      break;
    case $hora<24 and $hora>=21 or $hora<6 and $hora>0:
      echo "buenas noches";		
      break;
		default:
      echo "No es una hora valida";
			break;
		}
	?>

<h1>Actividad 3-3 (Cueva de Gollum)</h1>
    <h2>Acierta la siguiente adivinanza o muere</h2>
    <p>“Esta cosa se devora a todas las cosas;</p>
    <p>Pájaros, bestias, árboles, flores;</p>
    <p>Carcome el hierro, muerde el acero;</p>
    <p>Muele duras piedras y las reduce a harina;</p>
    <p>Mata al rey, arruina la ciudad,</p>
    <p>Y derriba a la montaña.”</p>
    <form action="Practica 3.1.php" method="post">
    <table align="center">
    <tr>
      <td>
        <input type="text" name="respuesta" required></input>
      </td>
    </tr>
    <tr>
    </table>
    <input type="submit" name="enviar" value="Respueta Final"></input>
    </form>
  
  <?php 
  $respuesta = $_POST['respuesta'];
	if ($respuesta == 'Tiempo')
    {
      echo "Felicidades, no vas a morir";		
    } 
    else if ($respuesta == ' ')
    {
      echo " ";		
    } 
    else
    {
      echo "*Fuiste comido*";
    }
	?>

</body>
</html>