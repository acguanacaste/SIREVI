<?php
//HEREDANDO TODO LO DE ENTIDADBASE TENEMOS DISPONIBLE TODO DE ESA CLASE
class ModeloBase extends EntidadBase{
    private $table;
    private $fluent;

//EN ESTE CONSTRUCTOR SE LE ESTA ENVIANDO L A TABLA CON LA QUE TIENE QUE TRABAJAR
    public function __construct($table) {
        $this->table=(string) $table;
        parent::__construct($table);

        $this->fluent=$this->getConetar()->startFluent();
    }

    public function fluent(){
        return $this->fluent;
    }

//METODO QUE ME EJECUTA SQL
    public function ejecutarSql($query){
    //ESTE METODO SE ENCARGA DE SABER SI ESA QUIERY DEVUELVE UNO O VARIOS VALORES
        $query=$this->db()->query($query);
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                   $resultSet[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }

        return $resultSet;
    }

    //Aqui podemos montarnos métodos para los modelos de consulta


}
?>
