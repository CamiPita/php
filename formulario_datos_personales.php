<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST){
    $nombre=$_POST["txtNombre"];
    $dni=$_POST["txtDni"];
    $telefono=$_POST["txtTelefono"];
    $edad=$_POST["txtEdad"];
    if($nombre=="" && $dni=="" && $telefono=="" && $edad==""){
        header("Location:resultado.php");
          }
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pb-3">
                <h1>Formulario de datos personales </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form action="resultado.php" method="POST">
                    <div>
                        <label form="txtNombre">Nombre:* </label>
                        <input type="text" name="txtNombre" id="txtNombre" requerid class="form-control">
                    </div>
                    <div class="pb-3">
                        <label form="txtDni">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" required class="form-control">
                    </div>
                    <div class="pb-3">
                        <label form="txtTelefono">Telefono:*</label>
                        <input type="tel" name="txtTelefono" id="txtTelefono" required class="form-control">

                    </div>
                    <div class="pb-3">
                        <label form="txtEdad">Edad:*</label>
                        <input type="txtEdad" name="txtEdad" id="txtEdad" required class="form-control">
                    </div>
                    <div class="pb-3 text-end">
                        <button type="sublimt" name="btnIngresar" class="btn btn-primary">Enviar </button>

                    </div>
                </form>
            </div>
        </div>

    </main>



</body>

</html>