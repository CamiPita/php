<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Hay que inicializarlo en cero a las variables que creo, para que comience en cero.
$iva = 0;
$sinIva = 0;
$conIva = 0;
$ivaCantidad = 0;
//Aca pregunto si es POST.
if ($_POST) {
    $iva = $_POST["lstIva"];
    $sinIva = ($_POST["txtSinIva"]) > 0 ? $_POST["txtSinIva"] : 0; //Hago esta cuenta donde txtsiniva es mayor a cero,si es imprime eso,sino es cero.
    $conIva = ($_POST["txtConIva"]) > 0 ? $_POST["txtConIva"] : 0;

    //Dado un importe sin IVA, Precio con IVA = importe * (21/100+1)
    if ($sinIva > 0) {
        $conIva = $sinIva * ($iva / 100 + 1);
    }

    //Dado un importe con IVA, Precio con IVA = importe / (21/100+1)

    if ($conIva > 0) {
        $sinIva = $conIva / ($iva / 100 + 1);
    }
    //Iva cantidad es Precio con IVA - Precio sin IVA.
    $ivaCantidad = $conIva - $sinIva;
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcular</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <form action="" method="post">
                    <div class="p-2">
                        <label for="">IVA:</label>
                        <select name="lstIva" id="lstIva" class="form-control">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21">21</option>
                            <option value="27">27</option>
                        </select>
                    </div>
                    <div class="p-2">
                        <label for="">Precio sin IVA:</label>
                        <input type="txt" name="txtSinIva" id="txtSinIva" class="form-control">
                    </div>
                    <div class="p-2">
                        <label for="">Precio con IVA:</label>
                        <input type="txt" name="txtConIva" id="txConIva" class="form-control">
                    </div>
                    <div class="p-2">
                        <button type="submit" class="btn btn-primary">CALCULAR</button>
                    </div>
                </form>
            </div>

            <div class="col-4 ps-5 pt-3">
                <table class="table border table-hover">
                    <tbody>
                        <tr>
                            <th>IVA:</th>
                            <td><?php echo $iva; ?>%</td>
                        </tr>
                        <tr>
                            <th>Precio sin IVA:</th>
                            <td>$<?php echo number_format(($sinIva), 2, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <th>Precio con IVA:</th>
                            <td>$<?php echo number_format(($conIva), 2, ",", "."); ?></td>
                        </tr>
                        <tr>
                            <th>IVA cantidad:</th>
                            <td>$<?php echo number_format(($ivaCantidad), 2, ",", "."); ?></td>
                        </tr>

                    </tbody>


                </table>
            </div>
        </div>
        </div>

    </main>

</body>

</html>