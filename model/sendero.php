<?php
class Sendero{
	private $pdo;

    public $id;
    public $nombre;
    public $caracterizacion_segmento;
    public $tipo_sendero;
    public $atractivo;
		public $distancia;
		public $tiempo_recorrido;
		public $punto_alto;
		public $punto_inicio;
		public $punto_llegada;
		public $descripcion;
		public $regulaciones;


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

			$stm = $this->pdo->prepare("select sendero.id, sendero.nombre as Sendero, caracterizacion_sendero,
			tipo_sendero, atractivo, punto_inicio, punto_llegada, sector.nombre AS Sector
			from sendero inner join sector on sendero.sector = sector.id;");
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
						nombre                    = ?,
						caracterizacion_segmento  = ?,
						tipo_sendero              = ?,
						atractivo                 = ?,
						distancia                 = ?,
						tiempo_recorrido          = ?,
						punto_alto                = ?,
						punto_inicio  						= ?,
						punto_llegada             = ?,
						descripcion								= ?,
						regulaciones              = ?,
						sector 										= ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->caracterizacion_sendero,
                        $data->tipo_sendero,
												$data->atractivo,
												$data->distancia,
												$data->tiempo_recorrido,
												$data->punto_alto,
												$data->punto_inicio,
												$data->punto_llegada,
												$data->descripcion,
												$data->regulaciones,
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
		$sql = "INSERT INTO sendero (nombre ,caracterizacion_sendero, tipo_sendero, atractivo, distancia,
			 				sector, tiempo_recorrido, punto_alto, punto_inicio, punto_llegada, descripcion, regulaciones)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->caracterizacion_sendero,
										$data->tipo_sendero,
										$data->atractivo,
										$data->distancia,
                    $data->sector,
										$data->tiempo_recorrido,
										$data->punto_alto,
										$data->punto_inicio,
										$data->punto_llegada,
										$data->descripcion,
										$data->regulaciones

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
