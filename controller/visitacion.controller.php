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

    public function AdminUser(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacion.php';
        require_once 'view/includes/footer.php';
    }

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


/*=============================>> Para trabajar con la seccion de reporte SEMEC <<====================================*/
    public function Reporte_SEMEC(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/SEMEC.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_SEMEC($result){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/resultado_SEMEC.php';
      require_once 'view/includes/footer.php';
   }
/*=====================================================================================================================*/

/*==========================================>>Para trabajar con la seccion de reporte Diario<<=========================*/
public function Reporte_Diario(){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/reporteDiario.php';
  require_once 'view/includes/footer.php';
}

public function Resultado_Diario($result){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/resultado_reporteDiario.php';
  require_once 'view/includes/footer.php';
}
/*=====================================================================================================================*/

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
      require_once 'view/visitacion/reportes/resultado_reporteDiario.php';
  }

//SE DEBE DE HACER LA VALIDACION DE LOS USUARIOS EN ESTE MODULO, SE REQUIERE DE MUCHO CUIDADO.

    public function Modificar(){
        $visit = new Visitacion();

        if(isset($_REQUEST['id'])){
            $visit = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/visitacionModificar.php';
        require_once 'view/includes/footer.php';
    }

//SE DEBE DE HACER LA VALIDACION DE LOS USUARIOS EN ESTE MODULO, SE REQUIERE DE MUCHO CUIDADO.
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
        $visit->sector                    = $_REQUEST['sector'];
        $visit->usuario                   = $_REQUEST['usuario'];
        $visit->asp                       = $_REQUEST['asp'];

        $visit->id                        = $_REQUEST['id'];
        $visit->proposito_visita          = $_REQUEST['proposito_visita'];

        $visit->noIdentificacion          = $_REQUEST['noIdentificacion'];
        $visit->nombre                    = $_REQUEST['nombre'];
        $visit->placa_automovil           = $_REQUEST['placa_automovil'];
//----------------------------------------------------------------------------------------------------
        $visit->pais                      = $_REQUEST['pais'];
        $visit->provincia                 = $_REQUEST['provincia'];
        $visit->referencia_visita         = $_REQUEST['referencia_visita'];
        $visit->nom_referencia_visita     = $_REQUEST['nom_referencia_visita'];

//--------------------------------------------------------------------------------------------------------
//        $visit->fecha_salida          = $_REQUEST['fecha_salida'];
//------------------------------------------------------------------------------------------------------

        $visit->sendero                   = $_REQUEST['sendero'];
        $visit->dias_camping              = $_REQUEST['dias_camping'];
        $visit->subSector                 = $_REQUEST['subSector'];
//-------------------------------------------------------------------------------------------------------
        $visit->nacional_adult            = $_REQUEST['nacional_adult'];
        $visit->nacional_kid              = $_REQUEST['nacional_kid'];
        $visit->estudiantes               = $_REQUEST['estudiantes'];
        $visit->nacional_exonerado        = $_REQUEST['nacional_exonerado'];

        $visit->extranjero_adult          = $_REQUEST['extranjero_adult'];
        $visit->extranjero_kid            = $_REQUEST['extranjero_kid'];
        $visit->extranjero_exonerado      = $_REQUEST['extranjero_exonerado'];

        $visit->personas_surf             = $_REQUEST['personas_surf'];
        $visit->prepago                   = $_REQUEST['prepago'];

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

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Visitacion');
    }

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

/*==============================================================================================================*/

    public function Consulta_SEMEC_Controller(){

          $result = $this->model->Consulta_SEMEC_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);

          $this->Resultado_SEMEC($result);

          header('Location:?c=Visitacion&a=Resultado_SEMEC');
    }

/*======================================================================================================*/
public function Consulta_ReporteDiario_Controller(){

      $result = $this->model->Consulta_ReporteDiario_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);

      $this->Resultado_Diario($result);

      header('Location:?c=Visitacion&a=Resultado_Diario');
}
/*==================================================================================================*/

public function Consulta_Cant_Personas_Parque_Cotnroller(){

      $result = $this->model->Consulta_Cant_Personas_Parque_Model();
      $this->Resultado_Cantidad($result);

}

/*==================================================================================================*/


}//Fin de la clase
