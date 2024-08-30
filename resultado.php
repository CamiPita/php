<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_POST) {
    $nombre=$_POST["txtNombre"];
    $dni=$_POST["txtDni"];
    $telefono=$_POST["txtTelefono"];
    $edad=$_POST["txtEdad"];
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-4">
                <h1>Resultado de formulario</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                        </tr>

                    </thead>

                    <tbody>
                        
                    <?php

                        ?>
                            <tr>
                                <td><?php echo $nombre ?></td>
                                <td><?php echo $dni; ?></td>
                                <td><?php echo $telefono ;?></td>
                                <td><?php echo $edad ; ?></td>

                            </tr>
                    
                 
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>