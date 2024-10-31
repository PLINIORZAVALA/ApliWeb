<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Consulta de Mascotas en Adopción</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h1>Detalles de Mascota</h1>
    <h2><a href="index.php">Inicio</a> | <a href="contacto.php">Contacto</a></h2>
  </div>
  <div id="menucontainer">
    <div id="menunav">
      <ul>
        <li><a href="index.php"><span>Inicio</span></a></li>
        <li><a href="consultaInternauta.php"><span>Consulta Mascotas</span></a></li>
        <li><a href="registro.php"><span>Registro</span></a></li>
        <li><a href="acceso.php"><span>Acceso</span></a></li>
        <li><a href="contacto.php"><span>Contacto</span></a></li>
      </ul>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h3>Sidebar</h3>
      <h3>Perros Recientes</h3>
      <p>- Pepit</p>
      <p>- Bella</p>
      <p>- Rocky</p>
      <p>- Luna</p>
      <p>&nbsp;</p>
    </div>
    <div id="content">
      <h3>Consulta de Mascota</h3>
      <p>&nbsp;</p>
      <p>
      <?php
        $id = $_GET['id_mascota']; // Obtener el ID de la mascota desde la URL
        $link = mysqli_connect("localhost", "root", "", "adopciones");
        if (!$link) {
            die('Error de conexión: ' . mysqli_connect_error());
        }

        // Consulta para obtener la información de la mascota específica
        $resultado = mysqli_query($link, "SELECT * FROM mascotas WHERE id_mascota='$id'");
        if (!$resultado) {
            die('Error en la consulta: ' . mysqli_error($link));
        }

        $reg = mysqli_fetch_array($resultado);
        $nombre = $reg['nombre'];
        $raza = $reg['raza'];
        $edad = $reg['edad'];
        $imagen = $reg['imagen'];

        echo "<img src='MisImage/$imagen' width='300' height='300'><br>";
        echo "Nombre: $nombre<br>";
        echo "Raza: $raza<br>";
        echo "Edad: $edad años<br>";
        echo "Resumen: <br>";
        // Aquí puedes agregar un resumen o más información específica sobre la mascota

        mysqli_close($link); // Cerrar la conexión
      ?>
      &nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
  <div id="footer">
    <a href="#">Inicio</a> | <a href="mailto:contacto@adopciones.com">Contacto</a> | <a href="http://validator.w3.org/check?uri=referer">HTML</a> | <a href="http://jigsaw.w3.org/css-validator">CSS</a> | &copy; 2024 Adopciones | Diseño por <a href="http://www.mitchinson.net">www.mitchinson.net</a>
  </div>
</div>
</body>
</html>