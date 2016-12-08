<!--AQUI ES DONDE CREO MIS METODOS Y LOS LLAMO EN LA FUNCION O ACCION DE LOS BOTONES -->

<?php
class UsuariosController extends ControladorBase{

    public function __construct() {
        parent::__construct();
    }

    public function index(){

        //SE CREA EL OBJ USUARIO
        $usuario=new Usuario();

        //OBTENEMOS TODOS LOS USUARIOS
        $allusers=$usuario->getAll();//-->ESTE METODO ESTA EN LA ENTIDAD BASE

        //CARGAMOS LA VISTA INDEX Y LE PASAMOS VALORES
        $this->view("index",array(
            "allusers"=>$allusers,//-->variable
            "Hola"    =>"Valor del index de array"
        ));
    }

    public function crear(){
        if(isset($_POST["nombre"])){

            //CREAMOS UN USUARIO NUEVO
            $usuario=new Usuario();
      //      $usuario->setUsuario($_POST["usuario"]);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setCedula($_POST["cedula"]);
            $usuario->setContrasena(sha1($_POST["contrasena"]));
            $usuario->setPuesto($_POST["puesto"]);
            $usuario->setEmail($_POST["email"]);

            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }


    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];

            $usuario=new Usuario();
            $usuario->deleteById($id);
        }
        $this->redirect();
    }

/*EL METODO MODIFICAR LE FALTA MAS DE HACER...*/
/*ME IDENTIFICA EL ID DEL USUARIO*/
      public function modificar($id){
        if(isset($_GET["id"])==$id){/*PARA MODIFICAR SE BUSCARA CON LA CEDULA*/
          $conn = dbConnect(); //BUSCAR UN METODO QUE ME PERMITA OBTENER LOS DATOS DE LA BASET DE datos
        	$OK = true;
        	$msg = '';
        	if (isset($_GET['id'])) {
        		$sql = 'SELECT * FROM usuario WHERE id = ?';
        		$stmt = $conn->prepare($sql);
        		$results = $stmt->execute(array($_GET['id']));
        		$row = $stmt->fetch();
        		if (empty($row)) {
        			$result = "No se encontraron resultados !!";
        		}
        	}
        	if (array_key_exists('modificar', $_POST)) {
        		$sql = 'UPDATE usuario SET nombre = ?, apellido = ?, cedula = ?, puesto = ?, email WHERE id_empleado = ?';
        		$stmt = $conn->prepare($sql);
        		$OK = $stmt->execute(array($_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['puesto'],$_POST['email'],$_GET['id']));
        		$error = $stmt->errorInfo();
        		if (!$OK) {
        			echo $error[2];
        		} else {
        			echo '<p>El registro se actualizo correctamente</p>';
        	//		header("refresh: 2;searchEmployee-02.php?id=".$_GET['id']);
        			exit;
        		}
        	}


        echo "El usuario esta en base de datos";/*ENVIA RESPUESTA SI EL ID FUE ENCONTRADO, SOLO PARA PRUEBA*/
      }
}

/*===========================================================================================*/
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }

}
?>
