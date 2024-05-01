<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definición 
function promediar($aPromedio)
{
    $suma = 0;
    foreach ($aPromedio as $promedio) {
        $suma = $suma + $promedio;
    }
    return $suma / count($aPromedio);
}
// Uso
$aPromedio = array(6.50, 6, 7.50);

$aAlumnos = array();
$aAlumnos[] = array(
    "alumno" => "Ana Valle",
    "notas" => array(7, 6)
);

$aAlumnos[] = array(
    "alumno" => "Bernabe Paz",
    "notas" => array(5, 7)
);

$aAlumnos[] = array(
    "alumno" => "Aguirre Sebastian",
    "notas" => array(6, 9)
);


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="row">

            <div class="col-12 text-center py-3">
                <h1>ACTAS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>Alumno</th>
                            <th>Nota 1</th>
                            <th>Nota 2</th>
                            <th>Promedio</th>

                        </tr>

                    </thead>
                    <tbody>
                        <?php

                        foreach ($aAlumnos as $alumno) {

                        ?>
                            <tr>

                                <td><?php echo $alumno["alumno"]; ?> </td>
                                <td><?php echo $alumno["notas"][0]; ?> </td>
                                <td><?php echo $alumno["notas"][1]; ?> </td>
                                <td><?php echo promediar($alumno["notas"]); ?></td>

                            </tr>
                        <?php
                        } ?>

                    </tbody>

                </table>
                <div class="row">
                    <div class="col-12">
                        <p>Promedio de la cursada es: <?php echo number_format(promediar($aPromedio), 2, ",", "."); ?> </p>

                    </div>
                </div>
            </div>

        </div>
        </div>


    </main>

</body>

</html>