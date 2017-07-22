<?php
class Usuario{
	private $pdo;

    public $id;
    public $nombre;
    public $apellido;
    public $cedula;
    public $contrasena;
    public $clave_puesto;/*Llave foranea*/
    public $email;
		public $imagen;
		public $estado;

	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Listar(){/*Metodo que me muestra los datos qye hay en la bd*/
		try{
			$result = array();

			$stm = $this->pdo->prepare("select usuarios.id, usuarios.nombre as nombre,
			usuarios.apellido, usuarios.cedula, usuarios.email,usuarios.imagen, usuarios.estado,
			puestos_institucion.nombre_puesto AS Puesto from usuarios
			inner join puestos_institucion on usuarios.puesto = puestos_institucion.id;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Obtener($id){/*Metodo que me obtiene los datos que hay en la bd*/
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


	public function Actualizar($data){/*Metodo que me modifica los datos en la bd*/
	try{
			$sql = "UPDATE usuarios SET
						nombre          = ?,
						apellido        = ?,
            contrasena      = ?,
            clave_puesto    = ?,/*Llave foranea*/
						email           = ?,
						imagen          = ?,
						estado					= ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->apellido,
                        $data->contrasena,
                        $data->clave_puesto,/*Llave foranea*/
                        $data->email,
												$data->imagen,
												$data->estado,
                        $data->id
					)
				);
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data){/*Metodo que me registra los datos en la bd*/
	 try{
		$sql = "INSERT INTO usuarios (nombre,apellido,cedula,contrasena,clave_puesto,email,imagen, estado)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
                    $data->cedula,
                    $data->contrasena,
                    $data->clave_puesto,
                    $data->email,
										$data->imagen,
										$data->estado,

                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
}
