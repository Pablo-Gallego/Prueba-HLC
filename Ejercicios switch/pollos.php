<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bucles</title>
</head>
<body align="center">
    <?php 
        error_reporting(0)
    ?>
    <div id="whilepollos">
        <h1>While de pollos</h1>
        <?php
            $pollos = 20;
            while ($pollos > 0) 
            {
                echo "Quedan por repartir " .$pollos. " pollos";
                echo "<br>";
                $pollos = $pollos -1;
            } 
            while ($pollos == 0) 
            {
                $pollos = $pollos -1;
                echo "Ya no quedan pollos";
                echo "<br>";
            }
        ?>
    </div>
    
    <div id="piramides">
        <h1 align="center">Piramide</h1>
        <p align="center">
        <?php 
        $piramide = 1;
        $cadena= null;
        $filas = 9;
            for ($piramide <9; $filas > 1;)
            {
                $cadena .= "*";   /* es lo mismo que $cadena=$cadena . '*'; */
                $filas--;
                echo $cadena."<br />";
            }
        ?>
        </p>
    </div>

    <div id="sumas">
    <h1 align="center">Sumas</h1>
        <?php 
        $numero = 1;
        $suma = 1;
            for ($suma > 0; $suma < 10;)
            {   
                echo $numero. "+" . $suma." = ";
                echo $numero+$suma."<br />";
                $numero = $numero+$suma;
                $suma++;
            }
        ?>
    </div>
    <!-- Se pide un script que pida inicialmente un número entero. 
    Ese número indicará la cantidad de personas de las que queremos introducir usuario y contraseña. 
    Realiza un bucle for() para la generación de elementos input del total de esos datos personales, 
    cada persona en un párrafo  -->
    <div id="ejercio">
        <h1 align="center">Ejercio 1</h1>
        <p align="center">
        <form action="pollos.php" method="post">
            <table align="center">
                <tr>
                    <th>Introduce el número para los usuarios</th>
                    <td>
                        <input type="number" name="numero" required></input>
                </td>
                </tr>
            </table>
            <input type="submit" name="enviar" value="Sumar"></input>
            </form>
            <?php 
            $numero = $_POST['numero'];
            if ($numero <= 0)
            {
                echo "Introduce un número positivo o mayor que 0";
            } else
            for ($numero > 0; $numero < 100;)
            {   
                 
                
            }
            ?>
        </p>
    </div>


</body>
</html>