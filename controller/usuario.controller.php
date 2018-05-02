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

    public function AdminUser(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/includes/footer.php';
    }

    public function SectorManagerUser(){
        require_once 'view/includes/headerEncargadoSector.php';
        require_once 'view/usuario/usuario.php';
        require_once 'view/includes/footer.php';
    }


    public function busquedaUsuario(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/usuario/busquedaUsuario.php';
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

    public function agregarRegistro(){
        $user = new Usuario();

        if(isset($_REQUEST['id'])){
            $user = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        session_start();
         if(!isset($_SESSION["email"])){
         echo "<script type='text/javascript'>alert('Usuario Incorrecto');</script>";
         header("Location:?c=login&a=index");
       }

        if ($_SESSION['usuario']['puesto'] == 1) {//Administrador
            echo "Aqui estoy en Administrador";
          require_once 'view/includes/headerPrincipal.php';
          require_once 'view/usuario/usuarioRegistro.php';
          require_once 'view/includes/footer.php';
        }

        elseif ($_SESSION['usuario']['puesto'] == 2) {//Encargado de sector
          echo "Aui estoy en encargado de sector";
          require_once 'view/includes/headerEncargadoSector.php';
          require_once 'view/usuario/usuarioModificar.php';
          require_once 'view/includes/footer.php';
        }
    }


    public function Guardar(){
        $user = new Usuario();

        $user->__SET('id',            $_REQUEST['id']);
        $user->__SET('nombre',        $_REQUEST['nombre']);
        $user->__SET('apellido',      $_REQUEST['apellido']);
        $user->__SET('estado',        $_REQUEST['estado']);
        $user->__SET('cedula',        $_REQUEST['cedula']);
        $user->__SET('contrasena',    $_REQUEST['contrasena']);
        $user->__SET('puesto',        $_REQUEST['puesto']);
        $user->__SET('email',         $_REQUEST['email']);


        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES["foto"]["tmp_name"];
        $destino = "assets/fotos/".$foto;
        copy($ruta,$destino);
        $user->__SET('foto',$destino);

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
    public function CambiarEstado(){
        session_start();

        if ($_SESSION['usuario']['puesto'] == 1){//El numero 1 es administrador, 2 encargado de sector, 3 Reportes, 4 Voluntarios
          $this->model->Estado($_REQUEST['id']);
          header('Location:?c=Usuario');
        }
        else {
          header( 'HTTP/1.0 403 Forbiden');//).
      }
    }

/*======================================================================*/
}
