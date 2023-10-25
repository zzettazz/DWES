<?php

if (isset($_COOKIE["UID"]))
{
    $valCookie = $_COOKIE["UID"];
    echo "<h1>Hola de nuevo. Te conozco como UID: $valCookie</h1>";
}
else
{
    echo "<h1>Bienvenido desconocido, a partir de ahora te recordaré</h1>";
    setcookie("UID",generaCadenaAleatoria());
}

function generaCadenaAleatoria($longitud = 5) { 
  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  $base = strlen($charset); 
  $result = '';
  $now = explode(' ', microtime())[1];
  while ($now >= $base){
    $i = $now % $base;
    $result = $charset[$i] . $result;
    $now /= $base;
  }
  return substr($result, -5);
}

?>