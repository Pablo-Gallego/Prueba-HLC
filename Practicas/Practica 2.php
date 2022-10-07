<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
<h1>Los datos untroducidos</h1>
<p>El valor del nombre es: <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?></p><br>
<p>El valor del curso es: <?php isset($_POST["Curso"]) ? print $_POST["Curso"] : ""; ?></p><br>
<p>El valor de la edad es: <?php isset($_POST["Edad"]) ? print $_POST["Edad"] : ""; ?></p><br>
<p>El valor del usuario es: <?php isset($_POST["usuario"]) ? print $_POST["usuario"] : ""; ?></p><br>
<p>El valor de la contraseña es: <?php isset($_POST["password"]) ? print $_POST["password"] : ""; ?></p>

</body>
</html>