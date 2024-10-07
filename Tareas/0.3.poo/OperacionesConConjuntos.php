<?php
// Incluir la clase Conjunto
require_once 'Conjunto.php';

// Obtener los datos del formulario si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la cantidad de datos para cada conjunto desde el formulario
    $cantidad_conjunto1 = intval($_POST['cantidad_conjunto1']);
    $cantidad_conjunto2 = intval($_POST['cantidad_conjunto2']);

    // Verificar que las cantidades estén en el rango permitido
    if (($cantidad_conjunto1 < 1 || $cantidad_conjunto1 > 20) || ($cantidad_conjunto2 < 1 || $cantidad_conjunto2 > 20)) {
        echo "Las cantidades de datos deben estar entre 1 y 20.";
        exit;
    }

    // Crear las instancias de la clase Conjunto
    $conjunto1 = new Conjunto($cantidad_conjunto1);
    $conjunto2 = new Conjunto($cantidad_conjunto2);

    // Mostrar los conjuntos generados
    echo "<h3>Conjunto 1 (Tamaño: {$conjunto1->getTamano()}):</h3> " . implode(", ", array: $conjunto1->getDatos()) . "<br><br>";
    echo "<h3>Conjunto 2 (Tamaño: {$conjunto2->getTamano()}):</h3> " . implode(", ", $conjunto2->getDatos()) . "<br><br>";

    // Obtener y mostrar la intersección de los conjuntos
    $interseccion = Conjunto::interseccion($conjunto1, $conjunto2);
    echo "<h3>Intersección:</h3> " . (empty($interseccion) ? "No hay elementos comunes" : implode(", ", $interseccion)) . "<br><br>";

    // Obtener y mostrar la unión de los conjuntos
    $union = Conjunto::union($conjunto1, $conjunto2);
    echo "<h3>Unión:</h3> " . implode(", ", $union) . "<br><br>";

    // Obtener y mostrar la diferencia del conjunto 1 respecto al conjunto 2
    $diferencia = Conjunto::diferencia($conjunto1, $conjunto2);
    echo "<h3>Diferencia (Conjunto 1 - Conjunto 2):</h3> " . (empty($diferencia) ? "No hay elementos únicos en el Conjunto 1" : implode(", ", $diferencia)) . "<br>";
}
?>
