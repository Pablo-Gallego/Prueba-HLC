
<h1>Portero pro2</h1>
<p>Dia/mes/año</p>
    <form action="Pro.php" method="post">
    <table align="center">
    <tr>
      <th>Intoduce tu fecha de nacimiento</th>
      <td>
        <input type="text" name="dia" required></input>
      </td>
      <td>
        <input type="text" name="mes" required></input>
      </td>
      <td>
        <input type="text" name="anno" required></input>
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
  $nacimiento = $_POST['dia'] + $_POST['mes']*30 + $_POST['anno']*365;
  $edad = 11+11*30+2022*365 - $nacimiento;
	switch ($edad) 
    {
    case $edad>=18*365 and $edad<65*365:
      echo "Entra";		
      break;
		case $edad<=18*365:
			echo "A la cama que es mu tarde";		
			break;
    case $edad>65*365:
      echo "La residencia es alli";		
      break;

		default:
      echo "No pasas";
			break;
		}
	?>

<h1>Portero pro2 v2</h1>
<p>Dia/mes/año</p>
    <form action="Pro.php" method="post">
    <table align="center">
    <tr>
      <th>Intoduce tu fecha de nacimiento</th>
      <td>
        <input type="text" name="dia" required></input>
      </td>
      <td>
        <input type="text" name="mes" required></input>
      </td>
      <td>
        <input type="text" name="anno" required></input>
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
  $nacimiento = date("$_POST['anno']-$_POST['mes']-$_POST['dia']");
  $fechaactual = date("Y-m-d");
  $edad = $fechaactual - $nacimiento;
	switch ($edad) 
    {
    case $edad>=18 and $edad<65:
      echo "Entra";		
      break;
		case $edad<=18:
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

<h1>Actividad 3-4 (Montaña rusa)</h1>
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
    else
    {
      echo "*Fuiste comido*";
    }
	?>
