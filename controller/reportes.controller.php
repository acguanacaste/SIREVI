<?php

class ReportesController{


  public function Index(){
      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/reportes/reportesPrincipal.php';
      require_once 'view/includes/footer.php';
  }


    public function ReportUser(){
        require_once 'view/includes/headerReportes.php';
        require_once 'view/reportes/reportesPrincipal.php';
        require_once 'view/includes/footer.php';
    }


}
