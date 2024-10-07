<?php
// Incluimos la clase 
include_once 'auto.php';

//Asignamos el valor de cada atributo
$miAuto = new Auto('ABC-123', 'Rojo', 'Toyota');
echo $miAuto->getPlaca();
echo $miAuto->getColor();
echo $miAuto->getModelo();
?>
