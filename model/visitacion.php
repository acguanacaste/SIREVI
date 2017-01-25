<?php
class Visitacion{
	private $pdo;

    public $id;
    public $noIdentificacion;
    public $nombre;
    public $fecha_ingreso;
    public $fecha_salida;
    public $acampa;
    public $dias_camping;
    public $cantidadPersonasSurf;
    public $prepago;
    public $exonerado;
    public $numero_diario;
    public $placa_automovil;
    public $tipo_automovil;
    public $monto;
    public $moneda;
    public $total;



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

			$stm = $this->pdo->prepare("SELECT * FROM visitacion");
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
			          ->prepare("SELECT * FROM visitacion WHERE id = ?");


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
			            ->prepare("DELETE FROM visitacion WHERE id = ?");

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
			$sql = "UPDATE visitacion SET
            noIdentificacion      = ?,
						nombre                = ?,
						fecha_ingreso         = ?,
            fecha_salida          = ?,
            acampa                = ?,
            dias_camping          = ?,
            cantidadPersonasSurf  = ?,
            prepago               = ?,
            exonerado             = ?,
            numero_diario         = ?,
            placa_automovil       = ?,
            tipo_automovil        = ?,
            monto                 = ?,
            moneda                = ?,
            total                 = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->noIdentificacion,
                        $data->nombre,
                        $data->fecha_ingreso,
                        $data->fecha_salida,
                        $data->acampa,
                        $data->dias_camping,
                        $data->cantidadPersonasSurf,
                        $data->prepago,
                        $data->exonerado,
                        $data->numero_diario,
                        $data->placa_automovil,
                        $data->tipo_automovil,
                        $data->monto,
                        $data->moneda,
                        $data->total,
                        $data->id
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try
		{
		$sql = "INSERT INTO usuarios (noIdentificacion,nombre,fecha_ingreso,fecha_salida,acampa,dias_camping,cantidadPersonasSurf,prepago,exonerado
                                    numero_diario,placa_automovil,tipo_automovil,monto,moneda,total)
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->noIdentificacion,
                    $data->nombre,
                    $data->fecha_ingreso,
                    $data->fecha_salida,
                    $data->acampa,
                    $data->dias_camping,
                    $data->cantidadPersonasSurf,
                    $data->prepago,
                    $data->exonerado,
                    $data->numero_diario,
                    $data->placa_automovil,
                    $data->tipo_automovil,
                    $data->monto,
                    $data->moneda,
                    $data->total

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}