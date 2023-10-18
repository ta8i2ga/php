<?php

function sankaku($teihen,$takasa)
{
    return $teihen * $takasa / 2;
}

function sikaku($yoko,$tate)
{

    return $yoko * $tate;
}

function daikei($jouhen,$kahen,$takasa)
{
    return ($jouhen + $kahen) * $takasa / 2;
}

echo sankaku(1,2) . "<br/>";
echo sikaku(2,4) . "<br/>";
echo daikei(2,5,3);