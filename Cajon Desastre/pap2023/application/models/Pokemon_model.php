<?php
class Pokemon_model extends CI_Model
{
    function c($nombre)
    {
        $pokemon = R::dispense('pokemon');
        $pokemon->nombre = $nombre;
        R::store($pokemon);
    }
}
?>