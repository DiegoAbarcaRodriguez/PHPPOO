<?php
 include 'includes/header.php';


    use App\Clientes;
    use App\Detalles;

    require"vendor/autoload.php"; //La carpeta vendor y autoLoad se generó mediante composer de forma automática. (Autoload permite instanciar clases desde cualquier archivo sin la necesidad de importarlas).

    $detalles=new Detalles();
    $clientes =new Clientes();


include 'includes/footer.php';