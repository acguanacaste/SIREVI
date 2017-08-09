<?php

class ReportesController{



    public function AdminUser(){
        require_once 'view/includes/headerPrincipal.php';
        require_once 'view/reportes/reportes.php';
        require_once 'view/includes/footer.php';
    }

    public function ReportsUser(){
        require_once 'view/includes/headerReportes.php';
        require_once 'view/reportes/reportes.php';
        require_once 'view/includes/footer.php';
    }

}
