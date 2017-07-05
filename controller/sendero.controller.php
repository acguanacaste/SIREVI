<?php
require_once 'model/Sendero.php';

class SenderoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Sendero();
    }


    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/sendero/sendero.php';
        require_once 'view/includes/footer.php';
    }


    public function Modificar(){
        $sendero = new Sendero();

        if(isset($_REQUEST['id'])){
            $sendero = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/sendero/senderoModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $sendero = new Sendero();

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/sendero/senderoRegistro.php';
        require_once 'view/includes/footer.php';
    }


    public function Guardar(){
        $sendero = new Sendero();

        $sendero->id = $_REQUEST['id'];
        $sendero->nombre = $_REQUEST['nombre'];
        $sendero->distancia = $_REQUEST['distancia'];
        $sendero->latitud= $_REQUEST['latitud'];
        $sendero->longitud= $_REQUEST['longitud'];
        $sendero->sector=$_REQUEST['sector'];



        $sendero->id > 0
            ? $this->model->Actualizar($sendero)
            : $this->model->Registrar($sendero);

        header('Location: index.php?c=Sendero');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Sendero');
    }
}
