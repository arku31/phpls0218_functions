<?php
$x = -1111;
function recur($x)
{
    echo $x;
    if ($x < 10) {
        recur(++$x);
    }
}

//recur(0);
//
$asd = 123;
$anon = function ($a) use ($asd, $x) {
    return $asd.$x.$a;
};
//echo $anon(1);

if ($x > 1) {
    function calcX($x)
    {
        return $x * 1000;
    }
} else {
    function calcX($x)
    {
        return $x / 1000;
    }
}
echo calcX($x);
