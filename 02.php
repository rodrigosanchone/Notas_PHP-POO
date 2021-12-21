<?php include 'includes/header.php';

//Encapsulación

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
/* echo"<pre>"; 
  var_dump($producto);
echo"</pre>";
 */

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
   
    //Public  -Se puede acceder y modificar en cualquier lugar ()
    //Protected -Se puede acceder y modificar unicamente en la clase
    //private solo miembros de la misma clase pueden acceder a el 
    public function __construct(protected string $nombre,public  int $precio,public   bool $disponible){
       
    }

    public function mostrarProducto(){
      echo "El producto es: " . $this->nombre . " y su precio es:" . $this->precio ;
    }

    public function getNombre(){
        return $this->nombre;
    }

}

$productoPHP8 = new ProductoPHP8('Tablet',200,true);
//$productoPHP8->mostrarProducto();
echo $productoPHP8->getNombre();
echo"<br>"; 
  //var_dump($productoPHP8);
/*echo"</pre>"; */

$productoPHP2 = new ProductoPHP8('MouseGamer',100,true);
echo $productoPHP2->getNombre();
//$productoPHP2->mostrarProducto();

include 'includes/footer.php';