<?php
class Sector{
	private $pdo;

    public $id;
    public $nombre;
    public $capacidad_diaria;
    public $capacidad_acampar;
		public $asp;/*Llave foranea*/

		//Ingreso por el dia
		public $adulto_nacional;
		public $nino_nacional;
		public $estudiantes;
		public $adulto_extranjero;
		public $nino_extranjero;
		//Derechos de camping
		public $tarifa_camping;


	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

//================================  Funcion para poder ver las tarifas de cada sector ================================================
	public function ListadoTarifas(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("select nombre,adulto_nacional,nino_nacional,estudiantes,adulto_extranjero,nino_extranjero,tarifa_camping from sector;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

//=========================================================================================================

	public function Listar(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("select sector.id, sector.nombre as Sector, capacidad_diaria,
			capacidad_acampar,asp.nombre AS Area_Silvestre from sector inner join asp on sector.asp = asp.id;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Obtener($id){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sector WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}


	public function Eliminar($id){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM sector WHERE id = ?");

			$stm->execute(array($id));
		}
		 catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Actualizar($data){
		try{
			$sql = "UPDATE sector SET
						nombre            				= ?,
						capacidad_diaria  				= ?,
            capacidad_acampar 				= ?,
/*======= Ingreso por el dia ==========*/
						adulto_nacional   				= ?,
						nino_nacional     				= ?,
						estudiantes								= ?,
						adulto_extranjero 				= ?,
						nino_extranjero   				= ?,
/*====== Derechos de acampar ==========*/
						camping_adulto_nacional   = ?,
						camping_nino_nacional     = ?,
						camping_estudiantes       = ?,
						camping_adulto_extranjero = ?,
						camping_nino_extranjero   = ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->capacidad_diaria,
                        $data->capacidad_acampar,

												/*======= Ingreso por el dia ==========*/
												$data->adulto_nacional,
												$data->nino_nacional,
												$data->estudiantes,
												$data->adulto_extranjero,
												$data->nino_extranjero,

												/*====== Derechos de acampar ==========*/
												$data->camping_adulto_nacional,
												$data->camping_nino_nacional,
												$data->camping_estudiantes,
												$data->camping_adulto_extranjero,
												$data->camping_nino_extranjero,

												$data->id
					)
				);
		} catch (Exception $e){
				die($e->getMessage());
		}
	}

	public function Registrar(Sector $data){
		try{
		$sql = "INSERT INTO sector (nombre,capacidad_diaria,capacidad_acampar,asp,
			 													adulto_nacional,nino_nacional,estudiantes,adulto_extranjero,nino_extranjero,
																camping_adulto_nacional,camping_nino_nacional,camping_estudiantes,camping_adulto_extranjero,camping_nino_extranjero)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->capacidad_diaria,
                    $data->capacidad_acampar,
										$data->asp,

										$data->adulto_nacional,
										$data->nino_nacional,
										$data->estudiantes,
										$data->adulto_extranjero,
										$data->nino_extranjero,

										$data->camping_adulto_nacional,
										$data->camping_nino_nacional,
										$data->camping_estudiantes,
										$data->camping_adulto_extranjero,
										$data->camping_nino_extranjero


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
