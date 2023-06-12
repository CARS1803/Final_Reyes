<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
require_once '../../modelos/puestos.php';
require_once '../../modelos/areas.php';
require_once '../../modelos/generos.php';
    try {
        $puesto = new puestos();
        $puestos = $puesto->buscar();

        $area = new areas();
        $areas = $area->buscar();

        $genero = new Generos();
        $generos = $genero->buscar();
            // var_dump($clientes);
            // exit;
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
    <div class="container">
        <h1 class="text-center">Formulario de empleados</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom">Nombres del Empleado</label>
                        <input type="text" name="emp_nom" id="emp_nom" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_dpi">Documento de Identificacion DPI</label>
                        <input type="number" min="1" name="emp_dpi" id="emp_dpi" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_puesto_cod">Puesto a Desempeñar</label>
                        <select name="emp_puesto_cod" id="emp_puesto_cod" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach ($puestos as $key => $puesto) : ?>
                                <option value="<?= $puesto['PUE_COD'] ?>"><?= $puesto['PUE_DESCR'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_edad">Edad del Empleado</label>
                        <input type="number" min="1" name="emp_edad" id="emp_edad" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_sex_cod">Genero</label>
                        <select name="emp_sex_cod" id="emp_sex_cod" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach ($generos as $key => $genero) : ?>
                                <option value="<?= $genero['SEX_COD'] ?>"><?= $genero['SEX_DESCR'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_area_cod">Area de Asignacion</label>
                        <select name="emp_area_cod" id="emp_area_cod" class="form-control">
                            <option value="">Seleccione...</option>
                            <?php foreach ($areas as $key => $area) : ?>
                                <option value="<?= $area['AREA_COD'] ?>"><?= $area['AREA_NOM'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>