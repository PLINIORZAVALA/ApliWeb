<html>
<head>
    <title>Detalles de la Mascota</title>
</head>
<body>
    <h2>Detalles de la Mascota</h2>
    <hr>
    <?php
    $id = $_GET['id_mascota'];
    $link = mysqli_connect("localhost", "root", "", "adopciones");

    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $resultado = mysqli_query($link, "SELECT * FROM mascotas WHERE id_mascota = '$id'");
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($link));
    }

    $mascota = mysqli_fetch_array($resultado);

    $nombre = $mascota['nombre'];
    $tipo = $mascota['tipo'];
    $raza = $mascota['raza'];
    $edad = $mascota['edad'];
    $tamano = $mascota['tamaño'];
    $imagen = $mascota['imagen'];

    echo "<img src='MisImagenes/$imagen' width='70' height='70'> <br>";
    echo "Nombre: $nombre <br>";
    echo "Tipo: $tipo <br>";
    echo "Raza: $raza <br>";
    echo "Edad: $edad años <br>";
    echo "Tamaño: $tamano <br>";
    echo "Imagen: $imagen <br>";
    echo "Resumen: <br>";

    mysqli_close($link);
    ?>
</body>
</html>
