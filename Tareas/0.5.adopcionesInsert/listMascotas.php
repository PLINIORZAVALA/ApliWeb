<html>
<head> <title> Seleccion Mascotas</title> </head>
<body>
<h2> Lista de Mascotas </h2>
<hr>
<?PHP
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "adopciones");
$resultado = mysqli_query($link, "SELECT id_mascota, nombre FROM mascotas"); // Se consulta también el nombre para mostrarlo

echo '<FORM action="listPersonas.php" method="POST">';
echo '<select name="dato_mascota">';

// Mostrar el ID de la mascota pero solo enviar el ID como valor
while ($ren = mysqli_fetch_array($resultado)) {
    echo '<option value="'.$ren["id_mascota"].'">'.$ren["id_mascota"]."->".$ren["nombre"].'</option>';
}

echo "</select>";
echo "<br><br>";
echo '<input type="submit" value="Adoptar">';
echo "</form>";
?>
</body>
</html>
