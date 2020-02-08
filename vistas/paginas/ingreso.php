<div class="d-flex justify-content-center text-center">
    <form action class="p-5 bg-light" method="post">
    
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-group-text"><i class="fas fa-at"></i></span>
                </div>
                <input type="email" class="form-control" placeholder="Teclee su e-mail" id="email" name="ingresoEmail">
                </div>
        </div>

        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-group-text" ><i class="fas fa-lock"></i></span>
                    </div>
                <input type="password" class="form-control" placeholder="Teclee su contraseña" id="pwd" name="ingresoPassword">
            </div>
        </div>

        <?php

        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();



        ?>

        <button class="btn btn-primary">Ingresar</button>

    </form>
</div>