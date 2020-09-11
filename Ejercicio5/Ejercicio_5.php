<?php
require_once("Ejercicio5/Ejercicio_22.php");

?>

<div class= "container text-light bg-dark py-5"> 

<?php

$f1 = new Circulo;
$descripcion = $f1->getDescripcion();
$f1->setTipo(" Circular ");
$tipo = $f1->getTipo();

echo " Descripcion: " . $descripcion . "  de tipo  ".$tipo .  "Nombre de la figura geometrica : " . $f1->nombre;
echo "<hr>";

$f1 = new Cuadrado;
$descripcion = $f1->getDescripcion();
$f1->setTipo(" Cuadrada ");
$tipo = $f1->getTipo();

echo " Descripcion: " . $descripcion . "  de tipo  ".$tipo .  "Nombre de la figura geometrica : " . $f1->nombre;
echo "<hr>";

$f1 = new Rectangulo;
$descripcion = $f1->getDescripcion();
$f1->setTipo(" Rectangular ");
$tipo = $f1->getTipo();

echo " Descripcion: " . $descripcion . "  de tipo  ".$tipo .  "Nombre de la figura geometrica : " . $f1->nombre;
echo "<hr>";
echo "<br>";
echo "<hr>";

echo "<br>";

$l1 = new Mani;
$color = $l1->getColor();
$l1->setTipo(" Vegetal ");
$tipo = $l1->getTipo();

echo "Nombre de la leche : " . $l1->nombre. " de color " . $color . "  de tipo  ".$tipo;

echo "<hr>";
$l1 = new Almendra;
$color = $l1->getColor();
$l1->setTipo(" Vegetal ");
$tipo = $l1->getTipo();

echo "Nombre de la leche : " . $l1->nombre. " de color " . $color . "  de tipo  ".$tipo;

echo "<hr>";
$l1 = new Vaca;
$color = $l1->getColor();
$l1->setTipo(" Animal ");
$tipo = $l1->getTipo();

echo "Nombre de la leche : " . $l1->nombre. " de color " . $color . "  de tipo  ".$tipo;
echo "<hr>";





?>
</div>
<?php
?>