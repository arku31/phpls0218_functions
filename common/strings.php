<?php
$len = strlen('asd');

$string = 'asd123';
$replace = str_replace('asd', 'zzz', $string);
//echo $replace;
//         01234567
$strpos = 'original';

$is_present = strpos($strpos, 'ig'); // 0 !== false

var_dump($is_present);

if ($is_present == false) {
    echo 'Слова нет';
}
echo chr(12);

//strtolower, strotoupper, strrev