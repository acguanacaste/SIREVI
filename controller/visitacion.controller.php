<?php
require_once 'model/Visitacion.php';

class VisitacionController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Visitacion();
    }

<<<<<<< refs/remotes/origin/master
    public function Index(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }

    public function AdminUser(){
=======

    public function Index(){
>>>>>>> add some changes for development
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }

<<<<<<< refs/remotes/origin/master
    public function SectorManagerUser(){
        require_once 'view/includes/headerEncargadoSector.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }

    public function ReporteUser(){
      require_once 'view/includes/headerReportes.php';
      require_once 'view/visitacion/visitacion.php';
      require_once 'view/includes/footer.php';
    }

    public function VolunteeringUser(){
        require_once 'view/includes/headerVoluntarios.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }

    public function busquedaVisitacion(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/busquedaVisitacion.php';
        require_once 'view/includes/footer.php';
    }

    public function consultaIngresoSalidaDiario(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/consultaIngresoSalidaDiario.php';
        require_once 'view/includes/footer.php';
    }

    public function Reporte(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/NacionalesAgrupadosXProvincia.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_Nacionalidades(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/resultado_Nacionalidades.php';
      require_once 'view/includes/footer.php';
   }

   public function Excel(){
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=reporte.xls");
      header("Pragma: no-cache");
      header("Expires: 0");
      require_once 'view/visitacion/reportes/resultado_Nacionalidades.php';
  }

//SE DEBE DE HACER LA VALIDACION DE LOS USUARIOS EN ESTE MODULO, SE REQUIERE DE MUCHO CUIDADO.
=======
>>>>>>> add some changes for development

    public function Modificar(){
        $visit = new Visitacion();

        if(isset($_REQUEST['id'])){
            $visit = $this->model->Obtener($_REQUEST['id']);
        }

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/visitacion/visitacionModificar.php';
        require_once 'view/includes/footer.php';
    }

<<<<<<< refs/remotes/origin/master
//SE DEBE DE HACER LA VALIDACION DE LOS USUARIOS EN ESTE MODULO, SE REQUIERE DE MUCHO CUIDADO.
=======

>>>>>>> add some changes for development
    public function agregarRegistro(){
        $visit = new Visitacion();

        if(isset($_REQUEST['id'])){
            $visit = $this->model->Obtener($_REQUEST['id']);
        }

<<<<<<< refs/remotes/origin/master
        require_once 'view/includes/headerPrincipal.php';
=======
        require_once 'view/includes/header.php';
>>>>>>> add some changes for development
        require_once 'view/visitacion/visitacionRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
<<<<<<< refs/remotes/origin/master
//var_dump ($_REQUEST);
//die();
        $visit = new Visitacion();
        $visit->id                        = $_REQUEST['id'];
        $visit->proposito_visita          = $_REQUEST['proposito_visita'];

        $visit->noIdentificacion          = $_REQUEST['noIdentificacion'];
        $visit->nombre                    = $_REQUEST['nombre'];
        $visit->placa_automovil           = $_REQUEST['placa_automovil'];
//----------------------------------------------------------------------------------------------------
        $visit->pais                      = $_REQUEST['pais'];
        $visit->provincia                 = $_REQUEST['provincia'];
        $visit->referencia_visita         = $_REQUEST['referencia_visita'];
//--------------------------------------------------------------------------------------------------------
//        $visit->fecha_salida          = $_REQUEST['fecha_salida'];
//------------------------------------------------------------------------------------------------------
        $visit->sendero                   = $_REQUEST['sendero'];
        $visit->dias_camping              = $_REQUEST['dias_camping'];
        $visit->salida                    = $_REQUEST['salida'];
        $visit->subSector                 = $_REQUEST['subSector'];
//-------------------------------------------------------------------------------------------------------
        $visit->nacional_adult            = $_REQUEST['nacional_adult'];
        $visit->nacional_kid              = $_REQUEST['nacional_kid'];
        $visit->estudiantes               = $_REQUEST['estudiantes'];
        $visit->extranjero_adult          = $_REQUEST['extranjero_adult'];
        $visit->extranjero_kid            = $_REQUEST['extranjero_kid'];

        $visit->personas_surf             = $_REQUEST['personas_surf'];
        $visit->prepago                   = $_REQUEST['prepago'];
        $visit->exonerado                 = $_REQUEST['exonerado'];
//-----------------------------------------------------------------------------------------------------
        $visit->montoCancelar             = $_REQUEST['montoCancelar'];
        $visit->tipo_pago                 = $_REQUEST['tipo_pago'];
        $visit->moneda                    = $_REQUEST['moneda'];

        $visit->id > 0
            ? $this->model->Actualizar($visit)
            : $this->model->Registrar($visit);

        header('Location: index.php?c=Visitacion&a=agregarRegistro');
    }

    public function Conteo(){
      $this->model->ContarRegistros();
    }
=======
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
        $visit->monto                 = $_REQUEST['monto'];
        $visit->moneda                = $_REQUEST['moneda'];
        $visit->total                 = $_REQUEST['total'];

        $user->id > 0
            ? $this->model->Actualizar($visit)
            : $this->model->Registrar($visit);

        header('Location: index.php?c=Usuario');
    }


>>>>>>> add some changes for development

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Visitacion');
    }
<<<<<<< refs/remotes/origin/master

    /*======================================================================*/
        public function Salida(){
            session_start();
            if ($_SESSION['usuario']['puesto'] == 1){//El numero 1 es administrador, 2 encargado de sector, 3 Reportes, 4 Voluntarios
              $this->model->ControlSalidas($_REQUEST['id']);
              header('Location:?c=Visitacion&a=AdminUser');
            }
            else {
              header( 'HTTP/1.0 403 Forbiden');//).
          }
        }


    public function ConsultaNacionalesController(){
      //var_dump ($_REQUEST);
      //die();
      /*echo "<pre>";
      var_dump($_POST);
      echo "</pre>";*/
        $this->model->ConsultaNacionalesModel($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
        header('Location:?c=Visitacion&a=Resultado_Nacionalidades');
      }

=======
>>>>>>> add some changes for development
}
