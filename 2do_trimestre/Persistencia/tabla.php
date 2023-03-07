<?php
$datos = array();
// En la variable $archivo abre datos.txt con permiso de lectura
$archivo = fopen("datos.txt", "r") or die("No se puede abrir el archivo.");

// Leer el archivo línea por línea y agregar los datos a $datos
while (!feof($archivo)) {
  $linea = fgets($archivo);         
  $celdas = explode(":", $linea);
  array_push($datos, $celdas);
}
// Cerrar conexión 
fclose($archivo);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tabla de archivo txt</title>
  </head>
  <body>
    <table border="1px">
        <tr>
          <th>Variable</th>
          <th>Valor</th>
        </tr>
        <!-- Recorrer $datos y mostrar los datos en la tabla -->
        <?php foreach ($datos as $fila): ?>
          <tr>
          <?php foreach ($fila as $celda):
            echo "<td> $celda</td>";
          endforeach; ?>  
        </tr>
        <?php endforeach; ?>
    </table>
  </body>
</html>