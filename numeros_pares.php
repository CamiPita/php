<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* imprime esto del 1 al 100 
for ($i =0 ; $i<100 ;$i++)
{
    echo $i;
} */

/* solo se muestra los números pares del 2 al 100 
for ($i=2; $i<=100; $i+=2){
    echo "$i <br>";
} */

/* Cuando llegue a 60 lo muestra e interrumpe la ejecución. */
for ($i=2; $i <=100; $i+=2){
    echo "$i <br>";
    if ($i == 60){
        break;
    }
}

?>