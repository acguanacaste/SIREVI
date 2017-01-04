<?php
require_once 'model/Pais.php';

class PaisController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Pais();
    }

    public function Index(){
        require_once 'view/includes/header.php';
        require_once 'view/pais/pais.php';
        require_once 'view/includes/footer.php';
    }



    public function Modificar(){
        $pais = new Pais();

        if(isset($_REQUEST['id'])){
            $pais = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/pais/paisModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $pais = new Pais();

        if(isset($_REQUEST['id'])){
            $pais = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/pais/paisRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $pais = new Pais();

        $pais->id = $_REQUEST['id'];
        $pais->nombre = $_REQUEST['nombre'];
        $pais->codigo = $_REQUEST['codigo'];


        $pais->id > 0
            ? $this->model->Actualizar($pais)
            : $this->model->Registrar($pais);

        header('Location: index.php?c=Pais');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Pais');
    }
}
