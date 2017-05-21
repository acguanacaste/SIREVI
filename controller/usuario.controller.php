<?php
require_once 'model/Usuario.php';

class UsuarioController{

    private $model;
    public function __CONSTRUCT(){
        $this->model = new Usuario();
    }


    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/includes/footer.php';
    }



    public function Modificar(){
        $user = new Usuario();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/usuario/usuarioModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function CambioContrasena(){
      $user = new Usuario();

      if(isset($_REQUEST['id'])){
          $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
      }

      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/usuario/contrasena.php';
      require_once 'view/includes/footer.php';

    }

    public function agregarRegistro(){
        $user = new Usuario();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        require_once 'view/includes/headerPrincipal.php';
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
        $user->imagen     = $_REQUEST['imagen'];

        $user->id > 0
            ? $this->model->Actualizar($user)/*Se esta llamndo desde model Usuarios*/
            : $this->model->Registrar($user);/*Se esta llamndo desde model Usuarios*/

        header('Location: index.php?c=Usuario');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        header('Location: index.php?c=Usuario');
    }


/*======================================================================*/
    public function Desabilitar(){
        $this->model->Desabilitar($_REQUEST['id'], $_REQUEST['valor']);/*Se esta llamndo desde model Usuarios*/
        header('Location: index.php?c=Usuario');
    }

/*======================================================================*/

}
