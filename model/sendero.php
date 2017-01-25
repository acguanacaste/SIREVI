<?php
class Sendero{
	private $pdo;

    public $id;
    public $nombre;
    public $distancia;
    public $longitud;
    public $latitud;


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

			$stm = $this->pdo->prepare("SELECT * FROM sendero");
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
            longitud          = ?,
            latitud           = ?


				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->distancia,
                        $data->longitud,
                        $data->latitud,
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
		$sql = "INSERT INTO sendero (nombre,distancia,longitud,latitud)
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->distancia,
                    $data->longitud,
                    $data->latitud,


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
