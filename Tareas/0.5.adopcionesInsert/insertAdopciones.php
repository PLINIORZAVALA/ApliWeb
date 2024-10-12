<?PHP
$dm = $_POST['dato_mascota']; // Recibe el ID de la mascota desde POST
$dp = $_POST['dato_persona']; // Recibe el ID de la persona desde POST
$fa = date("Y.m-d");

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "adopciones");

echo "Mascota: $dm <br>"; // Mostrar solo el ID de la mascota
echo "Persona: $dp <br>"; // Mostrar solo el ID de la persona

//Insertamos los datos en la base de datos
$query = "INSERT INTO adopciones (fecha_adopcion, id_mascota, id_persona) VALUES ('$fa','$dm','$dp')";

if (mysqli_query($link, $query)) {
  echo "Adopción insertada exitosamente.";
} else {
  echo "Error al insertar la Adopción: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);
?>
