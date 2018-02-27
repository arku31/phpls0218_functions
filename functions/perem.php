<?php
function perem($action)
{
    $data = func_get_args();
    echo $data[0];
    unset($data[0]);
    print_r($data);
}

//perem('-', 1,2,3,4);
