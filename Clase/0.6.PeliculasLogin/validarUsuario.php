<?php 
session_start();
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "vidioteca");

// Obtener los datos del formulario
$usu = $_POST['email'];  // Campo de entrada de correo electrónico
$pas = $_POST['password'];  // Campo de entrada de contraseña

// Realizar la consulta para verificar el usuario
$result = mysqli_query($link, "SELECT password, cliente, tipo FROM clientes WHERE usuario='$usu'");

if ($row = mysqli_fetch_array($result)) {
    // Verificar si la contraseña es correcta
    if ($row["password"] == $pas) {
        $_SESSION["k_username"] = $row['cliente'];  // Almacenar el nombre del cliente en la sesión
        echo 'Has sido logueado correctamente ' . $_SESSION['k_username'] . ' <p>';

        // Redireccionar según el tipo de usuario
        if ($row["tipo"] == 1) {
            header("Location: indexCliente.php");
        } else {
            header("Location: indexAdm.php");
        }
    } else {
        print("Password incorrecto");
        echo '<a href="index.php">Regresar</a></p>';
    }
} else {
    print("Login incorrecto");
    echo '<a href="index.php">Regresar</a></p>';
}
?>
