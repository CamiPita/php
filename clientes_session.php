<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Indico que voy a utilizar variables de seccion, que cumple la función de guardar los datos que colocamos.
session_start();
//Y acá preguntamos ,si esta seteado. 

if (isset($_SESSION["listadoClientes"])) {
    //Si existe la variable de session listadoClientes asigno su contenido a aClientes.
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}


if ($_POST) {

    //Si apretamos el botón ENVIAR, hace todo esto:
    if (isset($_POST["btnEnviar"])) {
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


        //Con esto actualiza los contenidos de variables de session.
        $_SESSION["listadoClientes"] = $aClientes;
    }

    //Si apretamos el botón ELIMINAR , elimina todo:
    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aClientes = array();
    }
}

//Para eliminar fila por fila. Comienza aca el metodo get, lo que se ve en la query strig

if (isset($_GET["pos"])) {
    $pos = $_GET["pos"]; //Aca indica que la variable pos es igual a lo que esta en el metodo pos.
    unset($aClientes[$pos]);
    //Actualizo la variable de session con el array actualizado.
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_session.php"); //Con esto lo redirecciono a la pagina para que vuelva a estar limpia.
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                <form action="" method="post" class="form">
                    <div class="p-2">
                        <label form="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="ingrese el nombre y apellido" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="txtDni">DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="txtTelefono">Teléfono:</label>
                        <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>
                    <div class="p-2">
                        <label form="txtEdad">Edad:</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>
                    <div class="p-2">
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>

                        <button type="submit" name="btnEliminar" class="btn btn-danger">Eliminar</button>
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
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($aClientes as $pos => $cliente):
                        ?>

                            <tr>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["telefono"]; ?></td>
                                <td><?php echo $cliente["edad"]; ?></td>
                                <td>
                                    <a href="clientes_session.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash3"></i> </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>


    </main>

</body>

</html>