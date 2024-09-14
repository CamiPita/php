<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if ($_POST) {
    //Asignamos en variables,los datos que vienen del formulario.

    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];

    //Creamos un array de los listados de clientes.
    $aClientes[] = array(
        "nombre" => $nombre,
        "dni" => $dni,
        "telefono" => $telefono,
        "edad" => $edad
    );
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clientes</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-3">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <form action="" method="post">
                    <div class="p-2">
                        <label form="">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="ingrese el nombre y apellido" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="">Teléfono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div class="p-2">
                        <button type="submit" class="btn btn-primary">Enviar</button>

                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </div>

                </form>

            </div>
            <div class="col-6 p-3">
                <table class="table border table-hover shadow">
                    <thead>
                        <tr>
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Teléfono:</th>
                            <th>Edad:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aClientes as $cliente) {
                        ?>

                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>


    </main>

</body>

</html>