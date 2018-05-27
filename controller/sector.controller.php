<?php
require_once 'model/Sector.php';

class SectorController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Sector();
    }


    public function Index(){
<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sector/sector.php';
        require_once 'view/includes/footer.php';
    }


    public function Modificar(){
        $sector = new Sector();

        if(isset($_REQUEST['id'])){
            $sector = $this->model->Obtener($_REQUEST['id']);
        }

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sector/sectorModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $sector = new Sector();

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/sector/sectorRegistro.php';
        require_once 'view/includes/footer.php';
    }

<<<<<<< refs/remotes/origin/master
    public function IndexTarifas(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/sector/sectorTarifas.php';
        require_once 'view/includes/footer.php';
    }


    public function Guardar(){
        $sector = new Sector();

        $sector->id                         = $_REQUEST['id'];
        $sector->nombre                     = $_REQUEST['nombre'];
        $sector->capacidad_diaria           = $_REQUEST['capacidad_diaria'];
        $sector->capacidad_acampar          = $_REQUEST['capacidad_acampar'];
        $sector->asp                        = $_REQUEST['asp'];//Campo para la llave forenea, tipo de dato INT

        /*Ingreso por el dia*/
        $sector->adulto_nacional            = $_REQUEST['adulto_nacional'];
        $sector->nino_nacional              = $_REQUEST['nino_nacional'];
        $sector->estudiantes                = $_REQUEST['estudiantes'];
        $sector->adulto_extranjero          = $_REQUEST['adulto_extranjero'];
        $sector->nino_extranjero            = $_REQUEST['nino_extranjero'];
        /*Derecho de camping*/
        $sector->camping_adulto_nacional    = $_REQUEST['camping_adulto_nacional'];
        $sector->camping_nino_nacional      = $_REQUEST['camping_nino_nacional'];
        $sector->camping_estudiantes        = $_REQUEST['camping_estudiantes'];
        $sector->camping_adulto_extranjero  = $_REQUEST['camping_adulto_extranjero'];
        $sector->camping_nino_extranjero    = $_REQUEST['camping_nino_extranjero'];
=======

    public function Guardar(){


        $sector = new Sector();


        $sector->id = $_REQUEST['id'];
        $sector->nombre = $_REQUEST['nombre'];
        $sector->capacidad_diaria = $_REQUEST['capacidad_diaria'];
        $sector->capacidad_acampar= $_REQUEST['capacidad_acampar'];



>>>>>>> add some changes for development
        $sector->id > 0
            ? $this->model->Actualizar($sector)
            : $this->model->Registrar($sector);

        header('Location: index.php?c=Sector');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Sector');
    }
}
