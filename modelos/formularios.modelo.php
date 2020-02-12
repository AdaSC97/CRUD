<?php

require_once "conexion.php"; 

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){

        #statement: declaración

        #prepare previene inyeccioes SQL

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password)
         VALUES (:token, :nombre, :email, :password)");

         #bindParam()vinculula un variable de PHP en sustitución con el nombre o signo de interrogación correspondiente
         # a la sentencia SQL que fue usada para preparar la sentencia

         $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
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

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

        if($item == null && $valor == null ){
            $stmt = Conexion::conectar()->prepare("SELECT * ,DATE_FORMAT(fecha,'%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC ");

            $stmt->execute();
    
            return $stmt-> fetchAll();

        }else{
            $stmt = Conexion::conectar()->prepare(" SELECT * ,DATE_FORMAT(fecha,'%d/%m/%Y') 
            AS fecha FROM $tabla 
            WHERE $item = :$item
            ORDER BY id DESC ");
            
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt->execute();
    
            return $stmt-> fetch();//solo permite un valor
        }
        $stmt->close();
        $stmt = null;

    }
    static public function mdlActualizarRegristro($tabla, $datos){

        #statement: declaración

        #prepare previene inyeccioes SQL

        $stmt = Conexion::conectar()->prepare("UPDATE registros SET token = :token, nombre = :nombre, email = :email,
         password = :password WHERE id = :id");

         $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
         $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
         $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
         $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
         $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

         if($stmt->execute()){
             return "ok";
         }else{
             print_r(Conexion::conectar()->errorInfo());
         }

         $stmt->close();
         $stmt = null;

    }

    static public function mdlEliminarRegristro($tabla, $valor){

        #statement: declaración

        #prepare previene inyeccioes SQL

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE token = :token");

         $stmt->bindParam(":token", $valor, PDO::PARAM_STR);

         if($stmt->execute()){
             return "ok";
         }else{
             print_r(Conexion::conectar()->errorInfo());
         }

         $stmt->close();
         $stmt = null;

    }

    static public function mdlActualizarIntentosFallidos($tabla, $valor, $token){

        #statement: declaración

        #prepare previene inyeccioes SQL

        $stmt = Conexion::conectar()->prepare("UPDATE registros SET intentos_fallidos = :intentos_fallidos WHERE token = :token");

        
         $stmt->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
         $stmt->bindParam(":token", $token, PDO::PARAM_STR);

         if($stmt->execute()){
             return "ok";
         }else{
             print_r(Conexion::conectar()->errorInfo());
         }

         $stmt->close();
         $stmt = null;

    }


}

/*$conexion =  Conexion::conectar();*/
/*echo '<pre>'; print_r($conexion); echo '</pre>';*/