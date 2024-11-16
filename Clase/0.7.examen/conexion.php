<?php
// conexion.php
$link = mysqli_connect("localhost", "root", "", "gestion_facturas");

if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}
?>
