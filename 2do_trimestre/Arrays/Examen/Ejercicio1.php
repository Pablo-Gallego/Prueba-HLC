<?php
$numero = $_POST['numero'];
for ($i=0; $i < $numero; $i++)
{   
    echo "
    <body align='center'>
    <form action='Ej1.php' method='post'>
    <p>Nombre de la película:</p>
    <input type='text' name='peliculas[]'>";
}
echo "<br><input type='submit' name='Añadir' value='Añadir'> 
</form>";
echo "<br>";
?>