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
                        <label for="emp_ape">Apellidos del Empleado</label>
                        <input type="text" name="emp_ape" id="emp_ape" class="form-control">
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
                            <option value="emp_puesto_cod">Recursos Humanos</option>
                            <option value="emp_puesto_cod">Logistica</option>
                            <option value="emp_puesto_cod">Inteligencia</option>
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
                            <option value="emp_sex_cod">Masculino</option>
                            <option value="emp_sex_cod">Femenino</option>
                        </select>
                    </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="emp_area_cod">Numero de Area donde se Desempeña</label>
                        <input type="number" min="1" name="emp_area_cod" id="emp_area_cod" class="form-control">
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