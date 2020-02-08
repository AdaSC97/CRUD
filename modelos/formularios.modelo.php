<?php

require_once "conexion.php"; 

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){

        #statement: declaración

        #prepare previene inyeccioes SQL

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password)
         VALUES (:nombre, :email, :password)");

         #bindParam()vinculula un variable de PHP en sustitución con el nombre o signo de interrogación correspondiente
         # a la sentencia SQL que fue usada para preparar la sentencia

         $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

         if($stmt->execute()){
             return "ok";
         }else{
             print_r(Conexion::conectar()->errorInfo());
         }

         $stmt->close();
         $stmt = null;

    }

    static public function mdlSeleccionarRegistros($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM registros");

        $stmt->execute();

        return $stmt-> fetchAll();

        $stmt->close();
        $stmt = null;

    }
}

/*$conexion =  Conexion::conectar();*/
/*echo '<pre>'; print_r($conexion); echo '</pre>';*/