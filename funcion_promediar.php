<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definición
function promediar ($aNumeros) {
 $suma=0;
foreach ($aNumeros as $numero) {
    $suma=$suma + $numero;
}
 return $suma / count($aNumeros);
}
//Uso
$aNotas= array(8,4,5,9,1);
 echo "El promedio de notas es:" .promediar($aNotas);

?>

