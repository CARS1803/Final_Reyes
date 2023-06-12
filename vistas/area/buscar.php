<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
require_once '../../modelos/areas.php';

    try {
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
        <h1 class="text-center">Buscar Areas</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/areas/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nom">Nombre del Area</label>
                        <input type="text" name="area_nom" id="area_nom" class="form-control">
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