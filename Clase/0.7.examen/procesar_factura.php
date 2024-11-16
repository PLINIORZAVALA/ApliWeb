<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente_id = $_POST['cliente'];
    $productos_cantidad = $_POST['cantidad'];

    // Calcular el subtotal
    $subtotal = 0;
    $detalles = [];

    foreach ($productos_cantidad as $producto_id => $cantidad) {
        $producto = mysqli_query($link, "SELECT * FROM productos WHERE id_producto = $producto_id");
        $producto_data = mysqli_fetch_assoc($producto);
        $costo_total = $producto_data['precio_unitario'] * $cantidad;
        $subtotal += $costo_total;

        // Agregar a los detalles de la factura
        $detalles[] = [
            'id_producto' => $producto_id,
            'cantidad' => $cantidad,
            'costo_total' => $costo_total
        ];
    }

    // Calcular IVA
    $iva = $subtotal * 0.16;

    // Calcular total
    $total = $subtotal + $iva;

    // Insertar la factura en la base de datos
    $fecha_factura = date('Y-m-d');
    $query_factura = "INSERT INTO facturas (id_cliente, fecha, subtotal, IVA, total) 
                      VALUES ('$cliente_id', '$fecha_factura', '$subtotal', '$iva', '$total')";
    if (mysqli_query($link, $query_factura)) {
        $id_factura = mysqli_insert_id($link);

        // Insertar detalles de la factura
        foreach ($detalles as $detalle) {
            $query_detalle = "INSERT INTO detalle_factura (id_factura, id_producto, cantidad, costo_total) 
                              VALUES ('$id_factura', '{$detalle['id_producto']}', '{$detalle['cantidad']}', '{$detalle['costo_total']}')";
            mysqli_query($link, $query_detalle);
        }

        // Mostrar el resumen de la factura generada
        echo "<h2>Factura generada exitosamente</h2>";
        echo "<p>Cliente: $cliente_id</p>";
        echo "<p>Subtotal: $$subtotal</p>";
        echo "<p>IVA (16%): $$iva</p>";
        echo "<p>Total: $$total</p>";
    } else {
        echo "Error al generar la factura: " . mysqli_error($link);
    }
}
?>
