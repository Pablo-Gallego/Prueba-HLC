
<html>
  <head>
      <style>

      div {
        margin: 5px;
        width: 50px;
        height: 150px;
      }

      .left {
        float: left;
      }

      .right {
        float: right;
      }
      </style>
  
  </head>
</html><body>
<h3 style="text-align: center"><b><i><u>Tienda de Pablo G</u></i></b></h3>
<p>
  <div class="left">
<h3>Productos</h3>
<?php // Declarar prductos

  $producto = array ( 
    "xenoverse" => array( "nombre" => "Dragon ball xenoverse", "precio" => 10, "imagen" => "xenoverse.jpg"),
    "xenoverse2" => array( "nombre" => "Dragon ball xenoverse 2", "precio" => 20, "imagen" => "xenoverse2.jpg"),
    "kakarot" => array( "nombre" => "Dragon ball kakarot", "precio" => 35, "imagen" => "kakarot.jpg"),
    "fighterz" => array( "nombre" => "Dragon ball fighterz", "precio" => 19.99, "imagen" => "fighterz.jpg")
  );

  foreach ($producto as $codigo => $elemento) {
    ?>
    <img src="<?php echo $elemento['imagen']; ?>"  width="50" height="60" alt="<?php echo $elemento['nombre'];?>"><br>
    <?=$elemento['nombre']?><br>Precio: <?=$elemento['precio']?> €
    <form action="carrito.php" method="post">
      <input type="hidden" name="codigo" value="<?=$codigo?>">
      <input type="hidden" name="accion" value="comprar">
      <input type="submit" value="Comprar">
    </form><br><br>
    <?php
  }					
  ?>	
  </div>
  <div class="right">
  <h3>Carrito</h3>
  <?php // Crear el carrito
  $accion = $_POST['accion'];
  $codigo = $_POST['codigo'];
  if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array ("xenoverse" => 0, "xenoverse2" => 0, "kakarot" => 0, "fighterz" => 0);
  }

  if ($accion == "comprar") {
    $_SESSION['carrito'][$codigo]++;
  }

  if ($accion == "eliminar") {
    $_SESSION['carrito'][$codigo]--;
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
        <input type="hidden" name="codigo" value="<?=$cod?>">
        <input type="hidden" name="accion" value="eliminar">
        <input type="submit" value="Eliminar">
      </form><br><br>
      <?php
    }
  }
  ?>
  <b>Total: <?=$total?> €</b>
  </tr>
  </div>
</p>
</body>