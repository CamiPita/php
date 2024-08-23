<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => "33300123",
    "nombre " => "David Garcia",
    "bruto" => 85000.30,
);

$aEmpleados[] = array(
    "dni" => "40874456",
    "nombre" => "Ana Del Valle",
    "bruto" => 90000,

);

$aEmpleados[] = array(
    "dni" => "67567565",
    "nombre" => "Andrés Perez",
    "bruto" => 1000000,
    
);
$aEmpleados[] = array(
    "dni" => "75744545",
    "nombre" => "Victoria Luz",
    "bruto" => 700000,
    
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinica</title>
</head>
<body>
    <main class="container">
<div class="row">
    <div class="col-12 text-center">
        <h1>Listado de Empleados</h1>
    </div>
</div>

    </main>
    
</body>
</html>