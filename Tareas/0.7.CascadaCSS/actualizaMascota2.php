<HTML>
<HEAD>
<TITLE>Actualizar Mascota</TITLE>
</HEAD>
<BODY>

<?php
// Conexión a la base de datos
$link = mysqli_connect("localhost", "root", "", "adopciones");
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Capturar los datos del formulario
$nombre = $_REQUEST['nombre'];
$tipo = $_REQUEST['tipo'];
$raza = $_REQUEST['raza'];
$edad = $_REQUEST['edad'];
$tamano = $_REQUEST['tamano'];
$imagen = $_REQUEST['imagen']; // Para actualizar la URL de la imagen
$id = $_REQUEST['id'];

// Mostrar los datos capturados (puedes eliminar esta parte si no la necesitas)
echo "Nombre: $nombre<br>";
echo "Tipo: $tipo<br>";
echo "Raza: $raza<br>";
echo "Edad: $edad<br>";
echo "Tamaño: $tamano<br>";
echo "Imagen: $imagen<br>";
echo "ID Mascota: $id<br>";

// Actualización de los datos en la base de datos
$query = "UPDATE mascotas SET 
          nombre='$nombre', 
          tipo='$tipo', 
          raza='$raza', 
          edad='$edad', 
          tamano='$tamano', 
          imagen='$imagen' 
          WHERE id_mascota='$id'";

if (mysqli_query($link, $query)) {
    header("Location: mascotasAB.php"); // Redirección a la lista de mascotas
} else {
    echo "Error al actualizar: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);
?>

</BODY>
</HTML>
