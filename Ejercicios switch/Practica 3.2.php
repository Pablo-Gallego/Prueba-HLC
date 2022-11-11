<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 3.2</title>
</head>
<body align="center">
<?php 
  error_reporting(0)
?>

<h1>Actividad 3-4 (Montaña rusa)</h1>
    <form action="Practica 3.2.php" method="post">
    <table align="center">
    <tr>
        <th>Introduce tu nombre</th>
        <td>
            <input type="text" name="nombre" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce tu altura en cm</th>
        <td>
            <input type="text" name="altura" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce tu edad</th>
        <td>
            <input type="text" name="edad" required></input>
        </td>
    </tr>
    <tr>
        <th>¿Prometes no demandarnos?</th>
        <td class="demandarnos" align="center">
            <input type="radio" id="no" name="demanda" value="no">No<br>
            <input type="radio" id="si" name="demanda" value="si">Si<br>
        </td>
    </tr>
    </table>
    <input type="submit" name="enviar" value="Respueta Final"></input>
    </form>
  
  <?php 
  $nombre = $_POST['nombre'];
  $altura = $_POST['altura'];
  $edad = $_POST['edad'];
  $demanda = $_POST['demanda'];
  $fechaActual = date('dmYHis');
	if ($altura < 120 || $edad < 16 || $demanda == 'no')
    {
      echo "Tu no pasas";		
    } 
    else
    {
      echo $nombre.", ticket " . $fechaActual;
    }
	?>

</body>
</html>