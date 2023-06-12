<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<br><br><br>
    <div class="container">
        <h1 class="text-center">Formulario de Areas y Puestos</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/areas/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                    <div class="col">
                        <label for="area_nom">Nombres del Area</label>
                        <input type="text" name="area_nom" id="area_nom" class="form-control">
                    </div>
            </div>    
            <div class="row mb-3">
                    <div class="col">
                        <label for="pue_descr">Nombres del Puesto</label>
                        <input type="text" name="pue_descr" id="pue_descr" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="pue_suel">Sueldo del Puesto</label>
                        <input type="number" min=1 name="pue_suel" id="pue_suel" class="form-control">
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