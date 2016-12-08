<?php
class PaisModel extends ModeloBase{
    private $table;/*PARAMETRO POR EL CUAL SE ENVIA LA TABLA QUE SE QUIETE CONSULTAR*/

/*CONSTRUCTOR DONDE SE DECLARA LA TABLA QUE SE VA A USAR EN LAS CONSULTAS*/
    public function __construct(){
        $this->table="pais";
        parent::__construct($this->table);
    }

    //METODOS DE CONSULTA
    public function getUnPais(){
      /*CONSULTA QUE ME OBTIENE EL EMAIL DEL USUARIO*/
        $query="SELECT * FROM pais WHERE nombre='Costa Rica'";
        /*LA CONSULTA SE IGUALA A UNA VARIABLE QUE SE ENVIA POR PARAMETRO A UNA FUNCION*/
        $pais=$this->ejecutarSql($query);
        /*RETORNA LO QUE LA CONSULTA ENVIA AL SISTEMA A TRAVEZ DE LA VERIABLE USUARIO*/
        return $pais;
    }

}
?>
