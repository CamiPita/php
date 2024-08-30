<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición 
function promediar($aNumeros){ //Lo que hace es sumar cada array y despues dividir por la cantidad de array, para sacar el promedio.
$suma=0;
foreach($aNumeros as $numero){
$suma= $suma + $numero / count($aNumeros);
}
return $suma;

}
//Uso

$aNotas= array (8,4,5,9,1);
echo "El promedio es " .promediar($aNotas) ."<br>";


?>