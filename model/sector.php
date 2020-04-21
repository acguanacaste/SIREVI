<?php
require_once "database.php";
class Sector extends Database {

    public $id;
    public $nombre;
    public $capacidad_diaria;
    public $capacidad_acampar;
		public $asp;/*Llave foranea*/

		//Derechos de camping
		public $tarifa_camping;
		public $cambio_dolar;


    public function __construct(){
        parent::__construct();
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
						tarifa_camping   			    = ?,
						cambio_dolar              = ?

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
												$data->tarifa_camping,
												$data->cambio_dolar,

												$data->id
					)
				);
		} catch (Exception $e){
				die($e->getMessage());
		}
	}

	public function Registrar(Sector $data){
		try{
		$sql = "INSERT INTO sector (nombre, capacidad_diaria, capacidad_acampar, asp,
			 													adulto_nacional, nino_nacional, estudiantes, adulto_extranjero, nino_extranjero,
																tarifa_camping, cambio_dolar)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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

										$data->tarifa_camping,
										$data->cambio_dolar

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
