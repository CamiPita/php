<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "DNI" => "33300123",
    "Nombre" => "David García",
    "bruto" => "8500.30");
$aEmpleados[] = array(
    "DNI" => "40874456",
    "Nombre" => "Ana del Valle",
    "bruto" => "90000");
$aEmpleados[] = array(
    "DNI" => "67567565",
    "Nombre" => "Andrés Perez",
    "bruto" => "100000");
$aEmpleados[] = array(
    "DNI" => "75744545",
    "Nombre" => "Victoria Luz",
    "bruto" => "70000");

    function calcularNeto($bruto) 
    {
        return $bruto - ($bruto * 0.17);
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1> Listado de empleados</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover border">
                        <thead>
                            <tr>
                                <th>DNI:</th>
                                <th>Nombre:</th>
                                <th>Sueldo:</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            foreach ($aEmpleados as $empleado) {

                            ?>
                                <tr>
                                    <td><?php echo $empleado["DNI"]; ?></td>
                                    <td><?php
                                        $str = $empleado["Nombre"];
                                        $str = mb_strtoupper($str);
                                        echo $str;
                                        ?></td>
                                    <td>$<?php echo number_format (calcularNeto ($empleado ["bruto"]) ,2, ",", ".");
                                            ?></td>
                                    <td></td>

                                </tr>
                            <?php

                            } ?>
                            <div class="row">
                                <div class="col-12 ">

                                    <tr>
                                        <td colspan="3"> <?php
                                                            //Definición
                                                            function contar($aArray)
                                                            {
                                                                $contador = 0;
                                                                foreach ($aArray as $item) {
                                                                    $contador++;
                                                                }
                                                                return $contador;
                                                            }
                                                            //Uso
                                                            echo "Cantidad de empleados activos: " . contar($aEmpleados);
                                                            ?>
//Otra manera es hacerlo con count , poner en p Cantidad de empleados activos : echo count($aEmpleados);
                                        </td>
                                    </tr>
                                </div>
                            </div>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>