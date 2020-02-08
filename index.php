<?php
/*El index: es el que mostraremos la salida de las vistas al usuario 
y también a traves de el enviaremos las distintas acciones que el
usuario evíe al controlador*/

/*require establece que el código del archivo invocado es requerido,
 es decir, obligatorio para el funcionamiento del programa. Por ello
 si el archivo especificado en esta función no se encuenra saltará 
 un error "PHP Fatal error" y el programa PHP se detendrá. Mientras
 tanto si se le agrega el _once hace que impida la carga de un
 */
require_once "controladores/plantilla.controlador.php"; 
require_once "controladores/formularios.controlador.php"; 
require_once "modelos/formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>