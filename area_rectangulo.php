<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//Definición
function calcularAreaRect($base,$altura){
    return $base * $altura;
}
//Uso
echo "El area es " .calcularAreaRect (100,0.60) ."<br>";
echo "El area es " .calcularAreaRect (800,300);
?>