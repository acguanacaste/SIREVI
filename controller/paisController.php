<!--AQUI ES DONDE CREO MIS METODOS Y LOS LLAMO EN LA FUNCION O ACCION DE LOS BOTONES -->
<?php
class paisController extends ControladorBase{

    public function __construct() {
        parent::__construct();
    }

    public function index(){

        //Creamos el objeto
        $pais=new pais();

        //Conseguimos todos los usuarios
        $allusers=$pais->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
            "Hola"    =>"Soy Víctor Robles"
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){

            //Creamos un usuario
            $pais=new pais();
            $pais->setNombre($_POST["nombre"]);
            $pais->setDireccion($_POST["codigo"]);


            $save=$pais->save();
        }
        $this->redirect("pais", "index");
    }

    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $pais=new pais();
            $pais->deleteById($id);
        }
        $this->redirect();
    }


    public function hola(){
        $pais=new institucionModel();
        $country=$pais->getUnPais();
        var_dump($country);
    }
    /*EL METODO MODIFICAR LE FALTA MAS DE HACER...*/
    /*ME IDENTIFICA EL ID DEL USUARIO*/
          public function modificar(){
            if(isset($_GET["id"])){/*PARA MODIFICAR SE BUSCARA CON LA CEDULA*/
                $id=(int)$_GET["id"];
            echo "El Pais esta en base de datos";/*ENVIA RESPUESTA*/
          }
    }
}
?>
