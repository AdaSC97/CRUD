<?php

class ControladorPlantilla{
    //Llamada a la plantilla

    public function ctrTraerPlantilla(){
        //el INCLUDE se utiliza para invocar el archivo que contiene codigo html-php
        include "vistas/plantilla.php";
    }
}

?>