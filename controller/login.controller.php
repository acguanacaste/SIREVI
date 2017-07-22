<?php

class loginController{



  public function Index(){


      require_once 'view/indexLogin.php';


  }

  public function Comprobar(){


      require_once 'view/validacion_login.php';

  }
  public function salir(){


      require_once 'view/logout.php';


  }

  public function bienvenido(){

      require_once 'view/includes/headerPrincipal.php';
      require_once 'view/menuPrincipal.php';
      require_once 'view/includes/footer.php';
  }
//=====================================================================================================================================

  public function AdminUser(){//Vista usuario administrador
    require_once 'view/includes/headerPrincipal.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//======================================================================================================================================

  public function SectorManagerUser(){//Vista usuario encargado de sector
    require_once 'view/includes/header.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//=====================================================================================================================================

  public function ReportsUser(){
    require_once 'view/includes/head.php';
    require_once 'view/menuPrincipal.php';
    require_once 'view/includes/footer.php';
  }

//====================================================================================================================================

  public function VoluntaryUser(){
    require_once 'view/includes/head.php';
    require_once 'view/usuario/usuario.php';
    require_once 'view/includes/footer.php';
  }

//===================================================================================================================================


}
