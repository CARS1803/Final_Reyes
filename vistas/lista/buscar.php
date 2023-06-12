<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
require_once '../../modelos/areas.php';
require_once '../../modelos/puestos.php';
    try {
        $puesto = new puestos();
        $puestos = $puesto->buscar();

        $area = new areas();
        $areas = $area->buscar();
            // var_dump($clientes);
            // exit;
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?><br>
    <div class="container">
        <h1 class="text-center">Buscar Empleados</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom">Nombre del Empleado</label>
                        <input type="text" name="emp_nom" id="emp_nom" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nom">Area de Asignacion</label>
                        <select name="area_nom" id="area_nom" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach ($areas as $key => $area) : ?>
                                <option value="<?= $area['AREA_NOM'] ?>"><?= $area['AREA_NOM'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="pue_descr">Puesto que Desempeña</label>
                        <select name="pue_descr" id="pue_descr" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach ($puestos as $key => $puesto) : ?>
                                <option value="<?= $puesto['PUE_DESCR'] ?>"><?= $puesto['PUE_DESCR'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
                <a href="/Final_Reyes/controladores/empleados/detalle_empleados.php" class="btn btn-warning w-100">Volver al Listado de Empleados</a>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>