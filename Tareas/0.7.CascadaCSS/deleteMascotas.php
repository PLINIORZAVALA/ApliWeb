<html>
<head>
</head>
<body>
<?php 
   // Conexión a la base de datos
   $link = mysqli_connect("localhost", "root", "");
   mysqli_select_db($link, "adopciones");
   
   // Captura del id de la mascota desde la URL
   $id = $_GET['id_mascota'];
   
   // Eliminación del registro de la mascota con el id especificado
   mysqli_query($link, "DELETE FROM mascotas WHERE id_mascota = '$id'"); 
   
   // Redireccionamiento a la página principal después de la eliminación
   header("Location:mascotasAB.php"); 
?>
</body>
</html>
