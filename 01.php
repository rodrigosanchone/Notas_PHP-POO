<?php 
declare(strict_types=1);
include 'includes/header.php';

//Definir una clase

class Producto{
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible){
       $this->nombre = $nombre;
       $this->precio = $precio;
       $this->disponible = $disponible;
    }

}
$producto = new Producto('Tablet',200,true);
echo"<pre>"; 
  var_dump($producto);
echo"</pre>";


/* $producto = new Producto();
$producto->nombre = 'Tablet';
$producto->precio = 200;
$producto->disponibles= true;


/*

$producto2 = new Producto();
$producto2->nombre = 'Monitor Gamer';
$producto2->precio = 1200;
$producto2->disponibles= true;
echo"<pre>";
  var_dump($producto); */

  //PHP 8
  class ProductoPHP8{
   

    public function __construct(public string $nombre,public  int $precio,public   bool $disponible){
       
    }

    public function mostrarProducto(){
      echo "El producto es: " . $this->nombre . " y su precio es:" . $this->precio ;
    }

}

$productoPHP8 = new ProductoPHP8('Tablet',200,true);
$productoPHP8->mostrarProducto();

echo"<pre>"; 
  var_dump($productoPHP8);
echo"</pre>";

$productoPHP2 = new ProductoPHP8('MouseGamer',100,true);
$productoPHP2->mostrarProducto();


include 'includes/footer.php';