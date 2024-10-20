<?php
$link = mysqli_connect("localhost", "root", "", "adopciones");
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

$id_mascota = $_GET['id_mascota'];
$id_persona = $_GET['id_persona'];
$fecha_adopcion = date('Y-m-d');  // La fecha actual de adopción

// Insertar en la tabla adopciones
$sql = "INSERT INTO adopciones (fecha_adopcion, id_mascota, id_persona) VALUES ('$fecha_adopcion', '$id_mascota', '$id_persona')";

if (mysqli_query($link, $sql)) {
    echo "Adopción registrada con éxito.";
} else {
    die('Error al insertar en adopciones: ' . mysqli_error($link));
}

mysqli_close($link);
?>
