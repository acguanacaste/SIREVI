<?php
require_once 'model/Perfil_imagen.php';

class Perfil_imagenController{

    private $model;
    public function __CONSTRUCT(){
        $this->model = new Perfil_imagen();
    }


    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/perfil/perfil_imagen.php';
        require_once 'view/includes/footer.php';
    }


    public function Modificar(){
        $user = new Perfil_imagen();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/perfil/perfil_imagenModificar.php';
        require_once 'view/includes/footer.php';
    }



    public function CambioContrasena(){
      $user = new Perfil_imagen();

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
        require_once 'view/perfil/perfil_imagen.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $peril = new Perfil_imagen();

        $perfil->id         = $_REQUEST['id'];
        $perfil->anchura     = $_REQUEST['anchura'];
        $perfil->altura   = $_REQUEST['altura'];
        $user->tipo     = $_REQUEST['tipo'];
        $user->imagen = $_REQUEST['imagen'];

        $perfil->id > 0
            ? $this->model->Actualizar($perfil)/*Se esta llamndo desde model Usuarios*/
            : $this->model->Registrar($perfil);/*Se esta llamndo desde model Usuarios*/

        header('Location: index.php?c=Perfil_imagen');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        header('Location: index.php?c=Perfil_imagen');
    }
}
