<?php

class loginController{

<<<<<<< refs/remotes/origin/master
  public function Index(){
      require_once 'view/indexLogin.php';
  }

  public function Comprobar(){
      require_once 'view/validacion_login.php';
  }

  public function salir(){
      require_once 'view/logout.php';
  }

//=====================================================================================================================================

  public function AdminUser(){//Vista usuario administrador
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//======================================================================================================================================

  public function SectorManagerUser(){//Vista usuario encargado de sector
    require_once 'view/includes/headerEncargadoSector.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//=====================================================================================================================================

  public function ReportsUser(){
    require_once 'view/includes/headerReportes.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//====================================================================================================================================

  public function VolunteeringUser(){
    require_once 'view/includes/headerVoluntarios.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//===================================================================================================================================

=======

    public function Index(){

        require_once 'view/indexLogin.php';

    }
>>>>>>> add some changes for development

}
