<?php
require_once "database.php";

class ASP
{

    public $id;
    public $nombre;
    public $tipo;
    public $ubicacion;/*Provincia a la que pertenece el area de conservacion, campo opcional aun no implementado*/
    public $pdo;


    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    public function Listar()
    {
        try {

            $stm = $this->pdo->prepare("SELECT * FROM asp");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM asp WHERE id = ?");
            $stm->execute(array($id));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM asp WHERE id = ?");
            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data)
    {
        try {
            $sql = "UPDATE asp SET
						nombre            = ?,
						tipo              = ?,
            ubicacion         = ?
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->tipo,
                        $data->ubicacion,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(ASP $data)
    {
        try {
            $sql = "INSERT INTO ASP (nombre,tipo,ubicacion)
		        VALUES (?, ?, ? )";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->nombre,
                        $data->tipo,
                        $data->ubicacion
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
