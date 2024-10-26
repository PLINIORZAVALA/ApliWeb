<html>
<head>
    <title>Eliminación y Actualización de Mascotas</title>

    <script LANGUAGE="JavaScript">
    function confirmSubmit() {
        var eli = confirm("¿Está seguro de eliminar esta mascota?");
        return eli; // Devuelve true si se confirma, false en caso contrario
    }
    </script>
</head>
<body>

<h2>Eliminación y Actualización de Registros en la tabla Mascotas</h2>

<?php
    // Conectar a la base de datos
    $link = mysqli_connect("localhost", "root", "", "adopciones");
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Consulta para obtener las mascotas
    $result = mysqli_query($link, "SELECT * FROM mascotas");
    if (!$result) {
        die('Error en la consulta: ' . mysqli_error($link));
    }
?>

<!-- Tabla para mostrar las mascotas -->
<table border="1">
    <tr>
        <td bgcolor="#FFFFCC"><b>ID</b></td>
        <td bgcolor="#FFFFCC"><b>Nombre</b></td>
        <td bgcolor="#FFFFCC"><b>Tipo</b></td>
        <td bgcolor="#FFFFCC"><b>Raza</b></td>
        <td bgcolor="#FFFFCC"><b>Edad</b></td>
        <td bgcolor="#FFFFCC"><b>Tamaño</b></td>
        <td bgcolor="#FFFFCC"><b>Imagen</b></td>
        <td bgcolor="#FFFFCC"><b>Eliminar</b></td>
        <td bgcolor="#FFFFCC"><b>Actualizar</b></td>
    </tr>

<?php
    // Mostrar los datos de cada mascota
    while ($row = mysqli_fetch_array($result)) {
        $id_mascota = $row["id_mascota"];
        $nombre = $row["nombre"];
        $tipo = $row["tipo"];
        $raza = $row["raza"];
        $edad = $row["edad"];
        $tamano = $row["tamano"];
        $imagen = $row["imagen"];

        // Asegúrate de que la imagen apunte correctamente a la carpeta 'MisImage'
        printf("
        <tr>
            <td>%d</td>
            <td>%s</td>
            <td>%s</td>
            <td>%s</td>
            <td>%d</td>
            <td>%s</td>
            <td><img src='MisImage/%s' width='100' height='100'></td>
            <td>
                <center>
                    <a onclick='return confirmSubmit()' href='deleteMascotas.php?id_mascota=%d'>
                        <img src='eliminar.bmp' width='14' height='14' border='0'>
                    </a>
                </center>
            </td>
            <td>
                <center>
                    <a href='actualizaMascota.php?id_mascota=%d'>
                        <img src='actualiza.jpg' width='25' height='25' border='0'>
                    </a>
                </center>
            </td>
        </tr>", 
        $id_mascota, $nombre, $tipo, $raza, $edad, $tamano, $imagen, $id_mascota, $id_mascota);
    }

    // Liberar el resultado y cerrar la conexión
    mysqli_free_result($result);
    mysqli_close($link);
?>
</table>
</body>
</html>
