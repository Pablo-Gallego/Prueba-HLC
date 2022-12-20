<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="Formulario_Arrays.php" method="post">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> <br><br>

    <label for="nombre">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"> <br><br>

    <label for="nombre">Direccion</label>
    <input type="text" name="direccion" id="direccion"> <br><br>

    <label for="nombre">Contraseña</label>
    <input type="password" name="contraseña" id="contraseña"> <br><br>

    <input type="submit" value="Enviar">

    <br><hr><br>
</form>

<?php

$valorFormulario = [];

    foreach ($_POST as $key => $value) {
    $valorFormulario[$key] = $value;
    }

    foreach ($valorFormulario as $llave => $valor) {
    echo $valor, '<br>';
    }

/*echo $valorFormulario['nombre'], '<br>';
echo $valorFormulario['apellidos'], '<br>';
echo $valorFormulario['direccion'], '<br>';
echo $valorFormulario['contraseña'], '<br>';*/

?>
   
</body>
</html>