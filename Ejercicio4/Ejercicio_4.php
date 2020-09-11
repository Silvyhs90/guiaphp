
<?php
require_once("Ejercicio4/Ejemplo_animal.php");

?>

<div class= "container text-light bg-dark py-5"> 

<form action="" method="post" class="container content">
  <p> Elija un animal : Leon / Serpiente / Caballo </p>
   <p> Animal: <input type="text" name="animal"> </p><br>
    <input type="submit" value="Enviar valores" name="enviar">
</form>


<?php

$s1 = new Serpiente;
$s1->setNombre("Serpiente")."<br>";
$s1->setTipo("Carnivoro")."<br>";
echo $s1->getTipo()."<br>";
echo $s1->describir()."<br>";
echo $s1->caminar()."<br>";

echo "<hr>";

$c1 = new Caballo;
$c1->setNombre("Caballo");
$c1->setTipo("Herbivoro");
echo $c1->describir()."<br>";
echo $c1->caminar()."<br>";
echo $c1->crias()."<br>";

echo "<hr>";

$l1 = new Leon;
$l1->setNombre("Leon");
$l1->setTipo("Carnivoro");
echo $l1->describir()."<br>";
echo $l1->caminar()."<br>";
echo $l1->comida()."<br>";

echo "<hr>";






?>
</div>
<?php
?>