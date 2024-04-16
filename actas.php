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
//Uso
$aPromedio = array(8.50, 6.50, 6.50);


$aAlumnos = array("promedio");
$aAlumnos = array();
$aAlumnos[] = array(
    "alumno" => "Ana Valle",
    "nota 1" => "7",
    "nota 2" => "8",
    "promedio" => "8.50",
);

$aAlumnos[] = array(
    "alumno" => "Bernabe Paz",
    "nota 1" => "5",
    "nota 2" => "7",
    "promedio" => "6.50",
);

$aAlumnos[] = array(
    "alumno" => "Aguirre Sebastian",
    "nota 1" => "6",
    "nota 2" => "9",
    "promedio" => "6.50",
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
                        $contador = 0;
                        foreach ($aAlumnos as $alumno) {
                        ?>
                            <tr>

                                <td><?php echo $alumno["alumno"]; ?> </td>
                                <td><?php echo $alumno["nota 1"]; ?> </td>
                                <td><?php echo $alumno["nota 2"]; ?> </td>
                                <td><?php echo number_format(($alumno["promedio"]), 2, ",", "."); ?></td>
                            </tr>
                        <?php
                        } ?>




                    </tbody>
                    <tr>
                        <th>
                            <?php echo "Promedio de la cursada es: " . promediar($aPromedio); ?>
                        </th>
                    </tr>
                </table>
            </div>
        </div>


    </main>

</body>

</html>