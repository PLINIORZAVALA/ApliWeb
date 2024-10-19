Este proeceso se realiza despues del archivo insertarMascotas.php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Solo procesar si el formulario ha sido enviado
    $nm = $_REQUEST['nombre'];
    $ti = $_REQUEST['tipo'];
    $ra = $_REQUEST['raza'];
    $ed = $_REQUEST['edad'];
    $ta = $_REQUEST['tamano']; // Asegúrate de que esto coincida con la columna en la base de datos
    $im = $_FILES['archivo']['name'];
} else {
    echo "El formulario no ha sido enviado.";
}
echo "Nombre: $nm <br>";
echo "Tipo: $ti <br>";
echo "Raza: $ra <br>";
echo "Edad: $ed <br>";
echo "Tamaño: $ta <br>";
echo "Imagen: $im <br>";

$des = "MisImage/";
$nombre = $_FILES['archivo']['tmp_name'];

// Mueve el archivo de la imagen a la carpeta de destino
if (copy($nombre, $des.$im)) {
    echo "Imagen subida exitosamente.<br>";
} else {
    echo "Error al subir la imagen.<br>";
}

// Conectar a la base de datos
$link = mysqli_connect("localhost", "root", "");
if (!$link) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Seleccionar la base de datos (asegúrate de que el nombre sea correcto)
mysqli_select_db($link, "adopciones");

// Insertar los datos en la tabla mascotas
$query = "INSERT INTO mascotas (nombre, tipo, raza, edad, tamano, imagen) 
          VALUES ('$nm', '$ti', '$ra', '$ed', '$ta', '$im')";

if (mysqli_query($link, $query)) {
    echo "Mascota insertada exitosamente.";
} else {
    echo "Error al insertar la mascota: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);
?>
