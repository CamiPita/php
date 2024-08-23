<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">

                    <thead>

                        <tr>
                            <th>DNI</th>
                            <th>Nombre y Apellido</th>
                            <th>Edad</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aPacientes as $paciente) {

                        ?>
                            <tr>
                                <td><?php echo $paciente["dni"] ?></td>
                                <td><?php echo $paciente["nombre y apellido"] ?></td>
                                <td><?php echo $paciente["edad"] ?></td>
                                <td><?php echo $paciente["peso"]  ?></td>

                            </tr>
                        <?php
                        } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </main>
</body>

</html>