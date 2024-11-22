<html>
<head> <title> Consulta Clientes</title> </head>
<body>
<h2> Lista de clientes </h2>
<hr>
<?PHP
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"vidioteca");
$resultado=mysqli_query($link,"select id_cliente, cliente from clientes");
echo '<FORM action="clientes2.php" method="POST">';
echo '<select name="dato">';

while($ren=mysqli_fetch_array($resultado))
{
  echo '<option>'.$ren["id_cliente"]."->".$ren["cliente"];
}
echo "</select>";
echo "<br>";
echo "<br>";
echo '<input type="submit" value=" Enviar">';
echo "</form>";
?>
</body>
</html>