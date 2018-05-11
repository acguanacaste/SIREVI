<?php

class ReportesController{


  public function Index(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/reportes/reportesPrincipal.php';
      require_once 'view/includes/footer.php';
  }


    public function AdminUser(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/reportes/reportesPrincipal.php';
        require_once 'view/includes/footer.php';
    }

    public function Nacionalidades(){
        require_once 'view/includes/headerReportes.php';
        require_once 'view/visitacion/resportes/resultado_Nacionalidades.php';
        require_once 'view/includes/footer.php';
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

    public function ConsultaCampistasController(){
      //var_dump ($_REQUEST);
      //die();
      /*echo "<pre>";
      var_dump($_POST);
      echo "</pre>";*/
        $this->model->ConsultaCampistasModel($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
        header('Location:?c=Visitacion&a=');
    }

    public function Consulta_SEMEC_Controller(){
      //var_dump ($_REQUEST);
      //die();
      /*echo "<pre>";
      var_dump($_POST);
      echo "</pre>";*/
        $this->model->Consulta_SEMEC_Model($_REQUEST['fechaInicio'], $_REQUEST['fechaFinal']);
        header('Location:?c=Visitacion&a=');
    }


}
