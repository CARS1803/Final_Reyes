<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
require_once '../../modelos/puestos.php';

    try {
        $puesto = new puestos();
        $puestos = $puesto->buscar();
            // var_dump($clientes);
            // exit;
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?><br>
    <div class="container">
        <h1 class="text-center">Buscar Puestos</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/puestos/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="pue_descr">Nombre del Puesto</label>
                        <input type="text" name="pue_descr" id="pue_descr" class="form-control">
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