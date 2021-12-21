<?php

use Transporte as GlobalTransporte;

include 'includes/header.php';

//clases astractas son las que no se pueden instanciar  solo se puenden heredar

abstract class Transporte{ // no se puede instanciar
    public function __construct(protected int $ruedas, protected int $capacidad)
    { 
         
    }

    public function getInfo() :string{
         return "El transporte tiene " . $this->ruedas ." ruedas ". " y una capacidad de " . $this->capacidad . " personas";
     }
}


class bicicleta extends Transporte{

}


echo "<hr>";

$bicicleta = new bicicleta(2,1);

echo $bicicleta->getInfo();


class Auto extends Transporte{

}

echo "<br>";
echo "<hr>";

$auto = new auto(4,4);

echo $auto->getInfo();

include 'includes/footer.php';