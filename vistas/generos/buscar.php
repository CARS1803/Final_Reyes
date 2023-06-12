<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<?php
require_once '../../modelos/generos.php';

    try {
        $genero = new Generos();
        $generos = $genero->buscar();
            // var_dump($clientes);
            // exit;
    } catch (PDOException $e) {
        $error = $e->getMessage();
    } catch (Exception $e2){
        $error = $e2->getMessage();
    }
?><br>
    <div class="container">
        <h1 class="text-center">Buscar Generos</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/generos/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="sex_descr">Nombre del Genero</label>
                        <input type="text" name="sex_descr" id="sex_descr" class="form-control">
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