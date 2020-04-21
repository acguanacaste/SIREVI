<?php
require_once 'model/dollar.php';

class DollarController{

    private $model;
    public function __CONSTRUCT(){
        $this->model = new Dollar();
    }


    public function Index(){
        require_once 'view/includes/header_dollar.php';
        require_once 'view/dollar/dollar.php';
        require_once 'view/includes/footer.php';
    }



    public function Modificar(){
        $dollar = new Dollar();

        if(isset($_REQUEST['id'])){
            $dollar = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        require_once 'view/includes/header_dollar.php';
        require_once 'view/dollar/dollarModificar.php';
        require_once 'view/includes/footer.php';
    }

    public function agregarRegistro(){
        $dollar = new Dollar();

        if(isset($_REQUEST['id'])){
            $dollar = $this->model->Obtener($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        }

        require_once 'view/includes/header_dollar.php';
        require_once 'view/dollar/dollarRegistro.php';
        require_once 'view/includes/footer.php';
    }



    public function Guardar(){
        $dollar = new Dollar();

        $dollar->id               = $_REQUEST['id'];
        $dollar->valor_dolar     = $_REQUEST['valor_dolar'];
        $dollar->fecha_cambio     = $_REQUEST['fecha_cambio'];


        $dollar->id > 0
            ? $this->model->Actualizar($dollar)/*Se esta llamndo desde model Usuarios*/
            : $this->model->Registrar($dollar);/*Se esta llamndo desde model Usuarios*/

        header('Location: index.php?c=Dollar');
    }



    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);/*Se esta llamndo desde model Usuarios*/
        header('Location: index.php?c=Dollar');
    }

}
