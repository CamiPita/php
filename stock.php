<?php //siempre hayq que poner estas 3 lineas, porque muestran los errores del código. 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stock = 800;

/* Si stock es mayor que 0, entonces: //imprime "Hay stock" //sino //imprime "no hay stock"*/
if ($stock >= 0) {
    echo "Hay stock";
} else {
    echo "No hay stock";
}
?>