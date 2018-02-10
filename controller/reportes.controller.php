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


}
