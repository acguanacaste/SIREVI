<?php
class Perfil_imagen{
	private $pdo;

    public $id;
    public $anchura;
    public $altura;
    public $tipo;
    public $imagen;


	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::StartUp();
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Listar(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM image");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Obtener($id){
		try{
			$stm = $this->pdo->prepare("SELECT * FROM image WHERE id = ?");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
    catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Eliminar($id){
		try{
			$stm = $this->pdo->prepare("DELETE FROM image WHERE id = ?");
			$stm->execute(array($id));
		}
    catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function Actualizar($data){
		try{
			$sql = "UPDATE image SET
						anchura            = ?,
						altura             = ?,
            tipo               = ?,
            imagen             = ?
            WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->anchura,
                        $data->altura,
                        $data->tipo,
                        $data->imagen,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Perfil_imagen $data)
	{
		try
		{
		$sql = "INSERT INTO Perfil_imagen (anchura,altura,tipo,imagen)
		        VALUES (?, ?, ?, ? )";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->anchura,
                    $data->altura,
                    $data->tipo,
                    $data->imagen
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
