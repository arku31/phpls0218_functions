<?php
$unixTime = time();
//Можно по простому, математически
$oneDayAgo = $unixTime - (60 * 60 * 24); //вчера в это время
echo date('d.m.Y'); //выведет текущую дату в формате d.m.Y
echo PHP_EOL;
echo date('d.m.Y H:i', $oneDayAgo); //выведет вчерашнюю дату и время
echo PHP_EOL;
$customdate = mktime(10, 10, 33, 10, 14, 2018);
echo $customdate;
$time = strtotime('28.02.2018');
echo PHP_EOL, date('d.m.Y', $time);