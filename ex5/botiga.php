<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botiga</title>
</head>
<body>
    <?php
    // Leer el archivo de productos
    $productos = file('productes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    ?>

    <form action="botiga.php" method="post">
        <div>
            <label for="nombre">Nombre de usuario:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        
        <h3>Productos disponibles:</h3>
        <?php
        // Crear checkbox para cada producto
        foreach ($productos as $producto) {
            echo '<div>';
            echo '<input type="checkbox" name="productos[]" value="' . htmlspecialchars($producto) . '" id="' . htmlspecialchars($producto) . '">';
            echo '<label for="' . htmlspecialchars($producto) . '">' . htmlspecialchars($producto) . '</label>';
            echo '</div>';
        }
        ?>
        
        <button type="submit">Realizar pedido</button>
    </form>

    <?php
    // Procesar el formulario cuando se envía
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['nombre']) && isset($_POST['productos'])) {
            $nombre = $_POST['nombre'];
            $productosSeleccionados = $_POST['productos'];
            
            // Crear la línea del pedido
            $lineaPedido = $nombre . ',' . implode(',', $productosSeleccionados) . "\n";
            
            // Guardar en comandes.txt
            file_put_contents('comandes.txt', $lineaPedido, FILE_APPEND);
            
            echo "<p>¡Pedido realizado con éxito!</p>";
        }
    }
    ?>
</body>
</html>