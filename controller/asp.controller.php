<?php
require_once 'model/ASP.php';

class ASPController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new ASP();
    }


    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/asp/asp.php';
        require_once 'view/includes/footer.php';
    }

    public function Modificar(){
        $asp = new ASP();

        if(isset($_REQUEST['id'])){
            $asp = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/asp/aspModificar.php';
        require_once 'view/includes/footer.php';
    }

    public function UbicacionASP(){
      $asp = new ASP();
      if(isset($_REQUEST['id'])){
        $asp = $this->model->Obtener($_REQUEST['id']);
      }
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/asp/aspUbicacion.php';
      require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $asp = new ASP();
        if(isset($_REQUEST['id'])){
            $asp = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/asp/aspRegistro.php';
        require_once 'view/includes/footer.php';
    }


    public function Guardar(){
        $asp = new ASP();

        $asp->id                = $_REQUEST['id'];
        $asp->nombre            = $_REQUEST['nombre'];
        $asp->tipo              = $_REQUEST['tipo'];
        $asp->ubicacion         = $_REQUEST['ubicacion'];

        $asp->id > 0
            ? $this->model->Actualizar($asp)
            : $this->model->Registrar($asp);

        header('Location: index.php?c=ASP');
    }


    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=ASP');
    }
}
