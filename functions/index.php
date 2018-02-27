<?php
function getX()
{
    $x = 3.77;
    return $x;
}
getX();
function getY()
{
    $y = 'yyyy'; //izmenil
    return $y;
}
echo roundX().'<br>';
echo roundX(55.8).'<br>';
function roundX($x = null)
{
    if (empty($x)) {
        $x = getX();
    }
    $result =  ceil($x) / 10 * 10;
    return $result;
}

//$x = getX();
function getPost()
{
    return 'post';
}

function thePost()
{
    echo get_post();
}

