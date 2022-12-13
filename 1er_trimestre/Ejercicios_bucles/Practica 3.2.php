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
<div id="3-4">
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
</div>
<div id="3-5">
<h1>Actividad 3-5 (Somos matemáticos)</h1>
    <form action="Practica 3.2.php" method="post">
    <table align="center">
    <tr colspam=2>
        <th>Introduce las variables para la ecuación (ax + b = 0)</th>
    </tr>
    <tr>
        <th>Introduce el valor de a</th>
        <td>
            <input type="number" name="a" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce el valor de b</th>
        <td>
            <input type="number" name="b" required></input>
        </td>
    </tr>
    </table>
    <input type="submit" name="enviar" value="Hacer la cuenta"></input>
    </form>
    <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($a == 0) 
        {
            echo "La unica solución para a = 0 es b = 0";
        } else 
        {
            echo "x = ", -$b/$a;
        }
    ?>
</div>
<div id="3-6">
<h1>Actividad 3-6 (Calculadora de newsletter)</h1>
    <form action="Practica 3.2.php" method="post">
    <table align="center">
    <tr>
        <th>Introduce el numero de mensajes que quieres enviar</th>
        <td>
            <input type="number" name="copias" required></input>
        </td>
    </tr>
    <tr>
        <th>¿Poner un seguro por 0,1€ el mensaje?</th>
        <td class="demandarnos" align="center">
            <input type="radio" id="no" name="seguro" value="no">no<br>
            <input type="radio" id="si" name="seguro" value="si">si<br>
        </td>
    </tr>
    </table>
    <input type="submit" name="enviar" value="Precio total"></input>
    </form>
    
    <?php
        $copias = $_POST['copias'];
        $seguro = $_POST['seguro'];
        if ($copias >= 0 and $copias <= 2000 and $seguro == "no") 
        {
            $copias = $copias*0;
            echo "Tienes que pagar " .($copias). " €";
        } 
        else if ($copias >= 0 and $copias <= 2000 and $seguro == "si") 
        {
            $copias =$copias*0+$copias*1/10;
            echo "Tienes que pagar " .($copias). " €";
        }
        else if ($copias >= 2001 and $copias <= 10000 and $seguro == "no") 
        {
            $copias =$copias*7/10;
            echo "Tienes que pagar " .($copias). " €";
        } 
        else if ($copias >= 2001 and $copias <= 10000 and $seguro == "si") 
        {
            $copias =$copias*7/10+$copias*1/10;
            echo "Tienes que pagar " .($copias). " €";
        }
        else if ($copias > 10001 and $seguro == "no") 
        {
            $copias =$copias*2/10;
            echo "Tienes que pagar " .($copias). " €";
        } 
        else if ($copias > 10001 and $seguro == "si") 
        {
            $copias =$copias*2/10+$copias*1/10;
            echo "Tienes que pagar " .($copias). " €";
        }
        else 
        {
            echo "El numero no es valido";
        }
    ?>
</div>
<div id="3-7">
<h1>Actividad 3-7 (Papelería online)</h1>
    <form action="Practica 3.2.php" method="post">
    <table align="center">
    <tr>
        <th>Introduce el número de serie</th>
        <td>
            <input type="number" name="serie" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce el nombre</th>
        <td>
            <input type="text" name="nombre" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce el precio</th>
        <td>
            <input type="number" name="precio" required></input>
        </td>
    </tr>
    <tr>
        <th>Introduce el imagen</th>
        <td>
            <input type="file" name="imagen" required></input>
        </td>
    </tr>
    </table>
    <input type="submit" name="enviar" value="Subir producto"></input>
    </form>

</div>
</body>
</html>