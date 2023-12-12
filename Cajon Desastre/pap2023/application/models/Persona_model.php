<?php
class Persona_model extends CI_Model {
    function c($nombre,$passwd) {
        $persona = R::dispense('persona');
        $persona->nombre = $nombre;
        $persona->passwd = password_hash($passwd,PASSWORD_DEFAULT);
        R::store($persona);
    }

    function r() {
       return R::findAll('persona');
    }

    function comprobarLogin($nombre,$passwd) {
        $persona = R::findOne('persona','nombre=?',[$nombre]);
        if ($persona == null || !password_verify($passwd,$persona->passwd)) {
            throw new Exception("Usuario o constraseña incorrectas");
        }
        return $persona;
    }
}
?>