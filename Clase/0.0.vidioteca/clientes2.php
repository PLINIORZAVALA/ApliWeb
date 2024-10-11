<?PHP
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vidioteca");
$da=$_REQUEST['dato'];
$pos=strpos($da,"-");
$id=substr($da,0,$pos);

$resultado=mysqli_query($link,"select pelicula.titulo from rentas,pelicula 
where rentas.id_cliente='$id' and pelicula.id_pelicula=rentas.id_pelicula");
echo "<br> Peliculas del cliente <br>";
while($ren=mysqli_fetch_array($resultado))
{
  printf("%s <br>",$ren["titulo"]);
}
?>
