<?php
require_once("Ejercicio1/clase_menu.php");

?>

<div class= "container text-light bg-dark py-5"> 

<?php


$objeto= new Menu();
$items = [" Imagenes "," Historia "," Acerca de "," Descargas "];     // a partir de PHP 5.4
$objeto->ITEMS($items); 
$links = [" Imagenes " => "https://blog.openalfa.com/como-escribir-texto-en-vertical-en-una-pagina-web" , " Historia " => "https://www.php.net/manual/es/language.oop5.late-static-bindings.php", " Acerca de " => "https://www.php.net/manual/es/language.constants.php", " Descargas " => "https://www.w3schools.com/css/tryit.asp?filename=trycss_align_container"];
$objeto->LINKS($links);


echo Menu::MENU;


$objeto->MostrarMenu("horizontal");






?>
</div>
<?php
?>