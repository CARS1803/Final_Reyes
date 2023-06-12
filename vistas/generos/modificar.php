<br><br>
<?php
require '../../modelos/generos.php';
    try {
        $genero = new Generos($_GET);
        $generos = $genero->buscar2();
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
        <h1 class="text-center">Modificar Genero</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/generos/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <input type="hidden" name="sex_cod" value="<?= $generos[0]['SEX_COD'] ?>" >
                <div class="row mb-3">
                    <div class="col">
                        <label for="sex_descr">Nombre del Genero</label>
                        <input type="text" name="sex_descr" id="sex_descr"  class="form-control" value="<?= $generos[0]['SEX_DESCR'] ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-warning w-100">Modificar</button><br><br>
                        <a href="/Final_Reyes/vistas/generos/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </form>
                    </div>
                </div>
                
        </div>
    </div>
<?php include_once '../../includes/footer.php'?>