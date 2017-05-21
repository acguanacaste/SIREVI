<?php
class Usuario{
	private $pdo;

    public $id;
    public $nombre;
    public $apellido;
    public $cedula;
    public $contrasena;
    public $puesto;
    public $email;
		public $imagen;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()/*Metodo que me muestra los datos qye hay en la bd*/
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)/*Metodo que me obtiene los datos que hay en la bd*/
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE id = ?");

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

/*===============================================================================================================*/

	public function Deshabilitar($id,$valor){/*Metodo que me borra los datos en la bd*/
	try{
		//	$stm = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
			if($valor == 'desactivado'){
				echo "Usuario deshabilitado";
			}
			else {
				echo "Usuario habilitado";
			}

	//		$stm->execute(array($id));/*Aqui es donde selecciona el resgistro y se procede a realizar la accion*/

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


	public function Actualizar($data)/*Metodo que me modifica los datos en la bd*/
	{
		try
		{
			$sql = "UPDATE usuarios SET
						nombre          = ?,
						apellido        = ?,
            contrasena      = ?,
            puesto          = ?,

						email           = ?,
						imagen          = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->apellido,
                        $data->contrasena,
                        $data->puesto,

                        $data->email,
												$data->imagen,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)/*Metodo que me registra los datos en la bd*/
	{
		try
		{
		$sql = "INSERT INTO usuarios (nombre,apellido,cedula,contrasena,puesto,email,imagen)
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->apellido,
                    $data->cedula,
                    $data->contrasena,
                    $data->puesto,
                    $data->email,
										$data->imagen,

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
