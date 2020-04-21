<?php
require_once "database.php";
class Usuario extends Database{
	public $id;
    public $nombre;
    public $apellido;
    public $cedula;
    public $contrasena;
    public $puesto;/*Llave foranea*/
    public $email;
		public $estado;
		public $foto;


public function __GET($k){
	         return $this->$k;
}

public function __SET($k, $v){
	        return $this->$k = $v;
}

public function __construct(){
    parent::__construct();
}

/*===================================================================================================================*/

public function Listar(){/*Metodo que me muestra los datos qye hay en la bd*/
	try{
		$result = array();
			$stm = $this->pdo->prepare("select usuarios.id, usuarios.nombre as nombre,
			usuarios.apellido, usuarios.cedula, usuarios.email, usuarios.foto, usuarios.estado,
			puestos_institucion.nombre_puesto AS Puesto from usuarios
			inner join puestos_institucion on usuarios.puesto = puestos_institucion.id;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

/*=========================================================================================================================*/

public function Obtener($id){
	try{
		$stm = $this->pdo
							->prepare("SELECT * FROM usuarios WHERE id = ?");

		$stm->execute(array($id));
		return $stm->fetch(PDO::FETCH_OBJ);
	}
	catch (Exception $e){
		die($e->getMessage());
	}
}

/*===================================================================================================================*/

public function Obtener2($id){
	try{
		$stm = $this->pdo
							->prepare("SELECT * FROM usuarios WHERE id = ?");

		$stm->execute(array($id));
		$user = $stm->fetch(PDlO::FETCH_OBJ);

		$user = new Usuario();

		$user->__SET('id', $user->id);
		$user->__SET('nombre', $user->nombre);
		$user->__SET('apellido', $user->apellido);
		$user->__SET('estado', $user->estado);
		$user->__SET('cedula', $user->cedula);
		$user->__SET('contrasena', $user->contrasena);
		$user->__SET('puesto', $user->puesto);
		$user->__SET('email', $user->email);
		$user->__SET('foto', $user->foto);

		return $user;
	} catch (Exception $e)
	{
		die($e->getMessage());
	}
}

/*===============================================================================================================*/

	public function Estado(){/*Metodo que me borra los datos en la bd*/
		try{
			$stm = $this->pdo->prepare("SELECT estado FROM usuarios where id = ".$_REQUEST['id']);
			$stm->execute();
			$resultado = $stm->fetch();
			$estado = $resultado['estado'];
			$nuevoEstado = $estado==0?1:0;
			$stm = $this->pdo->prepare("UPDATE usuarios SET estado = $nuevoEstado where id = ".$_REQUEST['id']);
			return $stm->execute();
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

/*================================================================================================================*/
	public function Eliminar($id){/*Metodo que me borra los datos en la bd*/
	try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM usuarios WHERE id = ?");
			$stm->execute(array($id));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

/*================================================================================================================*/

	public function Actualizar($data){/*Metodo que me modifica los datos en la bd*/
	try{
			$sql = "UPDATE usuarios SET
						nombre          = ?,
						apellido        = ?,
						estado					= ?,
						cedula					= ?,
						contrasena      = ?,
            puesto          = ?,/*Llave foranea*/
						email           = ?,
						foto            = ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                      	$data->__GET('nombre'),
												$data->__GET('apellido'),
												$data->__GET('estado'),
												$data->__GET('cedula'),
												$data->__GET('contrasena'),
												$data->__GET('puesto'),/*llave Foranea*/
                        $data->__GET('email'),
												$data->__GET('foto'),
												$data->__GET('id')
					)
				);
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

/*==================================================================================================================*/

public function Registrar(Usuario $data){/*Metodo que me registra los datos en la bd*/
 try{
	$sql = "INSERT INTO usuarios (nombre, apellido, estado, cedula, contrasena, puesto, email, foto)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		->execute(
		 array(
          $data->__GET('nombre'),
          $data->__GET('apellido'),
					$data->__GET('estado'),
					$data->__GET('cedula'),
          $data->__GET('contrasena'),
          $data->__GET('puesto'),
          $data->__GET('email'),
					$data->__GET('foto'),
					)
				);
			} catch (Exception $e){
				die($e->getMessage());
			}
		}
}
