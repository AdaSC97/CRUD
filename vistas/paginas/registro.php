<div class="d-flex justify-content-center text-center">
<form action class="p-5 bg-light" method="post">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
           <div class="input-group">
               <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-group-text"><i class="fas fa-user"></i></span>
                </div> 
                <input type="text" class="form-control" placeholder="Teclee su e-mail" id="nombre"  name="registroNombre">
           </div>
     </div>

    <div class="form-group">
        <label for="email">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroup-group-text"><i class="fas fa-at"></i></span>
               </div>
            <input type="email" class="form-control" placeholder="Teclee su e-mail" id="email" name="registroEmail">
            </div>
    </div>

    <div class="form-group">
        <label for="pwd">Contraseña:</label>
           <div class="input-group">
                <div class="input-group-prepend">
                     <span class="input-group-text" id="inputGroup-group-text" ><i class="fas fa-lock"></i></span>
                </div>
            <input type="password" class="form-control" placeholder="Teclee su contraseña" id="pwd" name="registroPassword">
          </div>
     </div>

    <?php
    //FORMA EN LA QUE SE INSTACIA UNA CLASE DE UN MÉTODO NO ESTÁTICO
    /*$registro = new ControladorFormularios();
    $registro -> ctrRegistro();*/

     //FORMA EN LA QUE SE INSTACIA UNA CLASE DE UN MÉTODO ESTÁTICO
     $registro = ControladorFormularios:: ctrRegistro();
     
     if($registro == "ok"){

        echo '<script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
             </script>';

         echo '<div class="alert alert-success">¡Registro agregado correctamente!</div>';
     }
    ?>
        <button class="btn btn-primary">Enviar</button>
</form>
</div>