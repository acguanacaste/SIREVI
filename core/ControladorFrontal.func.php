<!--ControladorFrontal.func.php que tiene las funciones que se encargan de cargar un
controlador u otro y una acción u otra en función de lo que se le diga por la url.-->
<?php
//FUNCIONES PARA EL CONTROLADOR FRONTAL

function cargarControlador($controller){
//SE ENVIA EL NOMBRE DEL CONTROLADOR
    $controlador=ucwords($controller).'Controller';
    $strFileController='controller/'.$controlador.'.php';
//LO GUARDA EN FICHERO
    if(!is_file($strFileController)){
        $strFileController='controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
    }
//DEVUELVE EL OBJ
    require_once $strFileController;
    $controllerObj=new $controlador();
    return $controllerObj;
}

function cargarAccion($controllerObj,$action){
//SE LE PASA EL OBJ DEL CONTROLADOR Y DE ESE OBJETO LLAMAMOS EL METODO
    $accion=$action;
    $controllerObj->$accion();
}

//LANZAR LA ACCION SE LE PASA EL OBJ DEL CONTROLADOR
function lanzarAccion($controllerObj){
    //CARGA METODO SI NO EXISTE CARGA EL QUE ESTA POR DEFECTO DENTRO DE CONFIG
    //database.php
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        cargarAccion($controllerObj, $_GET["action"]);
    }else{
       //EN CASO DE QUE NOE XISTA EL METODO, SE LLAMA LA CONSTANTE QUE SE CREO
       //EN EL global.php
        cargarAccion($controllerObj, ACCION_DEFECTO);
    }
}

?>
