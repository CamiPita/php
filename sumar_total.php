<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listado de productos</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h1>Listado de productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">

                    <thead>

                        <tr>
                            <th>Nombre</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php /* bucle de for */
                        $sumatoriaPrecio = 0;
                        for ($contador = 0; $contador < count($aProductos); $contador++) {
                            $sumatoriaPrecio += $aProductos[$contador]["precio"] ?>
                            <tr>
                                <td><?php echo $aProductos[$contador]["nombre"] ?></td>
                                <td><?php echo $aProductos[$contador]["marca"] ?></td>
                                <td><?php echo $aProductos[$contador]["modelo"] ?></td>
                                <td><?php echo $aProductos[$contador]["stock"] >= 10 ? "Hay stock" : ($aProductos[$contador]["stock"] == 0 ? "No hay stock" : "Poco stock"); ?></td>
                                <td><?php echo $aProductos[$contador]["precio"] ?></td>
                                <td><button class="btn btn-primary">Comprar</button></td>

                            </tr>
                        <?php

                        } ?>

                    </tbody>

                </table>
                <div class="row">
                    <div class="col-12">
                        <p>Total es: <?php echo $sumatoriaPrecio ?></p>
                    </div>
                </div>
            </div>
        </div>

    </main>



</body>

</html>