<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<br><br><br>
    <div class="container">
        <h1 class="text-center">Formulario de Generos</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/generos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">    
            <div class="row mb-3">
                    <div class="col">
                        <label for="sex_descr">Nombres del Genero</label>
                        <input type="text" name="sex_descr" id="sex_descr" class="form-control">
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