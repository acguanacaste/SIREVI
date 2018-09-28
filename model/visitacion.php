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
		public $nom_referencia_visita;//Esta variable me guarda el nombre de la referencia de la visita en caso de que requiera

    public $sector;//Sector aun no se guarda en la base de datos
    public $sendero;
		public $subSector;
   	public $dias_camping;
		public $personas_acampando;
		public $salida;
		public $horaSalida;
	//CATEGORIAS DE PAGO (4 tipos de valor en una sola variable) en este campo se guarda el valor del costo que tiene la persona por ingresar al sector.Nacionales, Extranjeros, ninos nacionales, ninos extranjeros
		public $nacional_adult;//Se guarda la cantidad por visitante nacional
		public $nacional_kid;//Se guarda la cantidad por ninos Nacionales
		public $estudiantes;//Se guarda la cantidad pde estudiantes
		public $prepago_nacional;//Por funcionalidad para el reporte SEMEC, se necesita saber si el prepago fue, nacional, o extranjero
		public $nacional_exonerado;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron
		public $surf_nacional;//Me guarda el valor de los nacionales que vaya a surfear.

		public $extranjero_adult;//Se guarda la cantida de visitantes estrnjeros
		public $extranjero_kid;//Se guarda el monto por ninos Extranjeros
		public $extranjero_exonerado;//Este campo debe ser numerico para calcular junto la cantidad de personas que ingresaron
		public $surf_extranjero;//Me guarda el valor de los extranjeros que vayan a surfear.
		public $prepago_extranjero;////Por funcionalidad para el reporte SEMEC, se necesita saber si el prepago fue, nacional, o extranjero



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

			$stm = $this->pdo->prepare("select visitacion.id, visitacion.proposito_visita, visitacion.fecha,
																	visitacion.Nombre, visitacion.noIdentificacion, visitacion.placa_automovil,
																	pais.nombre As Pais, tipo_pago, moneda, salida, horaSalida
																		from visitacion
																			inner join pais on visitacion.pais_id = pais.id order by fecha DESC;");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}


 	public function ListarObsoleto(){
 		try{
 			$tamano_paginas = 5;//Los registros que quiero mostrar

 if(isset($_GET["pagina"])) {//Este if es para hacerle saber al sistem que el usuario no ha cargado ninguna de las paginas,

 				if ($GET["pagina"]==1){
 						header('Location: index.php?c=Visitacion&a=AdminUser');

 				}else{
 					$pagina = $_GET["pagina"];//Me guarda temporalmente el valor que tiene pagina.

 				}//Fin del if $_GET(["pagina"]);
 			}else{
 				$pagina = 1;//La pagina en la que el usuario esta.
 			}

 			$empezar_desde = ($pagina-1)*$tamano_paginas;
 			$result = array();

 			$stm = $this->pdo->prepare("select visitacion.id, proposito_visita,visitacion.fecha,
        visitacion.nombre as Nombre, noIdentificacion, placa_automovil,
         pais.nombre as Pais, referencia_visita,
          sendero.nombre as Sendero, dias_camping as Dias, visitacion.salida,
 		      nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid,
           personas_surf, prepago,
 			     tipo_pago, moneda, horaSalida
             from visitacion
               inner join pais on visitacion.pais_id = pais.id
               inner join sendero on visitacion.sendero = sendero.id order by id asc");

  			//  Este ejemplo sirve para realizar los cambios en los botones a la hora de querer cambiar el orden de los dats en la tabla
 			$stm->execute();//Este es la primero ejecucion de la conculta, luego pasa a la siguiente donde se deben ingresar las variables dinamicas
 			$num_filas =  $stm->rowCount();
 			$total_paginas = ceil($num_filas/$tamano_paginas);//24/5 = 5, para que me uestre un numero entero con la funcion ceil redondea el resultado

 echo "<div id='alert_box'>
   <div class='col s12 m12'>
   <div class='card teal darken-2 z-depth-3'>
       <div class='row'>
         <div class='col s12 m10'>
           <div class='card-content white-text'>
             <p>1. Numero de registros en el sistema: &nbsp; $num_filas </p>
             <p>2. $total_paginas registros por página</p>
             <p>3. Página $pagina  de &nbsp; $total_paginas</p>
         </div>
       </div>
       <div class='col s12 m2'><i class='fa fa-times icon_style' id='alert_close' aria-hidden='true'></i>
       </div>
     </div>
    </div>
   </div>
 </div>";

 			//echo "Numero de registros en el sistema: ". $num_filas . "<br>";//Muestra cantidad de registros totales
 			//echo $total_paginas . " registros por pagina <br>";//Me muestra la contidad de paginas por cada pagina desplegada
 			//echo "Página ". $pagina . " de " . $total_paginas . "<br>";

 			$stm = $this->pdo->prepare("select visitacion.id, proposito_visita,visitacion.fecha,
        visitacion.nombre as Nombre, noIdentificacion, placa_automovil,
         pais.nombre as Pais, referencia_visita,
          sendero.nombre as Sendero, dias_camping as Dias, visitacion.salida,
 		      nacional_adult, nacional_kid, estudiantes, extranjero_adult, extranjero_kid,
           personas_surf, prepago,
 			     tipo_pago, moneda, horaSalida
             from visitacion
               inner join pais on visitacion.pais_id = pais.id
               inner join sendero on visitacion.sendero = sendero.id order by id asc limit $empezar_desde,$tamano_paginas");
 		$sql_limit = array();//Convierto la consulta en arreglo
 		$stm->execute($sql_limit);//Ejecuto el arreglo que contiene el LIMITE

 		/*------------------- Paginacion de los registros Visitacion*/

 			echo "Páginas: ";
 			for ($i=1; $i<$total_paginas; $i++) {
 				echo "<a href='?pagina=". $i . "'> " . $i . "</a> ";
//pagina es la variable que me muestra en la URL la pagina que el usuario ha seleccionado
 			}


 while ($pagina <= $total_paginas):
     echo  "<ul  class='pagination'>
 			<li class='waves-effect'><a href='#!'><i class='material-icons'>chevron_left</i></a></li>
 		    <li style='inline-block' class='active'><a href=''> " . $pagina . "</li>
 		    <li class='waves-effect'><a href='#!'><i class='material-icons'>chevron_right</i></a></li>
 		  </ul>" ;
     $pagina++;
 endwhile;


 		return $stm->fetchAll(PDO::FETCH_OBJ);

 		}

 		catch(Exception $e){
 			die($e->getMessage());
		}



 	}

/*==========================================================================================*/
// public function ConteoIngresosDiarios(){
// 	try{
// 		$result = array();
// 		$stm = $this->pdo->prepare("");
//
// 		$stm->execute();
// 		return $stm->fetchAll(PDO::FETCH_OBJ);
// 	}
// 	catch(Exception $e){
// 		die($e->getMessage());
// 	}
// }

/*=========================================================================================*/
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


	public function Actualizar($data){
		try{

			$sql = "UPDATE visitacion SET

						sector                    = ?,
						usuario                   = ?,
						asp                       = ?,
						proposito_visita          = ?,
            noIdentificacion      		= ?,

						nombre                		= ?,
						placa_automovil       		= ?,
						pais_id       								= ?,
						provincia_id             		= ?,
						referencia_visita         = ?,

						nom_referencia_visita     = ?,
            sendero                   = ?,
            dias_camping          		= ?,
						personas_acampando        = ?,
						subSector                 = ?,


						nacional_adult        		= ?,
						nacional_kid          		= ?,
						estudiantes               = ?,
						nacional_surf             = ?,
						nacional_prepago					= ?,
						nacional_exonerado     		= ?,

						extranjero_adult      		= ?,
						extranjero_kid  					= ?,
						extranjero_exonerado   		= ?,
						extranjero_surf						= ?,
						extranjero_prepago     		= ?,

						tipo_pago       					= ?,
            moneda                    = ?,
						montoCancelar							= ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
												$data->sector,
												$data->usuario,
												$data->asp,
//--------------------------------------------------------
												$data->proposito_visita,
                        $data->noIdentificacion,
						            $data->nombre,
												$data->placa_automovil,
//--------------------------------------------------------
												$data->pais,
												$data->provincia,
												$data->referencia_visita,
												$data->nom_referencia_visita,

												$data->sendero,
                        $data->dias_camping,
												$data->personas_acampando,
												$data->subSector,
//-----------------------------------------------------------------
												$data->nacional_adult,
												$data->nacional_kid,
												$data->estudiantes,
												$data->nacional_surf,
												$data->nacional_prepago,
												$data->nacional_exonerado,

//--------------------------------------------------------------------------------
												$data->extranjero_adult,
												$data->extranjero_kid,
												$data->extranjero_surf,
												$data->extranjero_prepago,
												$data->extranjero_exonerado,

												$data->tipo_pago,
//-----------------------------------------------------------------
												$data->moneda,
												$data->montoCancelar,
                        $data->id
					)
				);

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Visitacion $data) {

			try	{

			$sql ="INSERT INTO visitacion (sector, usuario, asp, proposito_visita, noIdentificacion, nombre, placa_automovil,
	       pais_id, provincia_id, referencia_visita, nom_referencia_visita, salida,
	       sendero, dias_camping, personas_acampando, subSector,
	        nacional_adult, nacional_kid, estudiantes,nacional_prepago, nacional_exonerado, nacional_surf,
					extranjero_adult, extranjero_kid, extranjero_prepago, extranjero_exonerado, extranjero_surf,
	         tipo_pago, moneda, montoCancelar)
							VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
			     ->execute(
					array(
											$data->sector,
											$data->usuario,
											$data->asp,
	/*================================================================================================*/
						 					$data->proposito_visita,
	                    $data->noIdentificacion,
	                    $data->nombre,
											$data->placa_automovil,
	//=================================================================================================
											$data->pais,
											$data->provincia,
											$data->referencia_visita,
											$data->nom_referencia_visita,
											$data->salida,

	//===================================================================================================
	                    $data->sendero,
	                    $data->dias_camping,
											$data->personas_acampando,
											$data->subSector,

	//---------------------------------------------------------------------------------------------------
											$data->nacional_adult,
											$data->nacional_kid,
											$data->estudiantes,
											$data->nacional_prepago,
											$data->nacional_exonerado,
											$data->nacional_surf,

											$data->extranjero_adult,
											$data->extranjero_kid,
											$data->extranjero_prepago,
											$data->extranjero_exonerado,
											$data->extranjero_surf,

	//----------------------------------------------------------------------------------------
											$data->tipo_pago,
											$data->moneda,
											$data->montoCancelar,
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
  			$stm = $this->pdo->prepare("UPDATE visitacion SET salida = $nuevaSalida, horaSalida = now() where id = ".$_REQUEST['id']);
  			return $stm->execute();

			}

			catch (Exception $e){
  			die($e->getMessage());
  		}
  	}

		/*=====================================================================================================*/

		public function Cantidad_Personas_Dentro_Parque(){
			$result = array();
			try {
				date_default_timezone_set("America/Costa_Rica");
				$fechaStart = date("Y/m/d");

				$tmpFecha1 = $fechaStart.' 00:00:00';//ESTA ES LA FECHA DEL DIA ACTUAL
				$tmpFecha2 = $fechaStart.' 23:59:59';

				$stm = $this->pdo->prepare("call cant_personas_dentro_parque('$tmpFecha1','$tmpFecha2')");
				$stm->execute();

				$result = $stm->fetch(PDO::FETCH_OBJ);

				return $result->Cantidad;

			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


public function Consecutivo(){
	$result = array();
	try {
		$stm = $this->pdo->prepare("call Total_Ingresos()");
		$stm->execute();
		$result = $stm->fetch(PDO::FETCH_OBJ);
		return $result->Cantidad;
	} catch (Exception $e) {
		die($e->getMessage());
	}
}

/*==============================================================================================================*/
/*==============================================================================================================*/
		public function Consulta_SubSector_Model($fechaStart, $fechaEnd, $pSubSector){
		 $result = array();
		 try {
			 $stm = $this->pdo->prepare("call consulta_SubSectores('$fechaStart', '$fechaEnd', '$pSubSector')");
			 $stm->execute();
			 $result = $stm->fetchAll(PDO::FETCH_OBJ);
			 return $result;
		 } catch (Exception $e) {
			 die($e->getMessage());
		 }
	 }
/*======================>> Esta es la funcion (carpeta model) con la que se trabaja el reporte para SEMEC <<======================================================================================*/
 		public function Consulta_SEMEC_Model($fechaStart, $fechaEnd){//Funcion up and working
			$result = array();
			try {
				$stm = $this->pdo->prepare("call consulta_SEMEC('$fechaStart', '$fechaEnd')");
				$stm->execute();
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				return $result;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}
/*================================================================================================================*/
public function Consulta_ReporteDiario_Model($fechaStart, $pSector){
	$result = array();
	try {

		$stm = $this->pdo->prepare("call consulta_ReporteDiario('$fechaStart', '$pSector')");
		$stm->execute();
		$result = $stm->fetchAll(PDO::FETCH_OBJ);
		return $result;

	} catch (Exception $e) {
		die($e->getMessage());

	}
}

/*=================================================================================================*/
public function Consulta_Nacionales_Model($fechaStart, $fechaEnd){//Funcion up and working

		$result = array();
		try {
			$stm = $this->pdo->prepare("call NacionalesAgrupadosXProvincia('$fechaStart', '$fechaEnd')");
			$stm->execute();
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			return $result;
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

/*==============================================================================================*/
public function Consulta_Totales_por_Sector_Model($fechaStart, $fechaEnd, $pSector){//Funcion up and working
		$result = array();
		try {
			$stm = $this->pdo->prepare("call consulta_Total_Mensual_Sectores('$fechaStart', '$fechaEnd', '$pSector')");
			$stm->execute();
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			return $result;
		} catch (Exception $e) {
			die($e->getMessage());
		}
}

/*=============================================================================================*/

public function Consulta_Campistas_Model($fechaStart, $fechaEnd, $pSector){//Funcion up and working
		$result = array();
			try {
				$stm = $this->pdo->prepare("call consulta_Campistas('$fechaStart', '$fechaEnd', '$pSector')");
				$stm->execute();
				$result = $stm->fetchAll(PDO::FETCH_OBJ);
				return $result;
			} catch (Exception $e) {
				die($e->getMessage());
		}
	}
/*==============================================================================================*/

}// fin del PHP.
