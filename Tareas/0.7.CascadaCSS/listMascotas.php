<html>
<head>
    <title>Consulta de Adopciones</title>
</head>
<body>
    <h2>Lista de Mascotas para Adopción</h2>
    <hr>
    <?php
    $link = mysqli_connect("localhost", "root", "", "adopciones");
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $resultado = mysqli_query($link, "SELECT * FROM mascotas");
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($link));
    }

    echo "<table border='1'>";
    echo "<tr><td>Nombre</td><td>Raza</td><td>Edad</td><td>Imagen</td></tr>";

    while ($reg = mysqli_fetch_array($resultado)) {
        $id = $reg['id_mascota'];
        $nombre = $reg['nombre'];
        $raza = $reg['raza'];
        $edad = $reg['edad'];
        $imagen = $reg['imagen'];

        echo "<tr>";
        echo "<td>$nombre</td><td>$raza</td><td>$edad</td>";
        echo "<td><a href='listPersonas.php?id_mascota=$id'><img src='MisImage/$imagen' width='70' height='70'></a></td>";
        echo "</tr>";
    }

    echo "</table>";

    mysqli_close($link);
    ?>
</body>
</html>
