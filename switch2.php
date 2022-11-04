<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>
<body align="center">
  <h1>Dia de la semana</h1>
  <p>Pon la primera letra en mayuscula y no uses tildes</p>
    <form action="switch2.php" method="post">
    <table align="center">
    <tr>
      <th>Elige un dia</th>
      <td>
        <input type="text" name="Dia" required></input>
      </td>
    </tr>
    <tr>
    </table>
    <input type="submit" name="enviar" value="Enviar"></input>
    </form>

  <?php 
  $Dia = $_POST['Dia'];
	switch ($_POST['Dia']) 
    {
		case 'Lunes':
			echo "Hoy es ".$Dia;		
			break;
    case 'Martes':
      echo "Hoy es ".$Dia;		
      break;
    case 'Miercoles':
      echo "Hoy es ".$Dia;		
      break;
    case 'Jueves':
			echo "Hoy es ".$Dia;	
      break;
    case 'Viernes':
      echo "Hoy es ".$Dia;		
      break;
    case 'Sabado':
      echo "Hoy es ".$Dia;		
      break;
    case 'Domingo':
      echo "Hoy es ".$Dia;		
      break;
    case 'lunes' or 'martes' or 'miercoles' or 'jueves' or 'viernes' or 'sabado' or 'domingo':
      echo "No has puesto la primera en mayuscula";		
      break;	
		default:
      echo "No has elegido ningun dia";
			break;
		}
	?>
</body>
</html>