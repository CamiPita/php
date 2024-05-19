<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="">
                <form action="" method="POST">
                    <div class="col-3 p-2">
                        <label form="">Nombre:</label>
                        <input type="text" placeholder="ingrese el nombre y apellido" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="col-3 p-2">
                        <label form="">DNI:</label>
                        <input type="text" id="txtDni" name="txtDni" class="form-control">

                    </div>
                    <div class="col-3 p-2">
                        <label form="">Telefono:</label>
                        <input type="tel" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div class="col-3 p-2">
                        <label form="">Edad:</label>
                        <input type="text" id="lstEdad" name="lstEdad" class="form-control">

                    </div>
                    <div class="p-2">
                    <button type="sublimt" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
                    <button type="sublimt" name="btnEliminar" class="btn btn-danger">ELIMINAR</button>



                    </div>

                </form>
            </div>
        </div>


    </main>
</body>

</html>