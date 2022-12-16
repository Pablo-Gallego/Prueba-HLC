<table border="1">
        <tr>
            <th>Número</th>
            <td>
            <p align="center">
            <!-- Número -->
            <?php
            $numero = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
            $i = count($numero);
            for($x = 0; $x < $i; $x++) 
            {
                echo $numero[$x];
                echo "<br>";
            }
            ?>
            </p>
            </td>


            <th>Cuadrado</th>
            <td>
            <p align="center">
            <!-- Cuadrado -->
            <?php
            $numero = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
            $i = count($numero);
            for($x = 0; $x < $i; $x++) 
            {
                echo $numero[$x]*$numero[$x];
                echo "<br>";
            }
            ?>
            </p>
            </td>


            <th>Cubo</th>
            <td>
            <p align="center">
            <!-- Cubo -->
            <?php
            $numero = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
            $i = count($numero);
            for($x = 0; $x < $i; $x++) 
            {
                echo $numero[$x]*$numero[$x]*$numero[$x];
                echo "<br>";
            }
            ?>
            </p>
            </td>
        </tr>
</table>
