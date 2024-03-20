<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//Definición
function calcularNeto($bruto) {
$resultado= $bruto - ($bruto * 0.17);
return $resultado;
}

//Uso
echo "El sueldo neto es $" .calcularNeto(800.000) ."<br>";

?>