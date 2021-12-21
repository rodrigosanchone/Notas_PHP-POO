<?php include 'includes/header.php';

require 'vendor/autoload.php';

use App\Clientes;
use App\Detalles;

//spl_autoload_register('mi_autoload');

$detalles= new Detalles();

$clientes = new Clientes();


include 'includes/footer.php';