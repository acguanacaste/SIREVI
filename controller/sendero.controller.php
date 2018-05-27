<?php
require_once 'model/Sendero.php';

class SenderoController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Sendero();
    }


    public function Index(){
<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sendero/sendero.php';
        require_once 'view/includes/footer.php';
    }


    public function Modificar(){
        $sendero = new Sendero();

        if(isset($_REQUEST['id'])){
            $sendero = $this->model->Obtener($_REQUEST['id']);
        }

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sendero/senderoModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $sendero = new Sendero();

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sendero/senderoRegistro.php';
        require_once 'view/includes/footer.php';
    }


    public function Guardar(){
<<<<<<< refs/remotes/origin/master

        $sendero = new Sendero();
        $sendero->id = $_REQUEST['id'];
        $sendero->nombre = $_REQUEST['nombre'];
        $sendero->caracterizacion_sendero = $_REQUEST['caracterizacion_sendero'];
        $sendero->tipo_sendero = $_REQUEST['tipo_sendero'];
        $sendero->atractivo = $_REQUEST['atractivo'];
        $sendero->distancia = $_REQUEST['distancia'];
        $sendero->sector = $_REQUEST['sector'];
        $sendero->tiempo_recorrido = $_REQUEST['tiempo_recorrido'];
        $sendero->punto_alto = $_REQUEST['punto_alto'];
        $sendero->punto_inicio = $_REQUEST['punto_inicio'];
        $sendero->punto_llegada = $_REQUEST['punto_llegada'];
        $sendero->descripcion = $_REQUEST['descripcion'];
        $sendero->regulaciones = $_REQUEST['regulaciones'];


        $sendero->id > 0
            ? $this->model->Actualizar($sendero)
            : $this->model->Registrar($sendero);
=======
        $sendero = new Sendero();

        $sendero->id = $_REQUEST['id'];
        $sendero->nombre = $_REQUEST['nombre'];
        $sendero->distancia = $_REQUEST['distancia'];
        $sendero->longitud= $_REQUEST['longitud'];
        $sendero->longitud= $_REQUEST['latitud'];



        $sector->id > 0
            ? $this->model->Actualizar($sector)
            : $this->model->Registrar($sector);
>>>>>>> add some changes for development

        header('Location: index.php?c=Sendero');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Sendero');
    }
<<<<<<< refs/remotes/origin/master

    public function Descripcion(){
        $sendero = new Sendero();

        if(isset($_REQUEST['id'])){
            $sendero = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/sendero/senderoDescripcion.php';
        require_once 'view/includes/footer.php';
    }



=======
>>>>>>> add some changes for development
}
