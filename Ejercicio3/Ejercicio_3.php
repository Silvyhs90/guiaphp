<?php
require_once("Ejercicio3/Ejercicio_persona.php");

?>

<div class= "container text-light bg-dark py-5"> 

<?php


// Error Uncaught Error: Cannot instantiate abstract class Persona. No se puede iniciar una clase abstract persona
/*$P1= new Persona;
$P1->setCargardatos("Silvina",29);
$P1->getCargardatos();*/

$E1= new Empleado;
$E1->setCargardatos(" Silvina ",29);
$datos = $E1->getCargardatos();
$E1->setSueldo(50000);
$sueldo = $E1->getSueldo();

//creo objeto de la clase Empleado y llamo a sus metodos, como esta heredado los puedo cargar , creo variables en los get y despues los llamo con un echo
echo " Nombre: ".$datos." Sueldo: ".$sueldo;







?>
</div>
<?php
?>