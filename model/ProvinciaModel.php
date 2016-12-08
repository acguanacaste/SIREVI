<?php
class ProvinciaModel extends ModeloBase{
    private $table;/*PARAMETRO POR EL CUAL SE ENVIA LA TABLA QUE SE QUIETE CONSULTAR*/

/*CONSTRUCTOR DONDE SE DECLARA LA TABLA QUE SE VA A USAR EN LAS CONSULTAS*/
    public function __construct(){
        $this->table="provincia";
        parent::__construct($this->table);
    }

    //METODOS DE CONSULTA
    public function getUnUsuario(){
      /*CONSULTA QUE ME OBTIENE EL EMAIL DEL USUARIO*/
        $query="SELECT * FROM provincia WHERE nombre='Guanacaste'";
        /*LA CONSULTA SE IGUALA A UNA VARIABLE QUE SE ENVIA POR PARAMETRO A UNA FUNCION*/
        $provincia=$this->ejecutarSql($query);
        /*RETORNA LO QUE LA CONSULTA ENVIA AL SISTEMA A TRAVEZ DE LA VARIABLE*/
        return $provincia;
    }

}
?>
