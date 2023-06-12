<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
    <div class="container">
        <h1 class="text-center">Formulario de empleados</h1>
        <div class="row justify-content-center">
            <form action="/Final_Reyes/controladores/empleados/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_nom">Nombres del Empleado</label>
                        <input type="text" name="emp_nom" id="emp_nom" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_dpi">Documento de Identificacion DPI</label>
                        <input type="number" min="1" name="emp_dpi" id="emp_dpi" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_puesto_cod">Puesto a Desempeñar</label>
                        <select name="emp_puesto_cod" id="emp_puesto_cod" class="form-control">
                            <option value="Encargado de Area">Encargado de Area</option>
                            <option value="Oficinista">Oficinista</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_edad">Edad del Empleado</label>
                        <input type="number" min="1" name="emp_edad" id="emp_edad" class="form-control">
                    </div>
                </div>
                <div class="col">
                        <label for="emp_puesto_cod">Genero del Empleado</label>
                        <select name="emp_sex_cod" id="emp_sex_cod" class="form-control">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_area_cod">Area a Desempeñar</label>
                        <select name="emp_area_cod" id="emp_area_cod" class="form-control">
                            <option value="Recursos Humanos">Recursos Humanos</option>
                            <option value="Logistica">Logistica</option>
                            <option value="Inteligencia">Inteligencia</option>
                        </select>
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