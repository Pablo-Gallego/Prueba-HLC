<?php
function login($n)
{
    $nombre = ["pablo","paco","manu","sole","dani"];
    $pass = ["pablopass","pacopass","manupass","solepass","danipass"];
    echo "Su nombre de usuario es " .$nombre[$n]. " y su contraseña es ". $pass[$n];
}
login(1); echo "<br>";
?>
