<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$aPacientes= array();
$aPacientes []=array("DNI"=>"33.765.012",
"nombre y apellido"=> "Ana Acuña",
"edad"=> "45",
"peso" =>"81",
);

$aPacientes []=array("DNI"=>"23.684.385",
"nombre y apellido"=> "Gonzalo Bustamante",
"edad"=> "66",
"peso" =>"79",
);

$aPacientes []=array("DNI"=>"23.684.385",
"nombre y apellido"=> "Juan Irraola",
"edad"=> "28",
"peso" =>"79",
);

$aPacientes []=array("DNI"=>"23.684.385",
"nombre y apellido"=> "Beatriz Ocampo",
"edad"=> "50",
"peso" =>"79",
);



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>


    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Listado de Pacientes</h1>
            </div>
            <div class="row">
                <div class="col-12">
                <table class="table border table-hover">
                <thead>
                    <tr>
                    <th>DNI:</th> 
                    <th>Nombre y Apellido:</th>
                    <th>Edad:</th>
                    <th>Peso:</th>

                    </tr>
                </thead>

                <tbody>
                    <?php 
                    for ($contador=0;$contador < count ($aPacientes);$contador ++) { 
                
                   ?>
                <tr>
                    <td><?php echo $aPacientes[$contador]["DNI"]; ?></td>
                    <td><?php echo $aPacientes[$contador]["nombre y apellido"]; ?></td>
                    <td><?php echo $aPacientes[$contador]["edad"]; ?></td>
                    <td><?php echo $aPacientes[$contador]["peso"]; ?></td>
            
                </tr>

                <?php 
            } ?>
                </tbody>
                </table>
            </div>
        
            </div>

    </main>
    <footer>

    </footer>
</body>
</html>