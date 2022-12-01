<?php 
declare( strict_types = 1);

include 'includes/header.php';

// Definir una clase
//Vieja forma (Anterior a PHP 8):
   /*  1. Se definen los atributos de la clase con sus pertinentes 
    public string $nomble;
    public int $precio;
    public bool $disponible;
    */
//El proceso de definción de una clase es decir la forma y atributos que conforman a los datos(objetos) es lo que se denomina ABSTRACCIÓN
class Producto {

        //Nota: En la vieja forma no es necesario definir los modificadores de acceso de las propiedades!!!!!!.
    public function __construct(public string $nombre, public int $precio, public bool $disponible)//En la nueva forma el constructor solo se limite a encabezados de este tipo.
    {
        /*2.Se asigna los valores a los atributos de la clase(Vieja Forma)
            $this->nombre=$nombre;
             $this->precio=$precio;
             $this->disponible=$disponible;
        
        */
    }

    public function mostrarProducto() {
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

}

$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('Monitor Curvo', 300, true);
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';