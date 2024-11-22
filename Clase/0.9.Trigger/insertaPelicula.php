<html>
<head> <title> Videoteca </title></head>
<body>
<h2> Insertar nueva pelicula </h2>
<hr>
<br>
<FORM ACTION="insertaPelicula2.php" Method="POST" enctype="multipart/form-data">
Titulo:
<input type="text" name="titulo" required>
<br><br>
Director:
<input type="text" name="director" required> 
<br><br>
Actor:
<input type="text" name="actor" required> 
<br><br>
Selecciona la imagen de la pelicula:
<input type="file" name="archivo">
 <br><br>
<input type="submit" name="enviar" value=" Enviar ">
</FORM>
</body>
</html>