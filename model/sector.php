<?php
class Sector{
	private $pdo;

    public $id;
    public $nombre;
    public $capacidad_diaria;
    public $capacidad_acampar;


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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("select sector.id, sector.nombre as Sector, capacidad_diaria,
			capacidad_acampar, asp.nombre AS Area_Silvestre from sector inner join asp on sector.asp = asp.id;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sector WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Eliminar($id)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM sector WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE sector SET
						nombre            = ?,
						capacidad_diaria  = ?,
            capacidad_acampar = ?


				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->capacidad_diaria,
                        $data->capacidad_acampar,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Sector $data)
	{
		try
		{
		$sql = "INSERT INTO sector (nombre,capacidad_diaria,capacidad_acampar)
		        VALUES (?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->capacidad_diaria,
                    $data->capacidad_acampar,


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
