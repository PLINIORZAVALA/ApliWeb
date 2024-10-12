<html>
<head> <title> Selección de mascotas adaptotadas</title> </head>
<body>
<h2> Lista de Mascotas Adoptadas </h2>
<hr>
<?PHP
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "adopciones");

// Consulta para obtener el ID y nombre de las mascotas adoptadas
$query = "
    SELECT m.id_mascota, m.nombre 
    FROM mascotas m
    INNER JOIN adopciones a ON m.id_mascota = a.id_mascota
";

$resultado = mysqli_query($link, $query);

// Comenzar el formulario
echo '<form action="adoptar.php" method="POST">';
echo '<select name="dato_mascota">';

// Mostrar el ID y nombre de las mascotas adoptadas
while ($ren = mysqli_fetch_array($resultado)) {
    echo '<option value="'.$ren["id_mascota"].'">'.$ren["id_mascota"]." -> ".$ren["nombre"].'</option>';
}

// Cerrar la conexión
mysqli_close($link);
?>
</body>
</html>
