<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (isset($_SESSION["ListadoClientes"])) {
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes.

    $aClientes = $_SESSION["ListadoClientes"];
} else {
    $aClientes = array();
}

if ($_POST) {
    //Si hace click en ENVIAR, se envia todos los datos.
    if (isset($_POST["btnEnviar"])) {
        //Asignamos en variables los datos que vienen del formulario.  
        $nombre = $_POST["txtNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];

        //Creamos un array que contenga el listado de clientes.
        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad,
        );

        //Actualiza el contenido de variable de session,para que tome la posicion anterior y actualice otra.
        $_SESSION["ListadoClientes"] = $aClientes;
    }
    //Si hace click en ELIMINAR, elimina todos los datos.
    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array();
    }

    //Para eliminar de a una fila.

  
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center p-5">
                <h1>Listado de clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form action="" method="POST">
                    <div>
                        <label form="" class="p-2">Nombre:</label>
                        <input type="text" placeholder="ingrese el nombre y apellido" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div>
                        <label form="" class="p-2">DNI:</label>
                        <input type="text" id="txtDni" name="txtDni" class="form-control">
                    </div>
                    <div>
                        <label form="" class="p-2">Telefono:</label>
                        <input type="tel" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div>
                        <label form="" class="p-2">Edad:</label>
                        <input type="text" id="txtEdad" name="txtEdad" class="form-control">

                    </div>
                    <div class="p-3">
                        <button type="subimt" name="btnEnviar" class="btn btn-primary text-white">ENVIAR</button>
                        <button type="subimt" name="btnEliminar" class="btn btn-danger text-white">ELIMINAR</button>
                    </div>
                </form>
            </div>
            <div class="col-8 p-3">
                <table class="table table-hover shadow border ">
                    <thead>

                        <th>Nombre:</th>
                        <th>DNI:</th>
                        <th>Teléfono:</th>
                        <th>Edad:</th>
                        <th>Acciones:</th>

                    </thead>

                    <tbody>
                        <?php
                        foreach ($aClientes as $cliente) : ?>

                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td><i class="bi bi-trash"></i></td>
                            </tr>


                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>