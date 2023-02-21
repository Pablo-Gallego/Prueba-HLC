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
  $producto = $_SESSION['producto'];
  $elemento = $producto[$valor];
  
  ?>
  <img src="<?php echo $elemento['imagen']; ?>"  width="50" height="60" alt="<?php echo $elemento['nombre'];?>"><br>
  Unidades de este producto en el carrito: <?= $_SESSION["carrito"][$valor] ?>;
  <br><?= $elemento["detalles"] ?>
  <form action="Detalles.php" method="post">
    <input type="hidden" name="accion" value="comprar">
    <input type="submit" value="Comprar">
  </form>
  <form action="carrito.php" method="post">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>
</body>