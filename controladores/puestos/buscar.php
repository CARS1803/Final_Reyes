<?php
require '../../modelos/puestos.php';
try {
    $puesto = new puestos($_GET);
    $puestos = $puesto->buscar();
    // echo "<pre>";
    // var_dump($empleados);
    // echo "</pre>";
    // exit;
    // $error = "NO se guardó correctamente";
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Resultados</title>
</head>
<br><br>
<center><h1>Resultado de Busqueda</h1></center><br>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>NOMBRE DEL PUESTO</th>
                            <th>MODIFICAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(count($puestos) > 0):?>
                        <?php foreach($puestos as $key => $puesto) : ?>

                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $puesto['PUE_DESCR'] ?></td>
                            <td><a class="btn btn-warning w-100" href="/Final_Reyes/vistas/puestos/modificar.php?pue_cod=<?= $puesto['PUE_COD']?>">Modificar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="3">NO EXISTEN REGISTROS</td>
                            </tr>
                            
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/Final_Reyes/vistas/puestos/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>