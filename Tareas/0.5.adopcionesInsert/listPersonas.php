<html>
<head> <title> Seleccion Personas</title> </head>
<body>
<h2> Lista de Personas </h2>
<hr>
<?PHP
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Recibir el valor de dato_mascota
  $dm = $_POST['dato_mascota'];

  // Conectar a la base de datos
  $link = mysqli_connect("localhost", "root", "");
  mysqli_select_db($link, "adopciones");

  // Obtener la lista de personas
  $resultado = mysqli_query($link, "SELECT id_persona, nombre FROM personas");

  // Comenzar el formulario
  echo '<form action="listAdoptados.php" method="POST">';
  
  // Agregar el campo oculto con el valor de la mascota
  echo '<input type="hidden" name="dato_mascota" value="' . $dm . '">';

  // Mostrar el select para elegir una persona
  echo '<select name="dato_persona">';
  while ($ren = mysqli_fetch_array($resultado)) {
      echo '<option value="' . $ren["id_persona"] . '">' . $ren["id_persona"] . "->" . $ren["nombre"] . '</option>';
  }
  echo '</select>';
  echo '<br><br>';

  // Botón para enviar el formulario
  echo '<input type="submit" value="Enviar">';
  echo '</form>';
}
?>
</body>
</html>
