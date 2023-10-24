<?php

$n = readline("Introduce número N (repeticiones): ");
$p = readline("Introduce número P (fluctuación): ");;

for($i = 1;$i <= $n; $i++)
{
    for($i2 = 0;$i2 < $p; $i2++)
    {
        echo($i2);
    }
    if ($i != $n) echo("|"); 
}

?>