<?php include 'includes/header.php';

//Conectar a la base de datos PDO

$db = new PDO('mysql:host=localhost; dbname=bienes_raices','root','root');   //Soporta hasta 12 tipos de base de datos

//creamos el $query

$query = "SELECT titulo FROM propiedades";

/* //consultar la base de datos

$propiedades = $db->query($query)->fetchAll();

var_dump($propiedades); */

//Sentencias preparadas



//preparamos en $query
$stmt = $db->prepare($query);
//ejecutamos el $query
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($resultado as $propiedad):
    echo "<br>";
    echo $propiedad['titulo'];
endforeach;

/* echo "<pre>";
var_dump($resultado);
echo "</pre>"; */
include 'includes/footer.php';