<!--AyudaVistas que puede contener diversos helpers (pequeños métodos que nos
ayuden en pequeñas tareas dentro de las vistas-->
<?php
class AyudaVistas{
//ESTA FUNCION ES LO QUE ME VA A PINTAR LA URL
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }

    //Helpers para las vistas
}
?>
