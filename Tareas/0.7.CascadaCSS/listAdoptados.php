<html>
<head> <title>Mascotas adoptadas</title> </head>
<body>
<h2> Lista de Personas que adoptaron mascotas</h2>
<hr>
<?PHP
    // Conexión a la base de datos
    $link = mysqli_connect("localhost", "root", "", "adopciones");
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    // Consulta SQL con JOIN entre adopciones, personas y mascotas
    $sql = "
        SELECT 
            adopciones.fecha_adopcion, 
            personas.nombre AS nombre_persona, 
            mascotas.nombre AS nombre_mascota
        FROM 
            adopciones
        JOIN 
            personas ON adopciones.id_persona = personas.id_persona
        JOIN 
            mascotas ON adopciones.id_mascota = mascotas.id_mascota
    ";

    $resultado = mysqli_query($link, $sql);
    if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($link));
    }

    // Crear tabla para mostrar resultados
    echo "<table border='1'>";
    echo "<tr><td>Fecha de Adopción</td><td>Nombre de la Persona</td><td>Nombre de la Mascota</td></tr>";

    while ($reg = mysqli_fetch_array($resultado)) {
        $fecha_adopcion = $reg['fecha_adopcion'];
        $nombre_persona = $reg['nombre_persona'];
        $nombre_mascota = $reg['nombre_mascota'];

        echo "<tr>";
        echo "<td>$fecha_adopcion</td><td>$nombre_persona</td><td>$nombre_mascota</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Cerrar la conexión
    mysqli_close($link);
    
/*
    $link = mysqli_connect("localhost", "root", "", "adopciones");
    if (!$link) {
        die('Error de conexión: ' . mysqli_connect_error());
    }

    $resultado = mysqli_query($link, "SELECT * FROM adopciones");
     if (!$resultado) {
        die('Error en la consulta: ' . mysqli_error($link));
    }

    echo "<table border='1'>";
    echo "<tr><td>fecha_adopcion</td><td>id_mascota</td><td>id_persona</td></tr>";

    while ($reg = mysqli_fetch_array($resultado)) {
        $fec_adop = $reg['fecha_adopcion'];
        $id_mas = $reg['id_mascota'];
        $id_pers = $reg['id_persona'];

        echo "<tr>";
        echo "<td>$fec_adop</td><td>$id_mas</td><td>$id_pers</td>";
    }

    echo "</table>";

    mysqli_close($link);
    */
?>
</body>
</html>
