<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => "33.300.123",
    "nombre" => "David Garcia",
    "bruto" => 85000.30,
);

$aEmpleados[] = array(
    "dni" => "40.874.456",
    "nombre" => "Ana Del Valle",
    "bruto" => 90000,

);

$aEmpleados[] = array(
    "dni" => "67.567.565",
    "nombre" => "Andrés Perez",
    "bruto" => 1000000,

);
$aEmpleados[] = array(
    "dni" => "75.744.545",
    "nombre" => "Victoria Luz",
    "bruto" => 700000,

);

//Definición
function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
}

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
            <div class="col-12 text-center pb-3">
                <h1>Listado de Empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aEmpleados as $empleado) {   ?>
                            <tr>
                                <td><?php echo $empleado["dni"]; ?></td>
                                <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td> <!--el mb strtoupper es para poner todo en mayuscula -->
                                <td>$<?php echo number_format(calcularNeto($empleado["bruto"]), 2, ",", "."); ?></td> <!-- aca lo que hago es que uso la función de poner puntos,comas,ect y plasmo la funcion para calcular el neto-->
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?></p> <!-- con la función count , tira la cantidad de empleados/array que hay -->
            </div>
        </div>
    </main>

</body>

</html>