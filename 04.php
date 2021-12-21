<?php include 'includes/header.php';

class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad)
    { 
         
    }

    public function getInfo() :string{
         return "El transporte tiene " . $this->ruedas ." ruedas ". " y una capacidad de " . $this->capacidad . " personas";
     }
}


class bicicleta extends Transporte{

}

$bicicleta = new bicicleta(2,1);

echo $bicicleta->getInfo();


class Auto extends Transporte{

}

echo "<br>";
echo "<hr>";

$auto = new auto(4,4);

echo $auto->getInfo();

include 'includes/footer.php';