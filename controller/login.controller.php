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


public function AccesoPuestoInstitucion(){//Me valida cual es el puesto del administrador en la instituccion
  
}


}
