<?php
    funtion burbuja($A, $n)
    {
        for($k=1; $k<$n-1; $n){
            for($i=1; $i<$n ; $i++)
            {
                if($A[$i]>A[$i+1]){
                    $temp = $A[i];
                    $A[$i] = $A[$i+1];
                    $A[$i+1] = $temp;
                }
            }
        }
        return $A;
    }
    $fp = fopen("alumnos.txt", "r"); 
    $n = 0;
    $suma = 0;
    $nota_maxima = -1; // Inicializar la nota máxima como un valor bajo
    $estudiante_maximo = ""; // Variable para guardar el nombre del estudiante con la nota más alta

    if ($fp) {
        while (!feof($fp)) {
            $line = fgets($fp);
            if (!empty(trim($line))) { // Para evitar líneas vacías
                $datos = explode(" ", $line);
                $n++;
                $promedio = floatval($datos[1]); // Convertir a número flotante
                echo "Estudiante $n: Nombre: $datos[0], Promedio: $promedio, Carrera: $datos[2] <br>";
                //Notas del arreglo
                for($i=1; $i<=$n; $i++)
                    echo "$promedio[$i]";
                // Sumar solo si el valor es numérico
                if (is_numeric($promedio)) {
                    $suma += $promedio;
                    // Verificar si esta es la nota máxima
                    if ($promedio > $nota_maxima) {
                        $nota_maxima = $promedio;
                        $may = $datos[1];
                        $nom = $datos[0];
                        $car = $datos[2];
                    }
                } else {
                    echo "Advertencia: Se encontró un valor no numérico para el promedio de $datos[0].<br>";
                }
            }
        }
        fclose($fp);

        $prome = burbuja
        if ($n > 0 && $suma > 0) {
            $prom = $suma / $n;
            echo "<br> Número de alumnos: $n <br>";
            echo "Promedio de los estudiantes: $prom <br>";
            echo "La nota máxima es $may, obtenida por $nom, su carrera $car <br>";
        } else {
            echo "No se encontraron datos válidos en el archivo.<br>";
        }
    } else {
        echo "Error al abrir el archivo.<br>";
    }
?>
