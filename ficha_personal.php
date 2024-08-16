<?php //siempre hayq que poner estas 3 lineas, porque muestran los errores del código. 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


date_default_timezone_set("America/Argentina/Buenos_Aires"); //es para que se actulice la fecha horario del país en el que uno se encuentra.

$nombre = "Camila Lucia Pita";
$edad = 29;
/*
$aPeliculas = array("Titanic", "Como si fuera cierto", "Intensamente"); */

$aPeliculas=["Titanic","Como si fuera cierto","intensamente"];//Otra forma
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ficha personal</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center pb-3">
                <h1>Ficha Personal</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover ">
                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date("d/m/Y"); ?></td>
                    </tr>

                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad ?></td>
                    <tr>
                        <th>Pelicula favorita:</th>
                        <td> <?php echo $aPeliculas[0]; ?> <br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?> </td>
                    </tr>
                </table>
            </div>
        </div>



    </main>


</body>

</html>