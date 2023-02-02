<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio</title>
</head>
<?php
error_reporting(0)
?>
<?php
echo '
    <body align="center" style="background-color: '. $_COOKIE['fondo'] .'">
    <form action="ej2.php" method="post">
        <h1>Elige un nuevo color</h1>
        <p align="center">
            <input type="radio" name="color" value="red" required>
            <label for="rojo">Rojo</label><br>
            <input type="radio" name="color" value="green" required>
            <label for="verde">Verde</label><br>
            <input type="radio" name="color" value="blue" required>
            <label for="azul">Azul</label><br>
        </p>
        <input type="submit" name="enviar" value="Cambiar el color">
    </form>';
    if(isset($_POST['color']))
    {
        setcookie("fondo", $_POST['color'], time() + 60);
        echo "La cookie contiene el color: " . $_POST['color'];
    } else
    { 
        echo "Se ha producido un error";
    }
    echo "</body>";
?> 
</html>