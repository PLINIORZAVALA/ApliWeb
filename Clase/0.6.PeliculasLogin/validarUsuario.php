<?php 
session_start();

// Conexión a la base de datos
$link = mysqli_connect("localhost", "root", "");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($link, "vidioteca");

// Obtener los datos del formulario
$usu = $_REQUEST['usuario'];
$pas = $_REQUEST['password'];

// Consulta preparada para prevenir inyección SQL
$stmt = mysqli_prepare($link, 'SELECT password, usuario, tipo FROM clientes WHERE usuario = ?');
mysqli_stmt_bind_param($stmt, 's', $usu);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Verificar si se encontraron resultados
if ($row = mysqli_fetch_array($result)) {
    // Verificar si la contraseña es correcta
    if ($row["password"] === $pas) {
        $_SESSION["k_username"] = $row['usuario'];
        echo 'Has sido logueado correctamente ' . $_SESSION['k_username'] . '<p>';
        
        // Redireccionar según el tipo de usuario
        if ($row["tipo"] == 1) {
            header("Location: indexCliente.php");
        } else {
            header("Location: indexAdm.php");
        }
        exit; // Asegúrate de salir después de la redirección
    } else {
        echo "Contraseña incorrecta";
        echo '<a href="index.php">Regresar</a></p>';
    }
} else {
    echo "Login incorrecto";
    echo '<a href="index.php">Regresar</a></p>';
}

// Cerrar la conexión
mysqli_close($link);
?>
