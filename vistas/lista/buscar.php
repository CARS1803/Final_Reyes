<?php
require_once '../../modelos/empleados.php';

    try {
        $empleados = new empleados();
        $empleados = $empleados->buscar();
            // var_dump($empleados);
            // exit;
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de búsqueda de Empleados</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="venta_cliente">NOMBRE DEL EMPLEADO</label>
                        <select name="venta_cliente" id="venta_cliente" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($empleados as $key => $empleado) : ?>
                                <option value="<?= $empleado['EMP_COD'] ?>"><?= $empleado['EMP_NOM'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="venta_cliente">AREA ASIGNADA</label>
                        <select name="venta_cliente" id="venta_cliente" class="form-control">
                            <option value="">SELECCIONE...</option>
                            <?php foreach ($empleados as $key => $empleado) : ?>
                                <option value="<?= $empleado['EMP_COD'] ?>"><?= $empleado['EMP_NOM'] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
               
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>