<?php
class Visitacion{
	private $pdo;

    public $id;
	//	public $numero_diario;//Numero para confrimar la salida de los visitantes
		public $noIdentificacion;
    public $nombre;
		public $placa_automovil;

		public $pais;
		public $provincia;//Se carga la tabla de los paices al formulario.
		public $referencia_visita;//se carga la tabla de provincia en el formulario.

	//	public $fecha_ingreso;//Se hace con un TimeStamp
  //  public $fecha_salida;//Se suma los dias a partir del dia que ingreso, OPCIONAL



  //    public $acampa;
  //	public $cantidad_personas_camping;
   		public $dias_camping;
  //  public $cantidad_personas_surf;//Valor numerico que se sumara al total de la visitacion mediante una funcion.
		//public $lugar_camping;//Varable que me gusrda el lugar donde esta acampando

	//CATEGORIAS DE PAGO (4 tipos de valor en una sola variable) en este campo se guarda el valor del costo que tiene la persona por ingresar al sector.Nacionales, Extranjeros, ninos nacionales, ninos extranjeros
		public $nacional_adult;//Se guarda la cantidad por visitante nacional
		public $nacional_kid;//Se guarda la cantidad por ninos Nacionales
		public $estudiantes;//Se guarda la cantidad pde estudiantes
		public $extranjero_adult;//Se guarda la cantida de visitantes estrnjeros
		public $extranjero_kid;//Se guarda el monto por ninos Extranjeros

	public $sendero;



		public $prepago;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron
    public $exonerado;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron


    public $tipo_pago;//Para saber si se hizo con tarjeta o Efectivo.
    public $moneda;//Tipo de moneda con la que se realizao el pago.
		public $total_dolar;//Muestra el total de lo que se cobra en dolares
		public $monto_total;//Total a pagar por el visitante



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

			$stm = $this->pdo->prepare("select visitacion.id, visitacion.nombre as Nombre,noIdentificacion, placa_automovil,
			 pais.nombre as Pais, provincia.nombre as Provincia,
			 nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid, prepago, exonerado,
			 tipo_pago, moneda, total_dolar, monto_total,
			 sendero.nombre as Sendero, referencia_visita, dias_camping as Dias from visitacion
			 inner join sendero on visitacion.sendero = sendero.id inner join pais on visitacion.pais = pais.id
			 inner join provincia on visitacion.provincia = provincia.id;");
			$stm->execute();

/*select visitacion.id, visitacion.nombre as Nombre,pais.nombre as Pais, sector.nombre AS Sector,
dias_camping as Dias, from visitacion inner join usuarios on visitacion.usuario = usuarios.id
inner join asp on visitacion.asp = asp.id inner join sector on visitacion.sector = sector.id
inner join sendero on visitacion.sendero = sendero.id inner join pais on visitacion.pais = pais.id
inner join provincia on visitacion.provincia = provincia.id;""*/



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

	public function Actualizar($data){
		try{
			$sql = "UPDATE visitacion SET

            noIdentificacion      		= ?,
						nombre                		= ?,
						placa_automovil       		= ?,
						referencia_visita     		= ?,
---------------------------------------------------------------------
						pais       								= ?,
						provincia             		= ?,
						referencia_visita     		= ?,
-----------------------------------------------------------------------
				/*		fecha_ingreso         		= ?,
            --fecha_salida          = ?,
----------------------------------------------------------------------
						sendero               		= ?,*/
----------------------------------------------------------------------
				 -- 	acampa                		= ?,
            dias_camping          		= ?,
				--		cantidad_personas_camping = ?,
            cantidadPersonasSurf  		= ?,

-----------------------------------------------------------------
						nacional_adult        		= ?,
						nacional_kid          		= ?,
						estudiantes               = ?,
						extranjero_adult      		= ?,
						extranjero_kid  					= ?,
						prepago               		= ?,
            exonerado             		= ?,
-------------------------------------------------------------------
						tipo_pago       					= ?/*
						monto											= ?,
            moneda                		= ?*/
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(

                        $data->noIdentificacion,
                        $data->nombre,
												$data->placa_automovil,
//---------------------------------------------------------------------
												$data->pais,
												$data->provincia,
												$data->referencia_visita,
//--------------------------------------------------------------------
							//			$data->fecha_ingreso,
//                        $data->fecha_salida,
//------------------------------------------------------------------
												$data->sendero,
//--------------------------------------------------------------------
                  //      $data->acampa,
                        $data->dias_camping,
								//				$cantidad_personas_camping,
                      $data->cantidad_personas_surf,

//-----------------------------------------------------------------
												$data->nacional_adult,
												$data->nacional_kid,
												$data->estudiantes,
												$data->extranjero_adult,
												$data->extranjero_kid,
                        $data->prepago,
                        $data->exonerado,
//-----------------------------------------------------------------
                        $data->tipo_pago,
												$data->moneda,
												$data->total_dolar,
                    		$data->monto_total,

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
		$sql ="INSERT INTO visitacion (noIdentificacion, nombre, placa_automovil, pais, provincia, referencia_visita,
			  dias_camping, nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid, sendero, prepago,
				 exonerado, tipo_pago, moneda, total_dolar, monto_total)
						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";



/* "INSERT INTO usuarios (noIdentificacion, nombre, placa_automovil, pais, provincia, referencia_visita, fecha_ingreso, sendero, acampa, dias_camping,cantidad_personas_camping,
															cantidadPersonasSurf,nacional_adult,nacional_kid,estudiantes,extranjero_adult,extranjero_kid, prepago, exonerado, tipo_pago, monto, moneda)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";*/
		$this->pdo->prepare($sql)
		     ->execute(
				array(		  $data->noIdentificacion,
                    $data->nombre,
										$data->placa_automovil,
//------------------------------------------------------------------------------------------------
										$data->pais,
										$data->provincia,
										$data->referencia_visita,
//----------------------------------------------------------------------------------------------
  //                $data->fecha_ingreso,
//				$data->fecha_salida,
//----------------------------------------------------------------------------------------------

//-----------------------------------------------------------------------------------------------
								//		$data->acampa,
                    $data->dias_camping,
							//			$data->cantidad_personas_camping,
            //        $data->cantidad_personas_surf,

//---------------------------------------------------------------------------------------------------
										$data->nacional_adult,
										$data->nacional_kid,
										$data->estudiantes,
										$data->extranjero_adult,
										$data->extranjero_kid,

										$data->sendero,
                    $data->prepago,
                    $data->exonerado,
//----------------------------------------------------------------------------------------
										$data->tipo_pago,
										$data->moneda,
										$data->total_dolar,
										$data->monto_total,


                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
