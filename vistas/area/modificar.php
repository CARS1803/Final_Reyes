<br><br>
<?php
require '../../modelos/areas.php';
    try {
        $area = new areas($_GET);

        $areas = $area->buscar2();
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
        <h1 class="text-center">Modificar Area</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/areas/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="area_cod" value="<?= $areas[0]['AREA_COD'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="area_nom">Nombre del Area</label>
                        <input type="text" name="area_nom" id="area_nom" class="form-control" value="<?= $areas[0]['AREA_NOM'] ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button><br><br>
                        <a href="/Final_Reyes/vistas/area/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </form>
                    </div>
                </div>
                
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>