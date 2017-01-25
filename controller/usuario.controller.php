<?php
require_once 'model/Usuario.php';

class UsuarioController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }


    public function Index(){
        require_once 'view/includes/header.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/includes/footer.php';
    }


    public function Crud(){
        $user = new Usuario();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/usuario/usuarioModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $user = new Usuario();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/header.php';
        require_once 'view/usuario/usuarioRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $user = new Usuario();

        $user->id         = $_REQUEST['id'];
        $user->nombre     = $_REQUEST['nombre'];
        $user->apellido   = $_REQUEST['apellido'];
        $user->cedula     = $_REQUEST['cedula'];
        $user->contrasena = $_REQUEST['contrasena'];
        $user->puesto     = $_REQUEST['puesto'];
        $user->email      = $_REQUEST['email'];

        $user->id > 0
            ? $this->model->Actualizar($user)
            : $this->model->Registrar($user);

        header('Location: index.php?c=Usuario');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Usuario');
    }
}
