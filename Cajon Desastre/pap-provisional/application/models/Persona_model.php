<?php
class Persona_model extends CI_Model {
    function c($nombre) {
        $persona = R::dispense('persona');
        $persona->nombre = $nombre;
        R::store($persona);
    }

    function r() {
       return R::findAll('persona');
    }
}
?>