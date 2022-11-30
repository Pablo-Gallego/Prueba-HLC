<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>switch</title>
</head>
<body align="center">
<?php
error_reporting(0)
?>
    <h1>Loteria</h1>
    <form action="loteria.php" method="post">
    <table align="center">
        <tr>
            <th>Mete el número de tu cupon</th>
            <td>
                <input type="number" name="cupon" minlength="5" max="99999" ></input>
            </td>
        </tr>
    </table>
    <input type="submit" name="enviar" value="Probar suerte"></input>
    </form>
    <?php 
		$cupon = $_POST['cupon'];
		$loteria = rand(0,99999);
		if($cupon==$loteria)
        {	
		    echo "Te ha tocado la loteria"; 
	    }
        else 
        {
            echo "Prueba otra vez, el numero era " .str_pad($loteria, 5, '0', STR_PAD_LEFT); 
        }
	?>
    </td>
    <h1>Cumpleaños</h1>
    <form action="loteria.php" method="post">
    <table align="center">
        <tr>
            <th>Introduce tu Cumpleaños</th>
            <td>
                <input type="date" name="fecha"></input>
            </td>
        </tr>
    </table>
    <input type="submit" name="enviar" value="¿Es tu cumpleaños?"></input>
    </form>
    <?php 
        $fecha = $_POST['fecha'];
        $hoy = date("Y-m-d");
        if(date('m-d') == date('m-d', $fecha)) 
            {
                echo "Es tu cumpleaños";
            }
            else
            {
                echo "No es tu cumpleaños";
            }
	?>
    </td>
</body>
</html>