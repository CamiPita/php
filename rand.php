<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$valor = rand (1,5);

if ($valor == 1 || $valor == 3 || $valor == 5){
    echo "El numero $valor es impar";
} else {
    echo "El número $valor es par";
}

/* Otra manera de hacer el ejercicio , en una sola línea.
echo $valor ==1 || $valor == 3 ||$valor ==5?"El número $valor es impar": "El número $valor es par" */

?>

