<?php
require_once 'model/visitacion.php';

class VisitacionController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Visitacion();
    }


function outputCSV($data) {
    $outputBuffer = fopen("php://output", 'w');
    $count=0;
    foreach($data as $val) {
      if ($count ==0){
        $encabezados = array();
        foreach ((array)$val as $key => $value){
          $encabezados[]=$key;
        }
        fputcsv($outputBuffer, $encabezados,",",'"');
        $count++;
      }
        fputcsv($outputBuffer, (array)$val,",",'"');
        //@todo ponerle al csv enclosed by
      }
    fclose($outputBuffer);
}//Fin de la funcion


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

    public function Resultado_SEMEC($result,$fechaStart,$fechaEnd){

      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/SEMEC/resultado_SEMEC.php';
      require_once 'view/includes/footer.php';
   }

   public function Excel_SEMEC(){
     $result = $this->model->Consulta_SEMEC_Model($_REQUEST['fi'],$_REQUEST['ff']);
     date_default_timezone_set("America/Costa_Rica");
     $filename = "SEMEC-".date(strtotime("now"));

     header("Content-type: text/csv");
     header("Content-Disposition: attachment; filename={$filename}.csv");
     header("Pragma: no-cache");
     header("Expires: 0");

     $this->outputCSV($result);
   }

