<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$aAlumnos = array();
$aAlumnos[] = array("nombre" => "Juan Perez", "aNotas" => array(9, 8));
$aAlumnos[] = array("nombre" => "Ana Valle", "aNotas" => array(4, 9));
$aAlumnos[] = array("nombre" => "Gonzalo Roldan", "aNotas" => array(7, 6));

//Definición
function promediar($aAlumnos)
{

    $suma = 0;
    foreach ($aAlumnos as $alumno) {
        $suma = $suma + $alumno / count($aAlumnos);
    }
    return $suma;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Actas</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-3">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
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
                        $promedio = 0;
                        $sumaTotal = 0;
                        foreach ($aAlumnos as $alumno) { //Lo que hago es que este bucle,recorra la cantidad que hay de alumnos en la tabla.
                            $contador++;
                            $promedio = promediar($alumno["aNotas"]); //aca llamo la funcion promediar y le doy un nombre de una variable.
                            $sumaTotal = $sumaTotal + $promedio; //aca nombro otra para sumar esa variable y poder sacar la funcion total.
                        ?>

                            <tr>
                                <td><?php echo $alumno["nombre"] ?></td>
                                <td><?php echo $alumno["aNotas"][0] ?></td>
                                <td><?php echo $alumno["aNotas"][1] ?></td>
                                <td><?php echo number_format($promedio, 2, ",", "."); ?></td>
                            </tr>
                        <?php } ?>

            </div>
            </tbody>

            </table>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Promedio de la cursada: <?php echo number_format(($sumaTotal / count($aAlumnos)), 2, ",", "."); ?></p>
            </div>
        </div>


    </main>
</body>

</html>