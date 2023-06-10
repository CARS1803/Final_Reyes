<?php

require_once '../../modelos/empleados.php';

try {
    $_GET['venta_fecha'] = $_GET['venta_fecha'] != '' ? date('Y-m-d', strtotime($_GET['venta_fecha'])) : '';

    $venta = new empleados($_GET);
    
    $ventas = $venta->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
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
    <title>Listado Empleados</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>EMPLEADO</th>
                            <th>DPI</th>
                            <th>PUESTO</th>
                            <th>EDAD</th>
                            <th>SEXO</th>
                            <th>SUELDO</th>
                            <th>DETALLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($ventas) > 0) : ?>
                            <?php foreach ($ventas as $key => $venta) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $venta['EMP_NOM'] ?></td>
                                    <td><?= $venta ['EMP_DPI'] ?></td>
                                    <td><?= $venta['PUE_DESCR'] ?></td>
                                    <td><?= $venta['EMP_EDAD'] ?></td>
                                    <td><?= $venta['SEX_DESCR'] ?></td>
                                    <td><?= $venta['SUELDO'] ?></td>
                                    <td><a class="btn btn-info w-100" href="/crud_practica9/vistas/ventas/factura.php?venta_id=<?php echo $venta['DETALLE_ID'] ?>">VER DETALLE</a></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="8">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/Final_Reyes/vistas/lista/index.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>