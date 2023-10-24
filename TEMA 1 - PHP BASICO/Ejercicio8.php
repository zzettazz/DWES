<?php

$hoy = getdate();
$dia = 0;
$mes = 0;
$anyo = 1000;

do
{
    $dia = readline("Día: ");
}
while ($dia < 1 || $dia > 31);

do
{
    $mes = readline("Mes: ");
}
while ($mes < 1 || $mes > 12);

$anyo = readline("Año: ");

$format = $hoy["year"]."-".$hoy["mon"]."-".$hoy["mday"];

$fechaActual = new DateTime($format);
$fechaSeleccionada = new DateTime($anyo.$mes.$dia);

$intervalo = date_diff($fechaActual, $fechaSeleccionada);

$anios = $intervalo->y;
$dias = $intervalo->d;
$meses = $intervalo->m;

$mesesTxt;
$diasTxt;

if ($meses > 1) $mesesTxt = "meses";
else $mesesTxt = "mes";
if ($dias > 1) $diasTxt = "días";
else $diasTxt = "día";

$mensaje = "Han transcurrido ";

if ($anios != 0) $mensaje = $mensaje."$anios años, ";
if ($meses != 0) $mensaje = $mensaje."$meses $mesesTxt, ";
if ($dias != 0) $mensaje = $mensaje."$dias $diasTxt.";

echo($mensaje);

?>