/*==========================================>>Para trabajar con la seccion de reporte Diario<<=========================*/
    public function Reporte_Diario(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/diario/reporteDiario.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_Diario($result,$fechaStart,$pSector){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes//diario/resultado_reporteDiario.php';
      require_once 'view/includes/footer.php';
    }

    public function Excel_DIARIO(){
      $result = $this->model->Consulta_ReporteDiario_Model($_REQUEST['fi'], $_REQUEST['sec']);
      date_default_timezone_set("America/Costa_Rica");
      $filename = "Reporte_Diario-".date(strtotime("now"));

      header("Content-type: text/csv");
      header("Content-Disposition: attachment; filename={$filename}.csv");
      header("Pragma: no-cache");
      header("Expires: 0");

      $this->outputCSV($result);
    }

/*==================>> Para trabaar con la parte del reporte Nacionalidade Garupados por Provincia=========================*/

    public function NacionalesAgrupadosXProvincia(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/paises/paises.php';
      require_once 'view/includes/footer.php';
    }

    public function Resultado_Nacionales($result,$fechaStart,$fechaEnd){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/visitacion/reportes/paises/resultado_Paises.php';
      require_once 'view/includes/footer.php';
   }

   public function Excel_NACIONALES(){
     $result = $this->model->Consulta_Reporte_Paises_Model();
     date_default_timezone_set("America/Costa_Rica");
     $filename = "Reporte_Paises".date(strtotime("now"));

     header("Content-type: text/csv");
     header("Content-Disposition: attachment; filename={$filename}.csv");
     header("Pragma: no-cache");
     header("Expires: 0");

     $this->outputCSV($result);
   }

/*=====================Para trabajar con la seccionde reportes para los sectores individualmente===========*/
      public function Reporte_Totales_por_Sector(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/totales_sector/Totales_por_Sector.php';
        require_once 'view/includes/footer.php';
      }

      public function Resultado_Totales_por_Sector($result,$fechaStart,$fechaEnd,$pSector){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/totales_sector/resultado_Totales_por_Sector.php';
        require_once 'view/includes/footer.php';
     }

    public function Excel_TOTALSECTOR(){
       $result = $this->model->Consulta_Totales_por_Sector_Model($_REQUEST['fi'],$_REQUEST['ff'], $_REQUEST['sec']);
       date_default_timezone_set("America/Costa_Rica");
       $filename = "Total_por_Sector-".date(strtotime("now"));

       header("Content-type: text/csv");
       header("Content-Disposition: attachment; filename={$filename}.csv");
       header("Pragma: no-cache");
       header("Expires: 0");

       $this->outputCSV($result);
     }

/*==============================Para trabajar con el reporte de campistass===========================================================*/
      public function Reporte_Campistas(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/campistas/Campistas.php';
        require_once 'view/includes/footer.php';
      }

      public function Resultado_Campistas($result,$fechaStart,$fechaEnd,$pSector){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/visitacion/reportes/campistas/resultado_campistas.php';
        require_once 'view/includes/footer.php';
     }

     public function Excel_CAMPISTAS(){
        $result = $this->model->Consulta_Campistas_Model($_REQUEST['fi'],$_REQUEST['ff'], $_REQUEST['sec']);
        date_default_timezone_set("America/Costa_Rica");
        $filename = "Reporte_Campistas-".date(strtotime("now"));

        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename={$filename}.csv");
        header("Pragma: no-cache");
        header("Expires: 0");

        $this->outputCSV($result);
      }
/*==============================================================================================================*/
public function Reporte_Paises(){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/paises/paises.php';
  require_once 'view/includes/footer.php';
}

public function Resultado_Paises($result){
  require_once 'view/includes/headerPrincipal.php';
  require_once 'view/visitacion/reportes/paises/resultado_Paises.php';
  require_once 'view/includes/footer.php';
}

public function Excel_Consulta_Reporte_Paises(){
  $result = $this->model->Consulta_Reporte_Paises_Model();
  date_default_timezone_set("America/Costa_Rica");
  $filename = "Reporte_Paises-".date(strtotime("now"));

  header("Content-type: text/csv");
  header("Content-Disposition: attachment; filename={$filename}.csv");
  header("Pragma: no-cache");
  header("Expires: 0");

  $this->outputCSV($result);
}
/*================================================================================================================*/
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

        $visit->id                        = $_REQUEST['id'];
        $visit->sector                    = $_REQUEST['sector'];
        $visit->usuario                   = $_REQUEST['usuario'];
        $visit->asp                       = $_REQUEST['asp'];
        $visit->proposito_visita          = $_REQUEST['proposito_visita'];
        $visit->noIdentificacion          = $_REQUEST['noIdentificacion'];
        $visit->nombre                    = $_REQUEST['nombre'];
        $visit->placa_automovil           = $_REQUEST['placa_automovil'];
//----------------------------------------------------------------------------------------------------
        $visit->pais                      = $_REQUEST['pais'];//-------------
      //  $visit->provincia                 = $_REQUEST['provincia'];//--------
        $visit->provincia = !empty($_REQUEST['provincia']) ? $_REQUEST['provincia'] : null;

        $visit->referencia_visita         = $_REQUEST['referencia_visita'];//------
        $visit->nom_referencia_visita     = $_REQUEST['nom_referencia_visita'];
      //  $visit->salida                    = $_REQUEST['salida'];
            $visit->salida = 0;
//------------------------------------------------------------------------------------------------------
        $visit->sendero                   = $_REQUEST['sendero'];//-----
        $visit->dias_camping              = $_REQUEST['dias_camping'];
        $visit->personas_acampando        = $_REQUEST['personas_acampando'];
        $visit->subSector                 = $_REQUEST['subSector'];
//-------------------------------------------------------------------------------------------------------
        $visit->nacional_adult            = $_REQUEST['nacional_adult'];
        $visit->nacional_kid              = $_REQUEST['nacional_kid'];
        $visit->estudiantes               = $_REQUEST['estudiantes'];
        $visit->nacional_prepago          = $_REQUEST['nacional_prepago'];
        $visit->nacional_exonerado        = $_REQUEST['nacional_exonerado'];
        $visit->nacional_surf             = $_REQUEST['nacional_surf'];

        $visit->extranjero_adult          = $_REQUEST['extranjero_adult'];
        $visit->extranjero_kid            = $_REQUEST['extranjero_kid'];
        $visit->extranjero_prepago        = $_REQUEST['extranjero_prepago'];
        $visit->extranjero_exonerado      = $_REQUEST['extranjero_exonerado'];
        $visit->extranjero_surf           = $_REQUEST['extranjero_surf'];

//-----------------------------------------------------------------------------------------------------
        $visit->tipo_pago                 = $_REQUEST['tipo_pago'];
        $visit->moneda                    = $_REQUEST['moneda'];
        $visit->montoCancelar             = $_REQUEST['montoCancelar'];

        $visit->id > 0
            ? $this->model->Actualizar($visit)
            : $this->model->Registrar($visit);

        header('Location: index.php?c=Visitacion&a=AdminUser');
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
      $result = $this->model->Consulta_SubSector_Mode($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'],$pSubSector['subSector']);
      $this->Resultado_SEMEC_2($result);
      header('Location:?c=Visitacion&a=busquedaSubSector');
}


public function Consulta_SubSector_Controller_2(){//ME BUSCA EL SUBSECTOR
      $result = $this->model->Consulta_SEMEC_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
      $this->Resultado_SEMEC($result);
      header('Location:?c=Visitacion&a=Resultado_SEMEC');
}
/*==============================================================================================================*/

    public function Consulta_SEMEC_Controller(){//GENERA EL REPORTE SEMEMC
          $result = $this->model->Consulta_SEMEC_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
          $this->Resultado_SEMEC($result, $_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);

    }

/*======================================================================================================*/
public function Consulta_ReporteDiario_Controller(){//GENERA EL REPORTE DIARIO

      $result = $this->model->Consulta_ReporteDiario_Model($_REQUEST['fechaInicio'], $_REQUEST['sector']);
      $this->Resultado_Diario($result, $_REQUEST['fechaInicio'], $_REQUEST['sector']);

}

 /*==================================================================================================*/
public function Consulta_Nacionales_Controller(){//GENERA EL REPORTE SEMEMC

    $result = $this->model->Consulta_Nacionales_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
    $this->Resultado_Nacionales($result, $_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);

}

/*=================================================================================================*/

public function Consulta_Totales_por_Sector_Controller(){//

    $result = $this->model->Consulta_Totales_por_Sector_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);
    $this->Resultado_Totales_por_Sector($result, $_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'],$_REQUEST['sector']);

}

/*==================================================================================================*/

public function Consulta_Campistas_Controller(){//
    $result = $this->model->Consulta_Campistas_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'], $_REQUEST['sector']);
    $this->Resultado_Campistas($result, $_REQUEST['fechaInicio'], $_REQUEST['fechaFinal'],$_REQUEST['sector']);

}

/*=================================================================================================*/
public function Consulta_Reporte_Paises_Controller(){//GENERA EL REPORTE SEMEMC
    $result = $this->model->Consulta_Reporte_Paises_Model();
    $this->Resultado_Paises($result);

}
/*====================================================================================================*/
//ME EJECUTA LA CONSULTA DE LAS PERSONAS DENTRO DEL SECTOR.
public function Consulta_Cant_Personas_Parque_Controller(){
      $result = $this->model->Consulta_Cant_Personas_Parque_Model();
      $this->Resultado_Cantidad($result);
}

/*===================================================================================================*/

}//Fin de la clase
