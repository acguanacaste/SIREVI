<?php
class Provincia extends EntidadBase{
    private $id;
    private $nombre;

    public function __construct() {
        $table="provincia";
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


    public function save(){
        $query="INSERT INTO provincia (id,nombre)"
                ."VALUES(NULL,"
                       ."'".$this->nombre     ."');";

      //SE INVOCA EL METODO DB QUE LO HEREDAMOS DE ENTIDAD BASE
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }

}
?>
