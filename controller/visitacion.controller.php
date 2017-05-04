<?php
require_once 'model/Visitacion.php';

class VisitacionController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Visitacion();
    }


    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }


    public function Modificar(){
        $visit = new Visitacion();

        if(isset($_REQUEST['id'])){
            $visit = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacionModificar.php';
        require_once 'view/includes/footer.php';
    }


    public function agregarRegistro(){
        $visit = new Visitacion();

        if(isset($_REQUEST['id'])){
            $visit = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacionRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $visit = new Visitacion();

        $visit->id                    = $_REQUEST['id'];
        $visit->noIdentificacion      = $_REQUEST['noIdentificacion'];
        $visit->nombre                = $_REQUEST['nombre'];
        $visit->fecha_ingreso         = $_REQUEST['fecha_ingreso'];
        $visit->fecha_salida          = $_REQUEST['fecha_salida'];
        $visit->acampa                = $_REQUEST['acampa'];
        $visit->dias_camping          = $_REQUEST['dias_camping'];
        $visit->cantidadPersonasSurf  = $_REQUEST['cantidadPersonasSurf'];
        $visit->prepago               = $_REQUEST['prepago'];
        $visit->exonerado             = $_REQUEST['exonerado'];
        $visit->numero_diario         = $_REQUEST['numero_diario'];
        $visit->placa_automovil       = $_REQUEST['placa_automovil'];
        $visit->tipo_automovil        = $_REQUEST['tipo_automovil'];

        $visit->moneda                = $_REQUEST['moneda'];
        $visit->total                 = $_REQUEST['total'];

        $user->id > 0
            ? $this->model->Actualizar($visit)
            : $this->model->Registrar($visit);

        header('Location: index.php?c=Usuario');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Visitacion');
    }
}
