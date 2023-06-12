<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Buscar Empleados</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom">Nombre del Empleado</label>
                        <input type="text" name="emp_nom" id="emp_nom" class="form-control">
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-info w-100">Buscar</button>
                    </div>
                </div>
                <a href="/Final_Reyes/controladores/empleados/detalle_empleados.php" class="btn btn-warning w-100">Volver al Listado de Empleados</a>
            </form>
        </div>
    </div>
    <?php include_once '../../includes/footer.php'?>