<?php

abstract class Persona
{
    private $nombre;
    private $edad;

    public function setCargardatos($nombre, $edad)
    {
            $this->nombre= $nombre;
            $this->edad= $edad;

    }

    public function getCargardatos()
    {
           return $this->nombre.$this->edad;
    }
}

//Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir su sueldo.

class Empleado extends Persona
{

    private $sueldo;

    public function setSueldo($sueldo)
    {
            $this->sueldo= $sueldo;
            

    }

    public function getSueldo()
    {
           return "Sueldo ".$this->sueldo;
           

    }
}
//Definir un objeto de la clase Persona y ver que error produce. 
//También crear un objeto de la clase Empleado y llamar a sus métodos.





?>