<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) { // Pregunto si es POST, es decir , si ingreso al formulario, una vez hecho, comienza el programa //

    $usuario = $_POST["txtUsuario"];
    $clave = $_POST["txtClave"];
    if ($usuario != "" && $clave != "") { // Y acá pregunto si usuario es distinto a vacio y clave es distinto a vacio,de ser asi redirecciona a esa pag.
        header("Location: acceso-confirmado.php");
    } else {
        $msg = "Valido para usuarios registrados";
    }
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
            <div class="col-12 p-3">
                <h1>Formulario</h1>
                <?php if (isset($msg)): ?> <!-- Y acá pregunto , si esta seteado la variable msg , que la nombre arriba en php -->
                    <div class="alert alert-danger" role="alert"> <!-- pongo aca la alerta, porque sino me aparece siempre el color sin haber ingresado -->
                        <?php echo $msg; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <label form="txtUsuario">Usuario:</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label form="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="pb-3">
                        <button type="submit" name="btnEnviar" class="btn btn-primary">Enviar</button>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </main>
</body>
</html>