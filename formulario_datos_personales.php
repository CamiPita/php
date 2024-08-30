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
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-3">
                <h1>Formulario de datos personales</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="resultado.php" method="post">
                    <div class="p-2">
                        <label form="txtNombre">Nombre:*</label>
                        <input class="form-control" type="text" name="txtNombre" id="txtNombre" required>
                    </div>
                    <div class="p-2">
                        <label form="txtDni">DNI:*</label>
                        <input class="form-control" type="text" name="txtDni" id="txtDni" required>
                    </div>
                    <div class="p-2">
                        <label form="txtTelefono">Teléfono:*</label>
                        <input class="form-control" type="text" name="txtTelefono" id="txtTelefono" required>
                    </div>
                    <div class="p-2">
                        <label form="txtEdad">Edad:*</label>
                        <input class="form-control" type="number" name="txtEdad" id="txtEdad" required>
                    </div>
                    <div class="text-end p-2">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

        </div>

    </main>
</body>

</html>