<?php include 'includes/header.php';

//conectar a la base de datos 

$db = new mysqli('localhost','root','root','bienes_raices');

//var_dump($db);

//creamos el query

$query = "SELECT titulo FROM propiedades";

/* $resultado = $db->query($query);

while($row = $resultado->fetch_assoc()):

var_dump($row); */

//preparamos el query

$stmt= $db->prepare($query);

//ejecutamos el query

$stmt->execute();


//creamos la variable
$stmt->bind_result($titulo);


//asignamos el resultado
$stmt->fetch();

//imprimimos el resultado
while($stmt->fetch()):
var_dump($titulo);

endwhile;

include 'includes/footer.php';