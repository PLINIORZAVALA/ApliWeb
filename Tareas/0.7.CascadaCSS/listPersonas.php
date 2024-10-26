<html>
<head>
    <title> Selección de Personas</title>
</head>
<body>
    <h2>Lista de Personas</h2>
    <hr>
    <?PHP
        $link = mysqli_connect("localhost", "root", "", "adopciones");
        if (!$link) {
            die('Error de conexión: ' . mysqli_connect_error());
        }

        $resultado = mysqli_query($link, "SELECT * FROM personas");
        if (!$resultado) {
            die('Error en la consulta: ' . mysqli_error($link));
        }

        echo "<table border='1'>";
        echo "<tr><td>ID_persona</td><td>Nombre</td><td>Adoptador</td></tr>";

        while ($reg = mysqli_fetch_array($resultado)) {
            $id = $reg['id_persona'];
            $nombre = $reg['nombre'];

            echo "<tr>";
            echo "<td>$id</td><td>$nombre</td>";
            // Enlace para modificar la persona
            echo "<td><a href='listAdoptados.php?nombre=$nombre'>Seleccionar</a></td>";
            echo "</tr>";
        }

        echo "</table>";

        mysqli_close($link);
    ?>
</body>
</html>

