<HTML>
<HEAD>
<TITLE>Actualizar Mascota</TITLE>
</HEAD>
<BODY>
<h1>Actualizar un registro de mascota</h1>
<br>
<?php
// Conexión a la base de datos
$link = mysqli_connect("localhost", "root", "", "adopciones");
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Capturar el ID de la mascota
$id = $_GET['id_mascota'];

// Consulta para obtener los datos de la mascota
$result = mysqli_query($link, "SELECT * FROM mascotas WHERE id_mascota='$id'");
$row = mysqli_fetch_array($result);

// Verificar si se obtuvieron resultados
if (!$row) {
    die('Error: Mascota no encontrada.');
}

// Asignar los valores a las variables
$nombre = $row["nombre"];
$tipo = $row["tipo"];
$raza = $row["raza"];
$edad = $row["edad"];
$tamano = $row["tamano"];
$imagen = $row["imagen"];

// Mostrar el formulario de actualización
echo '<FORM METHOD="POST" ACTION="actualizaMascota2.php">';
echo "Nombre: <INPUT TYPE='text' NAME='nombre' value='$nombre' SIZE='50'><br>";
echo "Tipo: <INPUT TYPE='text' NAME='tipo' value='$tipo' SIZE='50'><br>";
echo "Raza: <INPUT TYPE='text' NAME='raza' value='$raza' SIZE='50'><br>";
echo "Edad: <INPUT TYPE='number' NAME='edad' value='$edad' SIZE='50'><br>";
echo "Tamaño: <INPUT TYPE='text' NAME='tamano' value='$tamano' SIZE='50'><br>";
echo "Imagen: <INPUT TYPE='text' NAME='imagen' value='$imagen' SIZE='50'><br>"; // Campo para la imagen
echo "<input type='hidden' name='id' value='$id'>"; // Campo oculto para el ID
?>
<br>
<hr>
<INPUT TYPE="SUBMIT" value="Actualizar">
</FORM>
</BODY>
</HTML>
