<?php
session_start();

// Esto sirve para verificar si hay un carrito y crearlos si no existe
if (!isset($_SESSION['carrito'])) 
{
  $_SESSION['carrito'] = array();
}

// Array de productos
$productos = array(
    array("nombrePr" => "Dragon ball xenoverse", "descripcion" => "Este es el primer juego de la saga xenoverse", "precio" => 25, "imagen" => "xenoverse.jpg"),
    array("nombrePr" => "Dragon ball xenoverse 2", "descripcion" => "Este es el segundo juego de la saga xenoverse", "precio" => 10, "imagen" => "xenoverse2.jpg"),
    array("nombrePr" => "Dragon ball kakarot", "descripcion" => "Este es el primer juego de la saga kakarot", "precio" => 35, "imagen" => "kakarot.jpg"),
    array("nombrePr" => "Dragon ball fighterz", "descripcion" => "Este es el primer juego de la saga fighterz", "precio" => 25, "imagen" => "fighterz.jpg")
);

// Función para añadir un producto al carrito
function Anadir_Carro($producto)   
{
    global $_SESSION;
    if (isset($_SESSION['carrito'][$producto['nombrePr']])) 
    {
        $_SESSION['carrito'][$producto['nombrePr']]['cantidad']++;
    } else 
    {
        $_SESSION['carrito'][$producto['nombrePr']] = array(
        "cantidad" => 1,
        "precio" => $producto['precio']
      );
    }
}
  
// Función para eliminar un producto del carrito
function Borrar_Carro($producto_carro) {
    global $_SESSION;
    unset($_SESSION['carrito'][$producto_carro]);
}
  
    // Si se reciben datos desde un formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        // Si se ha pulsado el botón Comprar
        if (isset($_POST['comprar'])) 
        {
            Anadir_Carro($productos[$_POST['Procuctoss']]);
        }
        // Si se ha pulsado el botón Eliminar
        if (isset($_POST['borrar'])) 
        {
            Borrar_Carro($_POST['nombrePr']);
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tienda de Pablo Gallego</title>
    <style>
      th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #f2f2f2;
      }
      .cart {
        float: right;
        margin-right: 20px;
      }
    </style>
</head>
<body>
<table align='center'>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acción</th>
    </tr>
    <?php foreach ($productos as $index => $producto) { ?>
        <tr>
            <td><img src="<?php echo $producto['imagen']; ?>"  width="50" height="60" alt="<?php echo $producto['nombrePr'];?>"></td>
            <td><?php echo $producto['nombrePr']; ?></td>
            <td><?php echo $producto['precio']; ?></td>
            <td>
            <form action="" method="post">
                <input type="hidden" name="Procuctoss" value="<?php echo $index; ?>">
                <input type="submit" name="comprar" value="Añadir al carrito">
            </form>
        </td>
    </tr>
    <?php } 
    foreach ($_SESSION as $producto) {
        $total += $producto['precio'];
    }
    
    echo "El valor acumulado en el carrito es: $total";
    ?>
</table>
</body>
</html>