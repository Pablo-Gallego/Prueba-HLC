<h3 style="text-align: center">Tienda on-line <b><i><u>La Estilográfica</u></i></b></h3>
<table style="border: 2px; margin: 0px 30px 0px 30px;"><tr><td>
<h3>Productos</h3><hr>
<?php // Tienda ///////////////////////////////////////////////////////

  $producto = array ( 
    "xenoverse" => array( "nombre" => "Dragon ball xenoverse", "precio" => 545, "imagen" => "xenoverse.jpg"),
    "xenoverse2" => array( "nombre" => "Dragon ball xenoverse 2", "precio" => 406, "imagen" => "xenoverse2.jpg"),
    "kakarot" => array( "nombre" => "Dragon ball kakarot", "precio" => 180, "imagen" => "kakarot.jpg"),
    "fighterz" => array( "nombre" => "Dragon ball fighterz", "precio" => 103.55, "imagen" => "fighterz.jpg")
  );

  foreach ($producto as $codigo => $elemento) {
    ?>
    <img src="<?php echo $elemento['imagen']; ?>"  width="50" height="60" alt="<?php echo $elemento['nombre'];?>"><br>
    <?=$elemento['nombre']?><br>Precio: <?=$elemento['precio']?> €
    <form action="carrito.php" method="post">
      <input type="hidden" name="ejercicio" value="05">
      <input type="hidden" name="codigo" value="<?=$codigo?>">
      <input type="hidden" name="accion" value="comprar">
      <input type="submit" value="Comprar">
    </form><br><br>
    <?php
  }					
  ?>

  </td><td>			
  <h3>Carrito</h3><hr>

  <?php // Carrito ///////////////////////////////////////////////////////
  $accion = $_POST['accion'];
  $codigo = $_POST['codigo'];

  // Inicializa el carrito la primera vez
  if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array ("xenoverse" => 0, "xenoverse2" => 0, "kakarot" => 0, "fighterz" => 0);
  }

  if ($accion == "comprar") {
    $_SESSION['carrito'][$codigo]++;
  }

  if ($accion == "eliminar") {
    $_SESSION['carrito'][$codigo] = 0;
  }

  // Muestra el contenido del carrito
  $total = 0;
  foreach ($producto as $cod => $elemento) {
    if ($_SESSION['carrito'][$cod] > 0) {
      $total = $total + ($_SESSION['carrito'][$cod] * $elemento['precio']);
      ?>
      <img src="<?php echo $elemento['imagen']; ?>"  width="50" height="60" alt="<?php echo $elemento['nombre'];?>"><br>
      <?=$elemento['nombre']?><br>Precio: <?=$elemento['precio']?> €<br>
      Unidades: <?=$_SESSION['carrito'][$cod]?>
      <form action="carrito.php" method="post">
        <input type="hidden" name="ejercicio" value="05">
        <input type="hidden" name="codigo" value="<?=$cod?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      <?php
    }
  }
  ?>
  <b>Total: <?=$total?> €</b>
  </td>
  </tr>
</table>