<?php 
// Definición de la función 
function cuentaAtras() { 
	echo "<p>";
    echo "Cuenta ...";
    echo "</p>\n"; 
    for ($i=9; $i>=0; $i--) {
        echo $i."...";
    }
} 
// Llamada a la función 
cuentaAtras();
echo "<p>Otra vez.</p>";
cuentaAtras();
?>
