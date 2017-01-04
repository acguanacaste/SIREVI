<?php
require_once 'model/Provincia.php';

class ProvinciaController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Provincia();
    }

    public function Index(){
        require_once 'view/includes/header.php';
        require_once 'view/provincia/provincia.php';
        require_once 'view/includes/footer.php';
    }



    public function Modificar(){
        $provincia = new Provincia();

        if(isset($_REQUEST['id'])){
            $provincia = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/provincia/provinciaModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $provincia = new Provincia();

        if(isset($_REQUEST['id'])){
            $provincia = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/provincia/provinciaRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $provincia = new Provincia();
        $provincia->id = $_REQUEST['id'];
        $provincia->nombre = $_REQUEST['nombre'];
        $provincia->codigo = $_REQUEST['codigo'];


        $provincia->id > 0
            ? $this->model->Actualizar($provincia)
            : $this->model->Registrar($provincia);

        header('Location: index.php?c=Provincia');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Provincia');
    }
}
