<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición
function contar($aArray) {
    $contador=0;
    foreach ($aArray as $item) {
        $contador++;
    }
    return $contador;
}
//Uso
$aNotas = array(9, 8, 9.50, 4, 7, 8);
$aPacientes = array();
$aPacientes[] = array(
    "DNI" => "33.765.012",
    "nombre y apellido" => "Ana Acuña",
    "edad" => "45",
    "peso" => "81",
);

$aPacientes[] = array(
    "DNI" => "23.684.385",
    "nombre y apellido" => "Gonzalo Bustamante",
    "edad" => "66",
    "peso" => "79",
);

$aPacientes[] = array(
    "DNI" => "23.684.385",
    "nombre y apellido" => "Juan Irraola",
    "edad" => "28",
    "peso" => "79",
);

$aPacientes[] = array(
    "DNI" => "23.684.385",
    "nombre y apellido" => "Beatriz Ocampo",
    "edad" => "50",
    "peso" => "79",
);
$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\"4k UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => "60",
    "precio" => 58000,

);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => "0",
    "precio" => "22000",
);

$aProductos[] = array(
    "nombre" => "Aire acondicionado Split Inverter Frío/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ1201E",
    "stock" => "5",
    "precio" => "4500"

);
echo "<br> Cantidad de productos:" .contar($aNotas); 
echo "<br> Cantidad de pacientes:" .contar($aPacientes);
echo "<br> Cantidad de productos:" .contar($aProductos);