<?php
include('conexion.php');

// Obtener clientes y productos de la base de datos
$clientes = mysqli_query($link, "SELECT * FROM clientes");
$productos = mysqli_query($link, "SELECT * FROM productos");

if (!$clientes || !$productos) {
    die('Error en la consulta: ' . mysqli_error($link));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Factura</title>
</head>
<body>
    <h1>Generar Factura</h1>
    <form action="procesar_factura.php" method="POST">
        <!-- Selección de cliente -->
        <label for="cliente">Seleccionar Cliente:</label>
        <select name="cliente" id="cliente" required>
            <?php while ($row = mysqli_fetch_assoc($clientes)) { ?>
                <option value="<?php echo $row['id_cliente']; ?>"><?php echo $row['nombre']; ?></option>
            <?php } ?>
        </select><br><br>

        <!-- Selección de productos y cantidades -->
        <h3>Seleccionar Productos:</h3>
        <?php while ($producto = mysqli_fetch_assoc($productos)) { ?>
            <label for="producto<?php echo $producto['id_producto']; ?>"><?php echo $producto['nombre_producto']; ?> - $<?php echo $producto['precio_unitario']; ?>:</label>
            <input type="number" name="cantidad[<?php echo $producto['id_producto']; ?>]" min="1" value="1"><br><br>
        <?php } ?>

        <input type="submit" value="Generar Factura">
    </form>
</body>
</html>
