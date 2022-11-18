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

        <p align="center">
        <form action="pollos.php" method="post">
            <table align="center">
                <tr>
                    <th>Introduce el número para la suma</th>
                    <td>
                        <input type="number" name="numero" required></input>
                </td>
                </tr>
            </table>
            <input type="submit" name="enviar" value="Sumar"></input>
            </form>
            <?php 
            $numero = $_POST['numero'];
            $suma = 1;
            for ($suma > 0; $suma < 10;)
            {   
                echo $numero. "+" . $suma." = ";
                echo $numero+$suma."<br />";
                $numero = $numero+$suma;
                $suma++;
            }
            ?>
        </p>
    </div>


</body>
</html>