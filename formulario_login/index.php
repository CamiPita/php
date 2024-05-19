<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Siempre arriba del html ,tenemos toda la logica del programa, osea lo que no va a mostrar la pagina con php.
if ($_POST) { // proceso postback, es decir procesa el pedido.
    $usuario = $_POST["txtNombre"]; //Se puede poner tambien $_REQUEST que es lo mismo tambien 
    $clave = $_POST["txtClave"];
    
    if ($usuario == "admin" && $clave == "1234") {
        header("Location:acceso-confirmado.php");
    } else {
        $msg = "Validos para usuarios registrados";
     
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pb-3 pt-3">
                <h1>Formulario</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-6"> 
                <form action="" method="POST"> 
                        <?php if (isset($msg)):?> 
                        <div class="alert alert-danger" role="alert"> 
                                                <?php echo $msg; ?>
                        
                        </div>
                        <?php endif;?>
                    
                    <div class="pb-3">
                        <label form="txtNombre">Usuario:</label>
                        <input type="text" name="txtNombre" id="textNombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <label form="txtClave">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>
                    <div class="">
                        <button type="sublimt" name="btnIngresar" class="btn btn-primary">Enviar </button>

                    </div>
                </form>
            </div>
        </div>


    </main>
</body>

</html>