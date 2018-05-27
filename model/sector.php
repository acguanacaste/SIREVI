<?php
class Sector{
	private $pdo;

    public $id;
    public $nombre;
    public $capacidad_diaria;
    public $capacidad_acampar;
<<<<<<< refs/remotes/origin/master
		public $asp;/*Llave foranea*/

		//Ingreso por el dia
		public $adulto_nacional;
		public $nino_nacional;
		public $estudiantes;
		public $adulto_extranjero;
		public $nino_extranjero;

		//Derechos de camping
		public $camping_adulto_nacional;
		public $camping_nino_nacional;
		public $camping_estudiantes;
		public $camping_adulto_extranjero;
		public $camping_nino_extranjero;

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

			$stm = $this->pdo->prepare("select nombre,adulto_nacional,nino_nacional,estudiantes,adulto_extranjero,nino_extranjero,camping_adulto_nacional,
			camping_nino_nacional,camping_estudiantes,camping_adulto_extranjero,camping_nino_extranjero from sector;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
=======


	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();
>>>>>>> add some changes for development
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

<<<<<<< refs/remotes/origin/master
//=========================================================================================================

	public function Listar(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("select sector.id, sector.nombre as Sector, capacidad_diaria,
			capacidad_acampar,asp.nombre AS Area_Silvestre from sector inner join asp on sector.asp = asp.id;");
=======
	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM sector");
>>>>>>> add some changes for development
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
<<<<<<< refs/remotes/origin/master
		catch(Exception $e){
=======
		catch(Exception $e)
		{
>>>>>>> add some changes for development
			die($e->getMessage());
		}
	}

<<<<<<< refs/remotes/origin/master
	public function Obtener($id){
		try{
=======
	public function Obtener($id)
	{
		try
		{
>>>>>>> add some changes for development
			$stm = $this->pdo
			          ->prepare("SELECT * FROM sector WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
<<<<<<< refs/remotes/origin/master
		}
		catch (Exception $e){
=======
		} catch (Exception $e)
		{
>>>>>>> add some changes for development
			die($e->getMessage());
		}
	}


<<<<<<< refs/remotes/origin/master
	public function Eliminar($id){
		try{
=======
	public function Eliminar($id)
	{
		try
		{
>>>>>>> add some changes for development
			$stm = $this->pdo
			            ->prepare("DELETE FROM sector WHERE id = ?");

			$stm->execute(array($id));
<<<<<<< refs/remotes/origin/master
		}
		 catch (Exception $e){
=======
		} catch (Exception $e)
		{
>>>>>>> add some changes for development
			die($e->getMessage());
		}
	}

<<<<<<< refs/remotes/origin/master
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
=======
	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE sector SET
						nombre            = ?,
						capacidad_diaria  = ?,
            capacidad_acampar = ?

>>>>>>> add some changes for development

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre,
                        $data->capacidad_diaria,
                        $data->capacidad_acampar,
<<<<<<< refs/remotes/origin/master

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
=======
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
>>>>>>> add some changes for development

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->capacidad_diaria,
                    $data->capacidad_acampar,
<<<<<<< refs/remotes/origin/master
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
=======
>>>>>>> add some changes for development


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
