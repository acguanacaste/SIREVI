<?php
class Sendero{
	private $pdo;

    public $id;
    public $nombre;
<<<<<<< refs/remotes/origin/master
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
=======
    public $distancia;
    public $longitud;
    public $latitud;
>>>>>>> add some changes for development


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

<<<<<<< refs/remotes/origin/master
			$stm = $this->pdo->prepare("select sendero.id, sendero.nombre as Sendero, caracterizacion_sendero,
			tipo_sendero, atractivo, punto_inicio, punto_llegada, sector.nombre AS Sector
			from sendero inner join sector on sendero.sector = sector.id;");
=======
			$stm = $this->pdo->prepare("SELECT * FROM sendero");
>>>>>>> add some changes for development
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
<<<<<<< refs/remotes/origin/master
						nombre                    = ?,
						caracterizacion_sendero  = ?,
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
=======
						nombre            = ?,
						distancia         = ?,
            longitud          = ?,
            latitud           = ?

>>>>>>> add some changes for development

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
<<<<<<< refs/remotes/origin/master
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
=======
                        $data->distancia,
                        $data->longitud,
                        $data->latitud,
>>>>>>> add some changes for development
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
<<<<<<< refs/remotes/origin/master
		$sql = "INSERT INTO sendero (nombre ,caracterizacion_sendero, tipo_sendero, atractivo, distancia,
			 				sector, tiempo_recorrido, punto_alto, punto_inicio, punto_llegada, descripcion, regulaciones)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
=======
		$sql = "INSERT INTO sendero (nombre,distancia,longitud,latitud)
		        VALUES (?, ?, ?, ?)";
>>>>>>> add some changes for development

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
<<<<<<< refs/remotes/origin/master
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
=======
                    $data->distancia,
                    $data->longitud,
                    $data->latitud,

>>>>>>> add some changes for development

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
