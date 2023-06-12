<?php
require '../../modelos/empleados.php';
    try {
        $empleado = new empleados($_GET);

        $empleados = $empleado->buscar2();
        // echo "<pre>";
        // var_dump($empleados[0]['EMP_COD']);
        // echo "</pre>";
        // exit;
        // $error = "NO se guardó correctamente";
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?>
<?php include_once '../../includes/header.php'?>
    <div class="container">
        <h1 class="text-center">Modificar Empleado</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="emp_cod" value="<?= $empleados[0]['EMP_COD'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom">Nombre del Empleado</label>
                        <input type="text" name="emp_nom" id="emp_nom" class="form-control" value="<?= $empleados[0]['EMP_NOM'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_dpi">DPI DEL EMPLEADO</label>
                        <input type="number" min="1" name="emp_dpi" id="emp_dpi" class="form-control" value="<?= $empleados[0]['EMP_DPI'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>