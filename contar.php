<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 /*Primero recorro el array y despues incremento para que los sume */
 
//Definición
function contar ($aArray){
    $contador=0;
foreach($aArray as $item) {
$contador++;
}
return $contador; 
}
//Uso
$aNotas =array (9,8,9.50,4,7,8);
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 5800
);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000
);

$aProductos[] = array(
    "nombre" => "Aire acondicionado Split Inverter Frío/Calor 2900F",
    "marca" => "Surrey",
    "modelo" => "553AILQ1201E",
    "stock" => 5,
    "precio" => 45000
);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre y apellido" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,

);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre y apellido" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,

);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre y apellido" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79,

);
$aPacientes[] = array(
    "dni" => "23.684.700",
    "nombre y apellido" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79,

);

echo "Cantidad de notas: " .contar($aNotas)."<br>" ;
echo "Cantidad de productos:" .contar($aProductos) ."<br>";
echo "Cantidad de pacientes:" .contar($aPacientes);
?>