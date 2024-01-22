<?php
class Usuario_model extends CI_Model
{
    function c($loginname, $passwd)
    {
        $usuario = R::dispense('usuario');
        $usuario->loginname = $loginname;
        $usuario->passwd = password_hash($passwd, PASSWORD_DEFAULT);
        $usuario->admin = false;
        R::store($usuario);
    }

    function r()
    {
        return R::findAll('usuario');
    }

    function comprobarLogin($loginname, $passwd)
    {
        $usuario = R::findOne('usuario', 'loginname=?', [$loginname]);
        if ($usuario == null || !password_verify($passwd, $usuario->passwd)) {
            throw new Exception("Usuario o contraseña incorrectas");
        }
        return $usuario;
    }

    function init()
    {
        if (R::findOne('usuario', 'loginname=?', ['admin']) == null) {
            $pwd = 'admin';
            $admin = R::dispense('usuario');
            $admin->loginname = 'admin';
            $admin->passwd = password_hash($pwd, PASSWORD_DEFAULT);
            $admin->admin = true;
            error_reporting(0);
            R::store($admin);
            error_reporting(E_ALL);
        }
    }
}
?>