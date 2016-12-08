<?php
//ESTA CLASE ME VA A CARGAR MODELOBASE Y ENTIDADBASE
class ControladorBase{
//si utilizamos el include la App sigue funcionando pero si usamos el require_once se detiene
    public function __construct() {
        require_once 'EntidadBase.php';
        require_once 'ModeloBase.php';

        //Incluir todos los modelos,CARGA DE LOS MODELOS
        foreach(glob("model/*.php") as $file){//incluye el fichero de modelos
            require_once $file;
        }
    }

    //Plugins y funcionalidades
/*
* Este método lo que hace es recibir los datos del controlador en forma de array
* los recorre y crea una variable dinámica con el indice asociativo y le da el
* valor que contiene dicha posición del array, luego carga los helpers para las
* vistas y carga la vista que le llega como parámetro. En resumen un método para
* renderizar vistas.
*/
//SE LE DA EL NOMBRE DE LA VISTA Y ESTE
//AGARRA EL ID ASOCIATIVO
    public function view($vista,$datos){

        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor;
        }
//CON EL ARRAY QUE SE ENVIE LO RECORRE, EL ID QUE SE LE HA ENVIADO DEL ARRAY LO
//CONVIERTE EN UNA VARRIABLE Y LE DA EL VALOR QUE SE LE HA PUESTO AL ELEMENTO
        require_once 'core/AyudaVistas.php';
        $helper=new AyudaVistas();

        require_once 'view/'.$vista.'View.php';

    }
//ESTE ES UN METODO PARA REDICRECIONAR
//LE PASAMOS USUARIOS Y LA ACCION Y NOS REDIRECCIONA DONDE LA DIGAMOS
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
//REORRER EL ARRAY TOMAR EL INDICE, CREAR UNA VARIABLE CON EL NOMBRE DEL INDICE
// Y DARLE LE VALOR QUE TIENE ESA POSICION DEL ARRAY

        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }

    //Métodos para los controladores

}
?>
