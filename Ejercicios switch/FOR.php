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
    <!-- Se pide un script que pida inicialmente un número entero. 
    Ese número indicará la cantidad de personas de las que queremos introducir usuario y contraseña. 
    Realiza un bucle for() para la generación de elementos input del total de esos datos personales, 
    cada persona en un párrafo  -->
    <div id="ejercicio1">
        <h1 align="center">Ejercicio 1</h1>
        <p align="center">
        <form action="for.php" method="post">
            <table align="center">
                <tr>
                    <th>Introduce el número para los usuarios</th>
                    <td>
                        <input type="number" name="numero" required></input>
                </td>
                </tr>
            </table>
            <input type="submit" name="enviar" value="Crear"></input>
            </form>
            <?php 
            $numero = $_POST['numero'];
            if ($numero <= 0)
            {
                echo "Introduce un número positivo o mayor que 0";
            } else
            for ($i=1; $i <= $numero; $i++)
            {   
                PRINT <<< HERE
                <!DOCTYPE html>
                <html>
                <head>
                <meta charset="UTF-8">
                <title>Bucles</title>
                </head>
                <body align="center">
                <form>
                <table>
                    <tr>
                        <td>
                            Usuario
                        </td>
                        <td>
                            <input type="text" required></input>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Contraseña
                        </td>
                        <td>
                            <input type="text" required></input>
                        </td>
                    </tr>
                </table>
                </form>
                </body>
                </html>
                HERE;
                echo "<br>";
            }
            ?>
        </p>
    </div>


</body>
</html>