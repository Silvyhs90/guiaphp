<?php

/*$nombre = isset($_POST['nombre']);
$tipo = isset($_POST['tipo']);

if($_POST)
if (isset($_POST['nombre'])) 
{
    $nombre= $_POST["nombre"];
}
if($_POST)
if (isset($_POST['sueldo'])) 
{
    $sueldo= $_POST["sueldo"];
}*/



abstract Class Animal
{
    protected $nombre;
    protected $tipo;

    public function describir()
        {
            return "El animal es un/una: ".$this->nombre." y el tipo es: ".$this->tipo;
        }

        public function getNombre() {
            return $this->nombre;
            }

            public function getTipo() {
                return $this->tipo;
                }
       
   
}


abstract class Vertebrados extends Animal 
{
    public function describir()
    {
        return parent::describir()." y es Vertebrado ";
    }

    abstract function caminar();
    
}

abstract class Invertebrados extends Animal 
{


    public function describir()
    {
        return parent::describir()." y es Invertebrado ";
    }

    abstract function caminar();
    
}
    class Serpiente extends Invertebrados
    {
        public function describir()
        {
            return parent::describir();
        }
        public function caminar(){
            return " Su forma de caminar es arrastrandose ";
        }

            public function setNombre($nom) {
            $this->nombre = $nom; 
            }

            public function setTipo($tipo) {
                $this->tipo = $tipo; 
                }
    }


    class Caballo extends Vertebrados
    {
        public function describir()
        {
            return parent::describir();

        }
        public function caminar(){
            return " Su forma de caminar es Galopar ";
        }

        public function crias()
        {
            return " Tiene entre 4 y 5 crias por camada ";
        }

    
            public function setNombre($nom) {
            $this->nombre = $nom; 
            }
            public function setTipo($tipo) {
                $this->tipo = $tipo; 
                }
    }

    class Leon extends Vertebrados
    {
        public function describir()
        {
            return parent::describir();

        }
        public function caminar()
        {
            return " Su forma de caminar es Galopar ";
        }

        public function comida()
        {
            return " Come otros animales ";
        }

            public function setNombre($nom) 
            {
            $this->nombre = $nom; 
            }
         
            public function setTipo($tipo) {
                $this->tipo = $tipo; 
                }
    }




?>