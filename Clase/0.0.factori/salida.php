<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Factorial</title>
</head>
<body>
    <h2>Calcular el factorial de un número</h2>
    <hr>
    <br>
    <?php
    function factorial($n)
    {
        $prod = 1;
        for ($i = 1; $i <= $n; $i++) {
            $prod *= $i;
        }
        return $prod;
    }

    if (isset($_POST['numero'])) {
        $x = intval($_POST['numero']); // Convertir a entero para evitar problemas
        $res = factorial($x);
        echo "El factorial de $x = $res <br>";

        // Abrimos el archivo en modo de "write" (w) para sobrescribir
        $fp = fopen("Salida.txt", "w"); 
        fprintf($fp, "El factorial de %d = %d \n", $x, $res); // Corrección de la sintaxis en fprintf
        fclose($fp); // Cerramos el archivo
    }
    ?>
</body>
</html>
