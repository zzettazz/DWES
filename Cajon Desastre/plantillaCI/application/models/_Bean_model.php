<?php
class _bean_model extends CI_Model
{
    function c($nombre)
    {
        if (R::findOne('bean', 'nombre=?', [$nombre]) == null) {
            $_bean = R::dispense('bean');
            $_bean->nombre = $nombre;
            R::store($_bean);
        }
        else {
           throw (new Exception("El nombre del bean $nombre ya está registrado"));
        }
    }

    function r()
    {
        return R::findAll('bean');
    }

    function rID($id) {
        return R::load('bean',$id);
    }

    public function u($id,$nombre) {
        if (R::findOne('bean','nombre=? and id<>?',[$nombre,$id]) == null) {
            $_bean = R::load('bean',$id);
            $_bean->nombre = $nombre;
            R::store($_bean);
        }
        else {
            throw new Exception("El nuevo nombre del bean ($nombre) ya existe");
        }
    }

    public function d($id) {
        R::trash(R::load('bean',$id));
    }
}
?>