<?php
require_once "database.php";
class Dollar extends Database {


    public $id;
    public $valor_dolar;
    public $fecha_cambio;
    public $pdo;


    public function __construct(){
        $db = new Database();
        $this->pdo = $db->pdo;
    }

	public function Listar(){/*Metodo que me muestra los datos qye hay en la bd*/
		try{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM dollar");
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
			          ->prepare("SELECT * FROM dollar WHERE id = ?");

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

/*===============================================================================================================*/



/*================================================================================================================*/
	public function Eliminar($id){/*Metodo que me borra los datos en la bd*/
	try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM dollar WHERE id = ?");
			$stm->execute(array($id));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}


	public function Actualizar($data){/*Metodo que me modifica los datos en la bd*/
	try{
			$sql = "UPDATE dollar SET

										valor_dolar          = ?,
										fecha_cambio         = ?

				    		WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->valor_dolar,
												$data->fecha_cambio,
                        $data->id
					)
				);
		}
		catch (Exception $e){
			die($e->getMessage());

		}
	}

	public function Registrar(Dollar $data){/*Metodo que me registra los datos en la bd*/
	 try{
		$sql = "INSERT INTO dollar (valor_dolar, fecha_cambio)
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->valor_dolar,
                    $data->fecha_cambio,

                )
			);
		} catch (Exception $e){
			die($e->getMessage());
		}
	}
}
