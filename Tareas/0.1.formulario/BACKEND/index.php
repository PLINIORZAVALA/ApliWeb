<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h2>Resultados del formulario</h2>
    <hr>
    <br>
    <?php
    // Función para realizar la lógica de procesamiento de los datos del formulario
    function procesarDatos($nombre, $carrera, $titulacion) {
        return "Nombre: $nombre<br>Carrera: $carrera<br>Método de Titulación: $titulacion<br>";
    }

    // Función para guardar los datos en un archivo
    function guardarDatos($nombre, $carrera, $titulacion) {
        $archivo = 'datos.txt';
        $datos = "Nombre: $nombre | Carrera: $carrera | Método de Titulación: $titulacion\n";
        file_put_contents($archivo, $datos, FILE_APPEND); // Guardar los datos al final del archivo
    }

    // Recibimos los datos del formulario
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $carrera = $_POST['carrera'];
        $titulacion = isset($_POST['titulacion']) ? $_POST['titulacion'] : '';

        // Procesar y mostrar los datos
        echo procesarDatos($nombre, $carrera, $titulacion);

        // Guardar los datos en el archivo
        guardarDatos($nombre, $carrera, $titulacion);
    }
    ?>
</body>
</html>
