<?php
/*HEREDA DE LA CLASE ENTIDADBASE*/
class Pais extends EntidadBase{
    private $id;
    private $nombre;
    private $codigo;


/**CONSTRUCTOR DONDE SE DECLARA CON QUE TABAL SE VA A TRABAJAR*/
    public function __construct() {
        $table="pais";/*TABLA CON LA QUE SE TRABAJA*/
        parent::__construct($table);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }


    public function save(){
        $query="INSERT INTO pais (id,nombre,codigo)
                VALUES(NULL,
                       '".$this->nombre   ."',
                       '".$this->codigo   ."');";

      //SE INVOCA EL METODO DB QUE LO HEREDAMOS DE ENTIDAD BASE
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>
