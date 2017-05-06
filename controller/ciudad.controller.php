<?php
require_once 'model/Ciudad.php';

class CiudadController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Ciudad();
    }

    public function Index(){
        require_once 'view/includes/header.php';
        require_once 'view/cuidad/cuidad.php';
        require_once 'view/includes/footer.php';
    }



    public function Modificar(){
        $provincia = new Ciudad();

        if(isset($_REQUEST['id'])){
            $provincia = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/cuidad/ciudadModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $ciudad = new Ciudad();

        if(isset($_REQUEST['id'])){
            $ciudad = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/ciudad/ciudadRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $ciudad = new Ciudad();
        $ciudad->id = $_REQUEST['id'];
        $ciudad->nombre = $_REQUEST['nombre'];
        $ciudad->codigo = $_REQUEST['codigo'];


        $ciudad->id > 0
            ? $this->model->Actualizar($ciudad)
            : $this->model->Registrar($ciudad);

        header('Location: index.php?c=Ciudad');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Ciudad');
    }
}
