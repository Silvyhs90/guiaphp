<?php

Class Menu
{
    const MENU = "Menu";
    public $secciones;
    public $menu;

public function __construct()
{

    echo " ".self::MENU;
    echo "<br>"."<br>"."<br>";
}

public function ITEMS($items)
{
    $this->secciones = $items;
    
    for ($f=0; $f<count($this->secciones); $f++)
    {
        echo 'Seccion: '.$f.$this->secciones[$f].'<br>';
    }

}


public function LINKS($links)
{
    $this->menu = $links;

        foreach($links as $seccion=>$link)
        {
	        echo "El link de la seccion " . $seccion . " son " . $link;
	        echo "<br>";
	    }

}

public function MostrarMenu($texto)
{


    if( $texto=="horizontal")
    {
        echo "<p align=\"center\"> $this->menu </p>";
    }
    if( $texto== "vertical")
    { 
    $this->texto= "<div style= width: 10px; word-wrap: break-word; text-align: center"> $this->texto ?> </div>"
    <?php
    }
}





}




?>