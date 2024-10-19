<?PHP
$dm = isset($_POST['dato_mascota']) ? $_POST['dato_mascota'] : '';
$dp = isset($_POST['dato_persona']) ? $_POST['dato_persona'] : '';

if (!empty($dm) && !empty($dp)) {
    $fa = date("Y-m-d");
    $link = mysqli_connect("localhost", "root", "", "adopciones");

    if (!$link) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $query = "INSERT INTO adopciones (fecha_adopcion, id_mascota, id_persona) VALUES ('$fa', '$dm', '$dp')";

    if (mysqli_query($link, $query)) {
        echo "Adopción insertada exitosamente.";
    } else {
        echo "Error al insertar la adopción: " . mysqli_error($link);
    }

    mysqli_close($link);
} else {
    echo "Error: Los campos de ID de mascota y persona no pueden estar vacíos.";
}

?>
