<html>
  <head>
    <?php
      session_start();
      error_reporting(0)
    ?>
      <style>
      div {   
        margin: 400px;
        width: 50px;
        height: 150px;
      }

      .left {
        margin-top: 0px;
        float: left;
      }

      .right {
        margin-top: -550px;
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
    "xenoverse" => array( "nombre" => "Dragon ball xenoverse", "precio" => 10, "imagen" => "xenoverse.jpg", "detalles" => "juego de dragon ball xenoverse"),
    "xenoverse2" => array( "nombre" => "Dragon ball xenoverse 2", "precio" => 20, "imagen" => "xenoverse2.jpg", "detalles" => "segundo juego de dragon ball xenoverse"),
    "kakarot" => array( "nombre" => "Dragon ball kakarot", "precio" => 35, "imagen" => "kakarot.jpg", "detalles" => "juego de dragon ball basado en la historia de son goku"),
    "fighterz" => array( "nombre" => "Dragon ball fighterz", "precio" => 19.99, "imagen" => "fighterz.jpg", "detalles" => "juego en 2D de dragon ball fighterz")
  );

  foreach ($producto as $valor => $juego) {
    ?>
    <img src="<?php echo $juego['imagen']; ?>"  width="50" height="60" alt="<?php echo $juego['nombre'];?>"><br>
    <?=$juego['nombre']?><br>Precio: <?=$juego['precio']?> €
    <form action="carrito.php" method="post">
      <input type="hidden" name="valor" value="<?=$valor?>">
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
  $valor = $_POST['valor'];
  if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array ("xenoverse" => 0, "xenoverse2" => 0, "kakarot" => 0, "fighterz" => 0);
  }

  if ($accion == "comprar") {
    $_SESSION['carrito'][$valor]++;
  }

  if ($accion == "eliminar") {
    $_SESSION['carrito'][$valor]--;
  }

  // Contenido del carrito
  $total = 0;
  foreach ($producto as $valor => $juego) {
    if ($_SESSION['carrito'][$valor] > 0) {
      $total = $total + ($_SESSION['carrito'][$valor] * $juego['precio']);
      ?>
      <img src="<?php echo $juego['imagen']; ?>"  width="50" height="60" alt="<?php echo $juego['nombre'];?>"><br>
      <?=$juego['nombre']?><br>Precio: <?=$juego['precio']?> €<br>
      Unidades: <?=$_SESSION['carrito'][$valor]?>
      <form action="carrito.php" method="post">
        <input type="hidden" name="valor" value="<?=$valor?>">
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