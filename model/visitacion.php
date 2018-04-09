<?php
class Visitacion{
	private $pdo;

    public $id;
    public $proposito_visita;// Aun no se guarda en la base de datos
	//	public $numero_diario;//Numero para confrimar la salida de los visitantes
		public $fecha;
		public $noIdentificacion;
    public $nombre;
		public $placa_automovil;

		public $pais;
		public $provincia;//Se carga la tabla de los paices al formulario.
		public $referencia_visita;//se carga la tabla de provincia en el formulario.

    public $sector;//Sector aun no se guarda en la base de datos
    public $sendero;
		public $subSector;
   	public $dias_camping;
		public $salida;
	//CATEGORIAS DE PAGO (4 tipos de valor en una sola variable) en este campo se guarda el valor del costo que tiene la persona por ingresar al sector.Nacionales, Extranjeros, ninos nacionales, ninos extranjeros
		public $nacional_adult;//Se guarda la cantidad por visitante nacional
		public $nacional_kid;//Se guarda la cantidad por ninos Nacionales
		public $estudiantes;//Se guarda la cantidad pde estudiantes
		public $extranjero_adult;//Se guarda la cantida de visitantes estrnjeros
		public $extranjero_kid;//Se guarda el monto por ninos Extranjeros

    public $personas_surf;//Valor numerico que se sumara al total de la visitacion mediante una funcion.
		public $prepago;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron
    public $exonerado;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron

    public $tipo_pago;//Para saber si se hizo con tarjeta o Efectivo.
    public $moneda;//Tipo de moneda con la que se realizao el pago.
	  public $montoCancelar;//Para que se guarde el monto que el visitante pago en total.
		//public $total_dolar;//Muestra el total de lo que se cobra en dolares
		//public $monto_total;//Total a pagar por el visitante



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

			$stm = $this->pdo->prepare("select visitacion.id, proposito_visita,visitacion.fecha,
       visitacion.nombre as Nombre, noIdentificacion, placa_automovil,
        pais.nombre as Pais, referencia_visita,
         sendero.nombre as Sendero, dias_camping as Dias, visitacion.salida,
		      nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid,
          personas_surf, prepago, exonerado,
			     tipo_pago, moneda
            from visitacion
              inner join pais on visitacion.pais = pais.id
              inner join sendero on visitacion.sendero = sendero.id order by id asc;");
							//  Este ejemplo sirve para realizar los cambios en los botones a la hora de querer cambiar el orden de los dats en la tabla
			$stm->execute();


			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}

	public function Nacionalidades(){
		try{
			$result = array();

			$stm = $this->pdo->prepare("select visitacion.id, visitacion.fecha, visitacion.pais,
			 visitacion.nombre as Nombre, pais.nombre as Pais, visitacion.tipo_pago, visitacion.moneda, referencia_visita,
			 sendero.nombre as Sendero
				 from visitacion
							inner join pais on visitacion.pais = pais.id
							inner join sendero on visitacion.sendero = sendero.id ;");
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
			          ->prepare("SELECT * FROM visitacion WHERE id = ?");


			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}
		 catch (Exception $e){
			die($e->getMessage());
		}
	}
		/*====================================================================================================*/
		public function ContarRegistros(){
			try{
				$stm = $this->pdo
										->prepare("SELECT count(id) FROM visitacion;");

				$stm->execute(array($id));
			}
			catch (Exception $e){
				die($e->getMessage());
			}
		}
		/*===================================================================================================*/

	public function Eliminar($id){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM visitacion WHERE id = ?");

			$stm->execute(array($id));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}

	public function ConsultaPersonasDentroParque(){
		try{
			$stm = $this->pdo
			            ->prepare("select * from visitacion where visitacion.fecha= now()");

			$stm->execute(array($id));
		}
		catch (Exception $e){
			die($e->getMessage());
		}
	}




	public function Actualizar($data){
		try{
			$sql = "UPDATE visitacion SET

						proposito_visita          = ?,
            noIdentificacion      		= ?,
						nombre                		= ?,
						placa_automovil       		= ?,
---------------------------------------------------------------------
						pais       								= ?,
						provincia             		= ?,
					--	referencia_visita     		= ?,
-----------------------------------------------------------------------
            sendero                   = ?,
            dias_camping          		= ?,
						subSector                 = ?,
-----------------------------------------------------------------
						nacional_adult        		= ?,
						nacional_kid          		= ?,
						estudiantes               = ?,
						extranjero_adult      		= ?,
						extranjero_kid  					= ?,
--------------------------------------------------------------------------
            personas_surf             = ?,
						prepago               		= ?,
            exonerado             		= ?,
-------------------------------------------------------------------
						tipo_pago       					= ?,
            moneda                    = ?,

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
												$data->proposito_visita,
                        $data->noIdentificacion,
                        $data->nombre,
												$data->placa_automovil,
//---------------------------------------------------------------------
												$data->pais,
												$data->provincia,
									//			$data->referencia_visita,
//--------------------------------------------------------------------
							//			$data->fecha_ingreso,
//                        $data->fecha_salida,
//------------------------------------------------------------------
												$data->sendero,
//--------------------------------------------------------------------
                        $data->dias_camping,
												$data->subSector,
//-----------------------------------------------------------------
												$data->nacional_adult,
												$data->nacional_kid,
												$data->estudiantes,
												$data->extranjero_adult,
												$data->extranjero_kid,

                        $data->personas_surf,
                        $data->prepago,
                        $data->exonerado,
//-----------------------------------------------------------------
                        $data->tipo_pago,
												$data->moneda,
                        $data->id

					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Visitacion $data)
	{
		try
		{
		$sql ="INSERT INTO visitacion (proposito_visita, noIdentificacion, nombre, placa_automovil,
       pais, provincia,referencia_visita,
       sendero, dias_camping, subSector,
        nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid,
        personas_surf, prepago, exonerado,montoCancelar,
         tipo_pago, moneda)
						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(		  $data->proposito_visita,

                    $data->noIdentificacion,
                    $data->nombre,
										$data->placa_automovil,
//------------------------------------------------------------------------------------------------
										$data->pais,
										$data->provincia,
										$data->referencia_visita,
//----------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------
                    $data->sendero,
                    $data->dias_camping,
										$data->subSector,


//---------------------------------------------------------------------------------------------------
										$data->nacional_adult,
										$data->nacional_kid,
										$data->estudiantes,
										$data->extranjero_adult,
										$data->extranjero_kid,

                    $data->personas_surf,
                    $data->prepago,
                    $data->exonerado,
//----------------------------------------------------------------------------------------
										$data->montoCancelar,
										$data->tipo_pago,
										$data->moneda,
//

                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ControlSalidas(){/*Metodo que me borra los datos en la bd*/
  		try{
  			$stm = $this->pdo->prepare("SELECT salida FROM visitacion where id = ".$_REQUEST['id']);
  			$stm->execute();
  			$resultado = $stm->fetch();
  			$salida = $resultado['salida'];
  			$nuevaSalida = $salida== 0 ? 1 : 0;
  			$stm = $this->pdo->prepare("UPDATE visitacion SET salida = $nuevaSalida where id = ".$_REQUEST['id']);
  			return $stm->execute();
  		}
  		catch (Exception $e){
  			die($e->getMessage());
  		}
  	}


}
