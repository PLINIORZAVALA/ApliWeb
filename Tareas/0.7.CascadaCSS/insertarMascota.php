<html>
<head> <title> Mascotas </title></head>
<body>
<h2> Insertar nueva Mascotas </h2>
<hr>
<br>
<FORM ACTION="insertarMascota2.php" Method="POST" enctype="multipart/form-data">
Nombre:
<input type="text" name="nombre" required>
<br><br>
Tipo:
<input type="text" name="tipo" required> 
<br><br>
Raza:
<input type="text" name="raza" required> 
<br><br>
Edad:
<input type="text" name="edad" required> 
<br><br>
Tamaño:
<input type="text" name="tamano" required> 
<br><br>
Selecciona la imagen de la Mascota:
<input type="file" name="archivo">
 <br><br>
<input type="submit" name="enviar" value=" Enviar ">
</FORM>
</body>
</html>