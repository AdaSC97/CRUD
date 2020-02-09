<?php
class ControladorFormularios{

    static public function ctrRegistro(){
        
        if(isset($_POST["registroNombre"])){

            $tabla = "registros";
            $datos =  array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );

            $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros($item,$valor){

        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item,$valor);
        return $respuesta;

    }

     public function ctrIngreso(){

        if(isset($_POST["ingresoEmail"])){

            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if(is_array($respuesta)){

                if($respuesta["email"] ==  $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){

                    $_SESSION["validarIngreso"] = "ok";

                    echo '<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                       window.location =  "index.php?pagina=inicio"
                       
                        </script>'; 
                }else{
    
                    echo '<script>
                        if ( window.history.replaceState ) {
                            window.history.replaceState( null, null, window.location.href );
                        }
                            
                            </script>';
                
                        echo '<div class="alert alert-danger">Error al ingresar, verifique que su email y password están escritor correctamente</div>';
    
                }

            }else{
    
                echo '<script>
                    if ( window.history.replaceState ) {
                        window.history.replaceState( null, null, window.location.href );
                    }
                        
                        </script>';
            
                    echo '<div class="alert alert-danger">Error al ingresar, verifique que su email y password están escritor correctamente</div>';
                }
        
        }
    }
    static public function ctrActualizarRegistro(){

        if(isset($_POST["actualizarNombre"])){

            if(isset($_POST["actualizarPassword"]) != ""){

                $password = $_POST["actualizarPassword"];
            }else{
                $password = $_POST["passwordActual"];
            }

            $tabla = "registros";
            $datos =  array(
                "id" => $_POST["idUsuario"],
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password
            );

            $respuesta = ModeloFormularios::mdlActualizarRegristro($tabla,$datos);
            return $respuesta;
            
        }
    }
}

?>