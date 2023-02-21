<html>
  <head>
    <?php
      session_start();
      error_reporting(0);
    ?>
  </head>
</html>
<body align="center">
<h3 style="text-align: center"><b><i><u>Tienda de Pablo G</u></i></b></h3>
<p>
<h3>Detalles del producto</h3><br>
<?php
  $valor = $_POST['valor'];

  $producto = array ( 
    "xenoverse" => array( "nombre" => "Dragon ball xenoverse", "precio" => 10, "imagen" => "xenoverse.jpg", "detalles" => "juego de dragon ball xenoverse"),
    "xenoverse2" => array( "nombre" => "Dragon ball xenoverse 2", "precio" => 20, "imagen" => "xenoverse2.jpg", "detalles" => "segundo juego de dragon ball xenoverse"),
    "kakarot" => array( "nombre" => "Dragon ball kakarot", "precio" => 35, "imagen" => "kakarot.jpg", "detalles" => "juego de dragon ball basado en la historia de son goku"),
    "fighterz" => array( "nombre" => "Dragon ball fighterz", "precio" => 19.99, "imagen" => "fighterz.jpg", "detalles" => "juego en 2D de dragon ball fighterz")
  );

  $numero = $producto[$valor];
  
  ?>
  <img src="<?php echo $numero['imagen']; ?>"  width="50" height="60" alt="<?php echo $numero['nombre'];?>"><br><?=$juego['nombre']?><br>
  Precio: <?=$numero['precio']?> €<br>
  Unidades de este producto en el carrito: <?= $_SESSION["carrito"][$valor] ?>;
  <br><?= $numero["detalles"] ?>
  <form action="carrito.php" method="post">
    <input type="hidden" name="accion" value="comprar">
    <input type="submit" value="Comprar">
  </form>
  <form action="carrito.php" method="post">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>
</body>