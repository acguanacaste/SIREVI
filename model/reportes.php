<?php

class Reporte{
  private $pdo;



  public function __CONSTRUCT(){
    try{
      $this->pdo = Database::StartUp();
    }
    catch(Exception $e){
      die($e->getMessage());
    }
  }

  public function Consulta_SEMEC_Model($fechaStart, $fechaEnd){
    try {
      $stm = $this->pdo->prepare("call ConsultaSEMEC($fechaStart, $fechaEnd)");
      $stm->execute();

    } catch (Exception $e) {
      die($e->getMessage());
    }

  }


  public function ConsultaNacionalesModel($fechaStart, $fechaEnd){
    try {
      $stm = $this->pdo->prepare("call NacionalesAgrupadosXProvincia($fechaStart, $fechaEnd)");
      $stm->execute();

    } catch (Exception $e) {
      die($e->getMessage());
    }

  }

  public function ConsultaCampistasModel($fechaStart, $fechaEnd){
    try {
      $stm = $this->pdo->prepare("call ConsultaCampistas($fechaStart, $fechaEnd)");
      $stm->execute();

    } catch (Exception $e) {
      die($e->getMessage());
    }

  }

}//Fin de la clase reporte

 ?>
