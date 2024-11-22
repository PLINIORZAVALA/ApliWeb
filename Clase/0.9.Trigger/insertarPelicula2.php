<?php
$ti = $_REQUEST['titulo'];
$di = $_REQUEST['director'];
$ac = $_REQUEST['actor'];
$im = $_FILES['archivo']['name'];

echo "Titulo: $ti <br>";
echo "Director: $di <br>";
echo "Actor: $ac <br>";
echo "Imagen: $im <br>";

$des = "MisImagenes/";
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
mysqli_select_db($link, "vidioteca");

// Insertar los datos en la tabla pelicula
$query = "INSERT INTO pelicula (titulo, director, actor, imagen) 
          VALUES ('$ti', '$di', '$ac', '$im')";

if (mysqli_query($link, $query)) {
    echo "Pelicula insertada exitosamente.";
} else {
    echo "Error al insertar la película: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);
?>
