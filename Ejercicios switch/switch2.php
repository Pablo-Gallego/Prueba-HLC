<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>
<body align="center">
  <h1>Dia de la semana</h1>
  <p>No uses tildes</p>
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
    case 'lunes':
			echo "Hoy es ".$Dia;		
			break;
    case 'Martes':
    case 'martes':
      echo "Hoy es ".$Dia;		
      break;
    case 'Miercoles':
    case 'miercoles':
      echo "Hoy es ".$Dia;		
      break;
    case 'Jueves':
    case 'jueves':
			echo "Hoy es ".$Dia;	
      break;
    case 'Viernes':
    case 'viernes':
      echo "Hoy es ".$Dia;		
      break;
    case 'Sabado':
    case 'sabado':
      echo "Hoy es ".$Dia;		
      break;
    case 'Domingo':
    case 'domingo':
      echo "Hoy es ".$Dia;		
      break;
		default:
      echo "No has elegido ningun dia";
			break;
		}
	?>
</body>
</html>