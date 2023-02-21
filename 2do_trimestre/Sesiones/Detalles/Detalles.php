<html>
  <head>
    <?php
      session_start();
      error_reporting(0);
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
</html>
<body>
<h3 style="text-align: center"><b><i><u>Tienda de Pablo G</u></i></b></h3>
<p>
  <div class="left"> 
<h3>Detalle del producto</h3><br>
<?php
  $valor = $_POST['valor'];
  $producto = $_SESSION['producto'];
  $elemento = $producto[$valor];
  ?>
  <img src="<?php echo $elemento['imagen']; ?>"  width="50" height="60" alt="<?php echo $elemento['nombre'];?>"><br>
  <?= $elemento["nombre"] ?><br>Precio: <?= $elemento["precio"] ?> €
  Unidades de este producto en el carrito: <?= $_SESSION["carrito"][$valor] ?>;
  <br><?= $elemento["detalles"] ?>
  <form action="Detalles.php" method="post">
    <input type="hidden" name="valor" value="<?= $valor ?>">
    <input type="hidden" name="accion" value="comprar">
    <input type="submit" value="Comprar">
  </form>
  <form action="carrito.php" method="post">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>
</body>