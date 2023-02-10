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
    <h1>Productos</h1>
    <table align='center'>
        <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Acción</th>
      </tr>
      <tr>
        <?php
        for ($x = 0; $x < 4; $x++)
        {echo "<tr>";
        for ($i = 0; $i < 3; $i++)
        {echo "<td>$producto[$i]</td>";}
        echo "<td><button type='imput' name='comprar'>Añadir al carrito</button></td>
        </tr>";
        }
        ?>
        <td><img src="product1.jpg" alt="producto 1"></td>
        <td>Producto 1</td>
        <td>$10</td>
        
      </tr>
      <tr>
        <td><img src="product2.jpg" alt="producto 2"></td>
        <td>Producto 2</td>
        <td>$20</td>
      </tr>
      <tr>
        <td><img src="product3.jpg" alt="producto 3"></td>
        <td>Producto 3</td>
        <td>$30</td>
      </tr>
      <tr>
        <td><img src="product4.jpg" alt="producto 4"></td>
        <td>Producto 4</td>
        <td>$40</td>
      </tr>
    </table>
    <h1>Carrito de compras</h1>
    <table>
      <tr>
        <th>Producto</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Acción</th>
      </tr>
      <!-- Lista de productos en el carrito -->
      <tr>
        <td>Producto 1</td>
        <td>2</td>
        <td>$20</td>
        <td><button type="button">Eliminar</button></td>
      </tr>
      <tr>
        <td>Producto 3</td>
        <td>1</td>
        <td>$30</td>
        <td><button type="button">Eliminar</button></td>
      </tr>
    </table>
</body>
</html>