<?php
ini_set('display_errors',1);
ini_set('display_status_errors',1);
error_reporting(E_ALL);


$miArray=array ();
$miArray[0]="Hola";
$miArray[37]="Chau";
$miArray[]="Adios";
$miArray[]="Buenas tardes";
$miArray[1]="Hello";
$miArray[]="Buenas noches";
print_r($miArray);
?>
