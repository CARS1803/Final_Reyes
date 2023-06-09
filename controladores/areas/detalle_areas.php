<?php
require_once '../../modelos/empleados.php';

try {
    $empleado = new empleados($_GET);
    $empleados = $empleado->buscar();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listado Empleados</title>
</head>
<body>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Registro de Personal</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/Final_Reyes/controladores/empleados/detalle_empleados.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Listado de Empleados
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/controladores/empleados/detalle_empleados.php">Listado de empleados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/lista/buscar.php">Buscar Empleado</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ingreso de Empleados
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/lista/index.php">Empleado Nuevo</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Areas
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/area/index.php">Crear Areas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/area/buscar.php">Buscar Areas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/controladores/areas/detalle_areas.php">Detalles de Areas</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Puestos
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/puestos/index.php">Crear Puestos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/puestos/buscar.php">Buscar Puestos</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Generos
                    </a>
                    <ul class="dropdown-menu bg-dark">
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/generos/index.php">Crear Genero</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Final_Reyes/vistas/generos/buscar.php">Buscar Genero</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <br><h1 class="text-center">Listado De Empleados por Areas</h1>
            <br>
            <style>
    .areas-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }

    .area {
        width: 100%;
        max-width: 800px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .area h3 {
        text-align: center;
        margin-bottom: 10px;
    }

    .area table {
        width: 100%;
        border-collapse: collapse;
    }

    .area th,
    .area td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ccc;
    }

    .area thead {
        background-color: #333;
        color: #fff;
    }

    .area tbody tr:hover {
        background-color: #f5f5f5;
    }

    .no-records {
        text-align: center;
        margin-top: 20px;
        font-style: italic;
    }
</style>

<?php if (count($empleados) > 0) : ?>
    <div class="areas-container">
        <?php $areas = array(); ?>
        <?php foreach ($empleados as $empleado) : ?>
            <?php $areas[] = $empleado['AREA_NOM']; ?>
        <?php endforeach ?>
        <?php $areas = array_unique($areas); ?>
        <?php foreach ($areas as $area) : ?>
            <div class="area">
                <h3><?= $area ?></h3>
                <table>
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>EMPLEADO</th>
                            <th>DPI</th>
                            <th>PUESTO</th>
                            <th>EDAD</th>
                            <th>SEXO</th>
                            <th>SUELDO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($empleados as $key => $empleado) : ?>
                            <?php if ($empleado['AREA_NOM'] == $area) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $empleado['EMP_NOM'] ?></td>
                                    <td><?= $empleado['EMP_DPI'] ?></td>
                                    <td><?= $empleado['PUE_DESCR'] ?></td>
                                    <td><?= $empleado['EMP_EDAD'] ?></td>
                                    <td><?= $empleado['SEX_DESCR'] ?></td>
                                    <td><?= $empleado['SUELDO'] ?></td>
                                </tr>
                            <?php endif ?>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        <?php endforeach ?>
    </div>
<?php else : ?>
    <p class="no-records">NO EXISTEN REGISTROS</p>
<?php endif ?>

        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <a href="/Final_Reyes/vistas/lista/buscar.php" class="btn btn-warning w-100">Buscar Empleado</a>
            <br><br>
            <a href="/Final_Reyes/vistas/lista/index.php" class="btn btn-info w-100">Volver al formulario</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
