<html>
<head>
    <title>Selección de Personas</title>
</head>
<body>
    <h2>Lista de Personas que adoptan</h2>
    <hr>
    <?PHP
        $link = mysqli_connect("localhost", "root", "", "adopciones");
        if (!$link) {
            die('Error de conexión: ' . mysqli_connect_error());
        }

        $id_mascota = $_GET['id_mascota'];  // Captura el id_mascota enviado por el primer script

        $resultado = mysqli_query($link, "SELECT * FROM personas");
        if (!$resultado) {
            die('Error en la consulta: ' . mysqli_error($link));
        }

        echo "<table border='1'>";
        echo "<tr><td>ID_persona</td><td>Nombre</td><td>Seleccionar</td></tr>";

        while ($reg = mysqli_fetch_array($resultado)) {
            $id_persona = $reg['id_persona'];
            $nombre = $reg['nombre'];

            echo "<tr>";
            echo "<td>$id_persona</td><td>$nombre</td>";
            // Al hacer clic en seleccionar, pasa el id_persona y el id_mascota al siguiente script para almacenarlos en adopciones
            echo "<td><a href='insertAdopcion.php?id_mascota=$id_mascota&id_persona=$id_persona'>Seleccionar</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        mysqli_close($link);
    ?>
</body>
</html>
