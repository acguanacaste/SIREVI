<?php
class Sendero{
	private $pdo;

    public $id;
    public $nombre;
    public $distancia;
    public $longitud;
    public $latitud;
		public $sector;



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

			$stm = $this->pdo->prepare("select sendero.id, sendero.nombre as Sendero, distancia,
			latitud, longitud, sector.nombre AS Sector from sendero inner join sector on sendero.sector = sector.id;");
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
			          ->prepare("SELECT * FROM sendero WHERE id = ?");


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
			            ->prepare("DELETE FROM sendero WHERE id = ?");

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
			$sql = "UPDATE sendero SET
						nombre            = ?,
						distancia         = ?,
            latitud           = ?,
            longitud          = ?,
						sector 						= ?


				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->distancia,
                        $data->latitud,
												$data->longitud,
												$data->sector,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Sendero $data)
	{
		try
		{
		$sql = "INSERT INTO sendero (nombre,distancia,latitud,longitud,sector)
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->distancia,
										$data->latitud,
										$data->longitud,
                    $data->sector



                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
