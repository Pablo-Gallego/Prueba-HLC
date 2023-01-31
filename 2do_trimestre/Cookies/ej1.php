<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio</title>
</head>
<body align="center">
    <?php
    print <<<HERE
    <form action="ej1.php" method="post">
        <h1>Elige un nuevo color</h1>
        <p align="center">
            <input type="radio" id="rojo" name="color" value="rojo" required>
            <label for="rojo">Rojo</label><br>
            <input type="radio" id="verde" name="color" value="verde" required>
            <label for="verde">Verde</label><br>
            <input type="radio" id="azul" name="color" value="azul" required>
            <label for="azul">Azul</label><br>
        </p>
        <input type="submit" name="enviar" value="Cambiar el color"/>
    </form>
    HERE;
    $color = $_POST['color'];
    if($color == "rojo"){
        echo "rojo";
    } else if ($color == "verde") { 
        echo "verde";
    } else if ($color == "azul") { 
        echo "azul";
    } else{ 
        echo "Se ha producido un error";
    }
    ?> 
</body>
</html>