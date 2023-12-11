<?php
class Pais_model extends CI_Model
{
    function c($nombre)
    {
        if (R::findOne('pais', 'nombre=?', [$nombre]) == null) {
            $pais = R::dispense('pais');
            $pais->nombre = $nombre;
            R::store($pais);
        }
        else {
           throw (new Exception("El nombre del país $nombre ya está registrado"));
        }
    }

    function r()
    {
        return R::findAll('pais');
    }

    function rID($id) {
        return R::load('pais',$id);
    }
}
?>