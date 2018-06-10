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

    public function ReportsUser(){
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

    public function busquedaSubSector(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/consultaSubSector.php';
        require_once 'view/includes/footer.php';
    }

    public function  Resultado_busquedaSubSector($result){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/resultadoConsultaSubsector.php';
        require_once 'view/includes/footer.php';
    }

/*=============================>> Para trabajar con la seccion de reporte SEMEC <<====================================*/
    public function Reporte_SEMEC(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/SEMEC/SEMEC.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_SEMEC($result){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/SEMEC/resultado_SEMEC.php';
      require_once 'view/includes/footer.php';
   }

   public function Excel_SEMEC(){

    session_start();
       header("Content-type: application/vnd.ms-excel");
         header("Content-Disposition: attachment; filename=reporte.xls");
         header("Pragma: no-cache");
         header("Expires: 0");
         require_once 'view/visitacion/reportes/SEMEC/resultado_SEMEC.php';
     }




    public function Excel_CAMPISTAS(){

      session_start();
         header("Content-type: application/vnd.ms-excel");
           header("Content-Disposition: attachment; filename=reporte.xls");
           header("Pragma: no-cache");
           header("Expires: 0");
           require_once 'view/visitacion/reportes/CAMPISTAS/resultado_campistas.php';

     }

/*==========================================>>Para trabajar con la seccion de reporte Diario<<=========================*/
    public function Reporte_Diario(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/diario/reporteDiario.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_Diario($result){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes//diario/resultado_reporteDiario.php';
      require_once 'view/includes/footer.php';
    }

/*==================>> Para trabaar con la parte del reporte Nacionalidade Garupados por Provincia=========================*/

    public function NacionalesAgrupadosXProvincia(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/nacionales/NacionalesAgrupadosXProvincia.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_Nacionales($result){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/nacionales/resultado_Nacionalidades.php';
      require_once 'view/includes/footer.php';
   }

  public function Excel_NACIONALES(){
    session_start();
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=reporte.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
require_once 'view/visitacion/reportes/nacionales/resultado_Nacionalidades.php';

        }

/*=====================Para trabajar con la seccionde reportes para los sectores individualmente===========*/
      public function Reporte_Totales_por_Sector(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/totales_sector/Totales_por_Sector.php';
        require_once 'view/includes/footer.php';
      }

      public function Resultado_Totales_por_Sector($result){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/totales_sector/resultado_Totales_por_Sector.php';
        require_once 'view/includes/footer.php';
     }
     public function Excel_TOTALSECTOR(){
         
            header("Content-type: application/vnd.ms-excel");
              header("Content-Disposition: attachment; filename=reporte.xls");
              header("Pragma: no-cache");
              header("Expires: 0");
              require_once 'view/visitacion/reportes/totales_sector/resultado_Totales_por_Sector.php';

    }

/*==============================Para trabajar con el reporte de campistass===========================================================*/
      public function Reporte_Campistas(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/campistas/Campistas.php';
        require_once 'view/includes/footer.php';
      }

      public function Resultado_Campistas($result){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/campistas/resultado_campistas.php';
        require_once 'view/includes/footer.php';
     }

  public function Excel_DIARIO(){
    session_start();
      header("Content-type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=reporte.xls");
      header("Pragma: no-cache");
      header("Expires: 0");
  require_once 'view/visitacion/reportes/diario/resultado_reporteDiario.php';

          }


/*==============================================================================================================*/
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
      echo "<pre>";
        var_dump($_POST);
      echo "</pre>";
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
        $visit->personas_acampando        = $_REQUEST['personas_acampando'];
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
        $visit->tipo_pago                 = $_REQUEST['tipo_pago'];
        $visit->moneda                    = $_REQUEST['moneda'];
        $visit->montoCancelar             = $_REQUEST['montoCancelar'];

        $visit->id > 0
            ? $this->model->Actualizar($visit)
            : $this->model->Registrar($visit);

        header('Location: index.php?c=Visitacion&a=agregarRegistro');
    }


    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=Visitacion');
    }

    /*======================================================================*/
        public function Salida(){
            session_start();
            if ($_SESSION['usuario']['puesto'] == 1 || $_SESSION['usuario']['puesto'] == 2
          || $_SESSION['usuario']['puesto'] == 4 ){//El numero 1 es administrador, 2 encargado de sector, 3 Reportes, 4 Voluntarios
              $this->model->ControlSalidas($_REQUEST['id']);
              header('Location:?c=Visitacion&a=AdminUser');
            }
            else {
              header( 'HTTP/1.0 403 Forbiden');//).
          }
        }
/*==============================================================================================================*/
public function Consulta_SubSector_Controller(){//ME BUSCA EL SUBSECTOR
      $result = $this->model->Consulta_SubSector_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'],$pSubSector['subSector']);
      $this->Resultado_busquedaSubSector($result);
      header('Location:?c=Visitacion&a=busquedaSubSector');
}
/*==============================================================================================================*/

    public function Consulta_SEMEC_Controller(){//GENERA EL REPORTE SEMEMC
          $result = $this->model->Consulta_SEMEC_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
          $this->Resultado_SEMEC($result);
          header('Location:?c=Visitacion&a=Resultado_SEMEC');
    }

/*======================================================================================================*/
public function Consulta_ReporteDiario_Controller(){//GENERA EL REPORTE DIARIO

      $result = $this->model->Consulta_ReporteDiario_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);

      $this->Resultado_Diario($result);

      header('Location:?c=Visitacion&a=Resultado_Diario');
}

 /*==================================================================================================*/
public function Consulta_Nacionales_Controller(){//GENERA EL REPORTE SEMEMC
    $result = $this->model->Consulta_Nacionales_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
    $this->Resultado_Nacionales($result);
    header('Location:?c=Visitacion&a=Resultado_Nacionales');
}

/*=================================================================================================*/

public function Consulta_Totales_por_Sector_Controller(){//GENERA EL REPORTE SEMEMC
    $result = $this->model->Consulta_Totales_por_Sector_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);
    $this->Resultado_Totales_por_Sector($result);
    header('Location:?c=Visitacion&a=Resultado_Totales_por_Sector');
}

/*==================================================================================================*/

public function Consulta_Campistas_Controller(){//GENERA EL REPORTE SEMEMC
    $result = $this->model->Consulta_Campistas_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);
    $this->Resultado_Campistas($result);
    header('Location:?c=Visitacion&a=Resultado_Campistas');
}

/*=================================================================================================*/
//ME EJECUTA LA CONSULTA DE LAS PERSONAS DENTRO DEL SECTOR.
public function Consulta_Cant_Personas_Parque_Controller(){
      $result = $this->model->Consulta_Cant_Personas_Parque_Model();
      $this->Resultado_Cantidad($result);
}

/*===================================================================================================*/

}//Fin de la clase
