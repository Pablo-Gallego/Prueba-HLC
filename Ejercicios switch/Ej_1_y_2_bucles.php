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
<div id="Ejercicio1">
<h1>Ejercicio 1</h1>
    <?php
    $for = 5;
    for ($incremento= 0; $incremento <= 20; $incremento++) 
    {
        echo $for. " x " .$incremento. " = ". $for*$incremento;
        echo "<br>";
    }  
    ?>
</div>

<div id="Ejercicio2">
<h1>Ejercicio 2</h1>
    <?php
    $while = 5;
    $incremento = 0;
    while ($incremento <= 20) 
    {
        echo $while. " x " .$incremento. " = ". $while*$incremento;
        echo "<br>";
        $incremento++;
    }
    ?>
</div>

<div id="Ejercicio3">
<h1>Ejercicio 3</h1>
    <?php
    $dowhile = 5;
    $i = 0;
    do
    {
        echo $dowhile. " x " .$i. " = ". $dowhile*$i;
        echo "<br>";
        $i++;
    }while ($i <= 20) 
    ?>
</div>

<div id="Ejercicio4">
<h1>Ejercicio 4</h1>
    <?php
    for ($decremento = 320; $decremento >= 160; $decremento-=20) 
    {
        echo "Tu numero es " .$decremento;
        echo "<br>";
    }  
    ?>
</div>

<div id="Ejercicio5">
<h1>Ejercicio 5</h1>
    <?php
    $decremento = 320;
    while ($decremento >= 160) 
    {
        echo "Tu numero es " .$decremento;
        echo "<br>";
        $decremento-=20;
    }  
    ?>
</div>

<div id="Ejercicio6">
<h1>Ejercicio 6</h1>
    <?php
    $dodecremento = 320;
    do
    {
        echo "Tu numero es " .$dodecremento;
        echo "<br>";
        $dodecremento-=20;
    } while ($dodecremento >= 160) 
    ?>
</div>

<div id="Ejercicio7">
<h1>Ejercicio 7</h1>
<form method="post">
    <table align="center">
        <tr>
            <th>Pon la contraseña</th>
            <td>
                <input type="number" name="numero" min="0" max="9999" required></input>
            </td>
        </tr>
    </table>
    <input type="submit" name="enviar" value="Probar"></input>
    <input type="hidden" name="intentos" value="5"></input>
</form>
    <?php
    
    $numero =  $_POST['numero'];
    $intentos = $_POST['intentos'];
    do
        {
            if ($numero != 9999)
                {
                    echo "Lo siento, esa no es la combinación";
                    echo "<br>";
                    $intentos--;
                    echo "Te quedan " .$intentos. " intentos ";
                    PRINT <<< HERE
                    <form method="post">
                    <input type="submit" name="enviar" value="Segundo intento"></input>
                    <input type="hidden" name="intentos" value="4"></input>
                    </form>
                    <form method="post">
                    <input type="submit" name="enviar" value="Tercer intento"></input>
                    <input type="hidden" name="intentos" value="3"></input>
                    </form>
                    <form method="post">
                    <input type="submit" name="enviar" value="Cuarto intento"></input>
                    <input type="hidden" name="intentos" value="2"></input>
                    </form>
                    <form method="post">
                    <input type="submit" name="enviar" value="Ultimo intento"></input>
                    <input type="hidden" name="intentos" value="1"></input>
                    </form>
                    HERE;
                    echo "<br>";
                    break;
                }
            else if ($numero = 9999 and $numero!=0)
                {
                echo "La caja fuerte se ha abierto satisfactoriamente";
                $intentos-=5;
                }
            else if ($intentos=0)
                {
                    echo "No tienes intentos";
                }
        } while ($intentos > 0)
    ?>

</div>

</body>
</html>