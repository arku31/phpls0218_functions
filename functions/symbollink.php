<?php
$x = 10;

function moreAge(&$x)
{
    $x++;
    echo 'Внутри функции: '.$x.PHP_EOL;
}
moreAge($x);
echo 'Снаружи функции: '.$x.PHP_EOL;


function getArray()
{
    return [1,2,3 => ['asd']];
}


echo "<pre>";
$arr = getArray();
print_r($arr);




function test($arr)
{
    echo 'Внутри функции:';
    print_r(AAA);
    $age = 33;
    return $age;
}
$age = test($arr);
echo 'age:'.$age;
foreach ($arr as $item) {

}

print_r($item);

