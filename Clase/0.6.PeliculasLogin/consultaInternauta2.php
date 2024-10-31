<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h1>Videoteca </h1>
    <h2><a href="index.php">homepage</a> | <a href="contacto.php">contact</a> </h2>
  </div>
  <div id="menucontainer">
    <div id="menunav">
      <ul>
        <li><a href="index.php" ><span>Inicio</span></a></li>
        <li><a href="consultaInternauta.php" class="current"><span>Consulta</span></a></li>
        <li><a href="registro.php"><span>Registro</span></a></li>
        <li><a href="acceso.php"><span>Acceso</span></a></li>
        <li><a href="contacto.php"><span>Contacto</span></a></li>
      </ul>
    </div>
  </div>
  <div id="container">
    <div id="sidebar">
      <h3>Sidebar</h3>
      <h3>Peliculas recientes</h3>
      <p>- Venom</p>
      <p>- La sustancia</p>
      <p>- Halloween</p>
      <p>- Sonrie 2</p>
      <p>&nbsp;</p>
      <p>&nbsp;    </p>
    </div>
    <div id="content">
      <h3>Consulta de peliculas</h3>
      <p>&nbsp;</p>
      <p>
<?PHP
$id=$_GET['id_peli'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vidioteca");
$resultado=mysqli_query($link,"select * from pelicula where id_pelicula='$id'");
$ren=mysqli_fetch_array($resultado);
  $ti=$ren['titulo'];
  $di=$ren['director'];
  $ac=$ren['actor'];
  $im=$ren['imagen'];
  
echo "<img src='MisImagenes/$im' width='300' height='300'> <br>";
echo "Titulo: $ti <br>"; 
echo "Director: $di <br>";
echo "Actor: $ac <br>";
echo "Resumen: <br>";
?>

	  
	  
	  
	  &nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>.</p>
    </div>
  </div>
  <div id="footer"> <a href="#">homepage</a> | <a href="mailto:denise@mitchinson.net">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a></div>
</div>
</body>
</html>
