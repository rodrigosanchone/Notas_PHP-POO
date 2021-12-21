<?php

use Producto as GlobalProducto;

include 'includes/header.php';

//Medtodos estaticos


  //PHP 8
  class Producto{
      

   public $imagen; 
   public static $imagenPlaceholder = "imagen.jpg";
 
    public function __construct(protected string $nombre,public  int $precio,public   bool $disponible, string $imagen){
       if($imagen){
          self::$imagenPlaceholder = $imagen;
       }
    }

    public static function obtenerImagen(){
         return self::$imagenPlaceholder;
    }

    public static function obtenerProducto(){
       echo 'Obteniendo datos del producto';
    }

    public function mostrarProducto(){
      echo "El producto es: " . $this->nombre . " y su precio es:" . $this->precio ;
    }

    public function getNombre(){
        return $this->nombre;
    }

}

$producto = new Producto('Tablet',200,true,'');

echo $producto ->obtenerImagen();
$producto2 = new Producto('Tablet',200,true,'Monitorcurvo.jpg');


echo "<br>";
echo $producto2 ->obtenerImagen();




include 'includes/footer.php';