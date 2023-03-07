<?php
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $domicilio = $_POST['domicilio'];
  $codigo_postal = $_POST['codigo_postal'];
  $localidad = $_POST['localidad'];
  $provincia = $_POST['provincia'];
  // Esto es lo que introducira
  $datos = "Nombre: ".$nombre."\n".
  "Apellidos: ".$apellidos."\n".
  "Domicilio: ".$domicilio."\n".
  "Código Postal: ".$codigo_postal."\n".
  "Localidad: ".$localidad."\n".
  "Provincia: ".$provincia."\n";
  // archivo que queremos sobreescribir
  $archivo = "datos.txt";
  if (file_exists($archivo)) {
    $manejador = fopen($archivo, 'a');
    fwrite($manejador, $datos);
    fclose($manejador);
  } else {
    $manejador = fopen($archivo, 'w');
    fwrite($manejador, $datos);
    fclose($manejador);
  }
  echo "Los datos se han guardado correctamente.";
  echo "<ul> 
  <li> Nombre: ".$nombre. 
  "<li> Apellidos: ".$apellidos. 
  "<li> Domicilio: ".$domicilio.
  "<li> Código Postal: ".$codigo_postal.
  "<li> Localidad: ".$localidad.
  "<li> Provincia: ".$provincia.
  "</ul>"
  
?>