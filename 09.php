<?php include 'includes/header.php';

//1. Conectar a la BD con Mysqli.
$db = new mysqli('localhost', 'root', 'root', 'bienesraices');

//2. Creamos el query
$query = "SELECT titulo, imagen from propiedades";

//3. Lo preparamos (Mediante una sentencia preparada, mejora performance y seguridad)
$stmt = $db->prepare($query);

//4. Lo ejecutamos
$stmt->execute();

//5. creamos la variable
$stmt->bind_result($titulo, $imagen);

//6. imprimir el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';