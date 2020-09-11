<?php

abstract class Lacteos
 {

    public function getColor()
    {
        return "blanco";
    }
   
    abstract public function setTipo($tipo);
    abstract public function getTipo();
}

class Mani extends Lacteos 
{
    public $nombre= 'Mani';
    protected $tipo;

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}

class Almendra extends Lacteos 
{
    public $nombre= 'Almendra';
    protected $tipo;

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}

class Vaca extends Lacteos 
{
    public $nombre= 'Vaca';
    protected $tipo;

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
}


abstract class Figuras
 {

    public function getDescripcion()
    {
        return "Son figuras geométricas planas";
    }
   
    abstract public function setTipo($figura);
    abstract public function getTipo();
}

class Circulo extends Figuras 
{
    public $nombre= ' Circulo ';
    protected $figura;

    public function getDescripcion()
    {
        return parent::getDescripcion()." Es diferente a las otras figuras: no tiene lados ni vértices, tiene borde y región interior  ";
    }

    public function setTipo($figura)
    {
        $this->figura = $figura;
    }
    public function getTipo()
    {
        return $this->figura;
    }
}

class Cuadrado extends Figuras 
{
    public $nombre= ' Cuadrado ';
    protected $figura;

    public function getDescripcion()
    {
        return parent::getDescripcion()." Tiene cuatro lados, cuatro vértices y sus lados son iguales ";
    }


    public function setTipo($figura)
    {
        $this->figura = $figura;
    }
    public function getTipo()
    {
        return $this->figura;
    }
}

class Rectangulo extends Figuras 
{
    public $nombre= ' Rectangulo ';
    protected $figura;

    public function getDescripcion()
    {
        return parent::getDescripcion()."Tiene cuatro vértices, cuatro lados que no son iguales (dos pares de lados iguales) ";
    }


    public function setTipo($figura)
    {
        $this->figura = $figura;
    }
    public function getTipo()
    {
        return $this->figura;
    }
}



?>